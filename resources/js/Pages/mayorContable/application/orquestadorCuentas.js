import { useSelector } from "@/shared/selector"
import { ref } from "vue"

export function useOrquestadorCuentas(cuentaSeleccionada, endpoint) {
    const refListadoSeleccionable = ref()
    const listado = ref([])
    const criterioBusqueda = ref()

    const singleSelector = {
        refListadoSeleccionable: refListadoSeleccionable,
        listadoSeleccionable: listado,
        endpoint: endpoint,
        seleccionar: (cuenta) => {
            cuentaSeleccionada.cc_seqcta = cuenta.cc_seqcta
            cuentaSeleccionada.cc_nombre = cuenta.cc_nombre
            criterioBusqueda.value =
                cuenta.cc_nivel2 +
                cuenta.cc_nivel3 +
                cuenta.cc_nivel4 +
                cuenta.cc_nivel5 +
                cuenta.cc_nivel6 +
                cuenta.cc_auxiliar
        },
    }

    const selector = useSelector(singleSelector)

    const listar = () => selector.listar(criterioBusqueda.value)

    const seleccionar = (fila) => selector.seleccionar(fila.cc_seqcta)

    return {
        refListadoSeleccionableCuentas: refListadoSeleccionable,
        listadoCuentas: listado,
        listarCuentas: listar,
        seleccionarCuenta: seleccionar,
        criterioBusquedaCuenta: criterioBusqueda,
    }
}
