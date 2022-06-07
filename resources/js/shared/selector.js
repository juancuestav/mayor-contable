import { SelectorController } from "./selectorController"
import { useNotificaciones } from "@components/toastification/application/notificaciones"

export function useSelector(selector) {
    const controller = new SelectorController(selector.endpoint)
    const { notificarAdvertencia } = useNotificaciones()

    const listar = async (criterioBusqueda) => {
        const filtros = {
            search: criterioBusqueda,
        }

        if (!criterioBusqueda) delete filtros.search

        const { response } = await controller.listar(filtros)
        const result = response.data.results

        if (result.length === 0) {
            notificarAdvertencia("No se encontraron coincidencias")
            return
        }

        // si se obtiene un solo elemento, se auto selecciona
        if (result.length === 1) {
            selector.refListadoSeleccionable.value.seleccionar(result[0])
            return
        }

        // si se obtienen mas, mostrar el listado
        if (result.length > 1) {
            selector.listadoSeleccionable.value = [...result]
            selector.refListadoSeleccionable.value.mostrar()
        }
    }

    const seleccionar = async (id) => {
        const { result: seleccionado } = await controller.consultar(id)
        selector.seleccionar(seleccionado)
    }

    return {
        listar,
        seleccionar,
    }
}
