import { mapearParams } from "@/shared/utils"
import { endpoints } from "@config/api.config"

export class MayorContableController {
    constructor() {}

    async listar(params) {
        const response = await axios.get(
            endpoints.mayor_contable + "filtrar/" + mapearParams(params)
        )

        return {
            saldo_anterior: response.data.data.saldo_anterior,
            cargos: response.data.data.cargos,
            creditos: response.data.data.creditos,
            saldo_actual: response.data.data.saldo_actual,
            results: response.data.data.results,
        }
    }
}
