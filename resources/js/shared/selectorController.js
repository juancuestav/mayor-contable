import { endpoints } from "@config/api.config"
import { mapearParams } from "./utils"

export class SelectorController {
    constructor(endpoint) {
        this.endpoint = endpoints[endpoint]
    }

    async consultar(id) {
        const response = await axios.get(this.endpoint + id)
        return {
            response,
            result: response.data.modelo,
        }
    }

    async listar(params) {
        const response = await axios.get(
            this.endpoint + "listar" + mapearParams(params)
        )
        return { response, result: response.data.results }
    }
}
