import { useNotificaciones } from "@/components/toastification/application/notificaciones"

export function mapearParams(params) {
    const query = []

    // comprueba si el valor es valido
    for (const key in params)
        if (params[key] !== null && params[key] !== undefined) {
            query.push(`${key}=${params[key]}`)
        }
    return `?${query.join("&")}`
}

function sleep(ms) {
    return new Promise((res) => setTimeout(res, ms))
}

function obtenerMensajesError(error) {
    const mensajes = []
    if (error.response?.data.errors) {
        const errores = Object.values(error.response.data.errors)
        mensajes.push(...errores.flat())
    }
    return mensajes
}

export async function notificarMensajesError(mensajes) {
    const { notificarAdvertencia } = useNotificaciones()

    for (let i = 0; i < mensajes.length; i++) {
        await sleep(0)
        notificarAdvertencia(mensajes[i])
        await sleep(1000)
    }
}

export function gestionarNotificacionError(error) {
    const { notificarAdvertencia } = useNotificaciones()

    const mensajes = obtenerMensajesError(error)
    if (mensajes.length > 0) {
        notificarMensajesError(mensajes)
    } else {
        notificarAdvertencia(error.mensaje)
    }
}
