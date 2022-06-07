import ToastificationContent from "../view/toastificationContent.vue"
import { createToastInterface } from "vue-toastification"

export function useNotificaciones() {
    const toast = createToastInterface({
        hideProgressBar: true,
        closeOnClick: false,
        closeButton: false,
        icon: false,
        timeout: 3000,
        transition: "Vue-Toastification__fade",
    })

    function obtenerMensaje(mensaje) {
        if (Array.isArray(mensaje)) return mensaje.join("<br/>")
        return mensaje
    }

    function notificarAdvertencia(mensaje) {
        toast(
            {
                component: ToastificationContent,
                props: {
                    title: "Advertencia",
                    icon: "bi bi-exclamation-triangle",
                    variant: "warning",
                    text: obtenerMensaje(mensaje),
                },
            },
            {
                toastClassName: "whiteBackground",
            }
        )
    }

    function notificarError(mensaje) {
        toast(
            {
                component: ToastificationContent,
                props: {
                    title: "Error",
                    icon: "bi bi-exclamation-octagon",
                    variant: "danger",
                    text: obtenerMensaje(mensaje),
                },
            },
            {
                toastClassName: "whiteBackground",
            }
        )
    }

    function notificarCorrecto(mensaje) {
        toast(
            {
                component: ToastificationContent,
                props: {
                    title: "Correcto",
                    icon: "bi bi-check",
                    variant: "success",
                    text: obtenerMensaje(mensaje),
                },
            },
            {
                toastClassName: "whiteBackground",
            }
        )
    }

    function notificarPersistente(
        mensaje,
        variant = "success",
        icon = "bi bi-exclamation-octagon"
    ) {
        toast(
            {
                component: ToastificationContent,
                props: {
                    title: "Correcto",
                    text: obtenerMensaje(mensaje),
                    icon,
                    variant,
                },
            },
            {
                toastClassName: "whiteBackground",
            }
        )
    }

    return {
        notificarAdvertencia,
        notificarError,
        notificarCorrecto,
        notificarPersistente,
    }
}
