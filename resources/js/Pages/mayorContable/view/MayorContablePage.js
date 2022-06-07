// Dependencias
import { configuracionColumnasCuentas } from "../domain/configuracionColumnasCuentas"
import { configuracionColumnas } from "../domain/configuracionColumnas"
import { CONFIG_ANIO, CONFIG_CUENTA } from "@config/numeric.config"
import { gestionarNotificacionError } from "@/shared/utils"
import { defineComponent, reactive, ref } from "vue"

// Componentes
import { useNotificaciones } from "@components/toastification/application/notificaciones"
import ListadoSeleccionable from "@components/listado/ListadoSeleccionable.vue"
import Listado from "@components/listado/Listado.vue"
import Cleave from "vue-cleave-component"

// Logica y controladores
import { MayorContableController } from "../infraestructure/MayorContableController"
import { useOrquestadorCuentas } from "../application/orquestadorCuentas"
import { MayorContable } from "../domain/MayorContable"
import { Cuenta } from "../domain/Cuenta"

export default defineComponent({
    components: {
        Listado,
        ListadoSeleccionable,
        Cleave,
    },
    setup() {
        const listado = ref([])
        const mayorContable = reactive(new MayorContable())
        const controller = new MayorContableController()
        const cuentaSeleccionada = reactive(new Cuenta())
        const refSaldoAnterior = ref()
        const refCargos = ref()
        const refCreditos = ref()
        const refSaldoActual = ref()
        const { notificarCorrecto } = useNotificaciones()

        async function filtrar() {
            const data = {
                cc_seqcta: cuentaSeleccionada.cc_seqcta,
                desde: mayorContable.desde,
                hasta: mayorContable.hasta,
            }

            try {
                const {
                    saldo_anterior,
                    cargos,
                    creditos,
                    saldo_actual,
                    results,
                } = await controller.listar(data)

                listado.value = results
                refSaldoAnterior.value = saldo_anterior
                refCargos.value = cargos
                refCreditos.value = creditos
                refSaldoActual.value = saldo_actual

                notificarCorrecto("Datos consultados exitosamente!")
            } catch (error) {
                gestionarNotificacionError(error)
            }
        }

        const {
            refListadoSeleccionableCuentas,
            criterioBusquedaCuenta,
            listadoCuentas,
            listarCuentas,
            seleccionarCuenta,
        } = useOrquestadorCuentas(cuentaSeleccionada, "cuentas")

        return {
            // Refs
            mayorContable,
            listado,
            filtrar,
            cuentaSeleccionada,
            // Columnas
            configuracionColumnas,
            configuracionColumnasCuentas,
            // Selector de cuentas
            refListadoSeleccionableCuentas,
            criterioBusquedaCuenta,
            listadoCuentas,
            listarCuentas,
            seleccionarCuenta,
            // Cálculos
            refSaldoAnterior,
            refCargos,
            refCreditos,
            refSaldoActual,
            // Dependencias
            CONFIG_ANIO,
            CONFIG_CUENTA,
        }
    },
})
