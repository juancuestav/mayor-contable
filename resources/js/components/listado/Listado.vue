<template>
    <div class="row">
        <!-- Tabla -->
        <div class="col-12">
            <div ref="refTabulator"></div>
        </div>
    </div>
</template>

<script>
import { tipoSeleccion } from "@config/utils.config"
import { computed, ref, onMounted, defineComponent, watch } from "vue"
import { TabulatorFull as Tabulator } from "tabulator-tables"

export default defineComponent({
    props: {
        configuracionColumnas: {
            required: true,
            type: Array,
        },
        elementos: Array,
        contextMenu: Array,
        tipoSeleccion: {
            default: tipoSeleccion.NINGUNA,
        },
    },

    emits: ["fila-seleccionada"],
    setup(props, { emit }) {
        const listado = computed(() => props.elementos ?? [])
        const tabla = ref()
        const refTabulator = ref()
        const mostrarSelectorColumnas = ref(false)
        let selectorColumnasGenerado = false

        // 1. Inicializar tabla
        async function inicializarTabla() {
            return await new Tabulator(refTabulator.value, {
                height: "400px",
                layout: "fitColumns",
                placeholder: "Sin datos",
                responsiveLayout: "collapse",
                selectable: props.tipoSeleccion,
                resizableColumnFit: true,
                rowContextMenu: props.contextMenu,
                columns: [...props.configuracionColumnas],
            })
        }

        // Exportar data
        const exportar = {
            pdf: function () {
                tabla.value.download("pdf", "data.pdf", {
                    orientation: "portrait",
                    title: "MinimarketDanny",
                })
            },
            excel: function () {
                tabla.value.download("xlsx", "data.xlsx", {
                    sheetName: "My Data",
                })
            },
            csv: function () {
                tabla.value.download("csv", "data.csv")
            },
            json: function () {
                tabla.value.download("json", "data.json")
            },
        }

        function columnasVisibles() {
            const columns = tabla.value.getColumns()
            const fragment = new DocumentFragment()

            for (let column of columns) {
                if (!column.getDefinition().title) continue

                const icon = document.createElement("i")
                icon.classList.add("bi-check-circle-fill", "me-2")
                icon.classList.add(
                    column.isVisible() ? "text-success" : "text-secondary"
                )

                const label = document.createElement("span")
                const title = document.createElement("span")

                label.classList.add(
                    "d-inline-block",
                    "me-4",
                    "mb-2",
                    "cursor-pointer"
                )
                title.textContent = column.getDefinition().title

                label.appendChild(icon)
                label.appendChild(title)

                label.addEventListener("click", function (e) {
                    e.stopPropagation()

                    column.toggle()

                    if (column.isVisible()) {
                        icon.classList.add("text-success")
                        icon.classList.remove("text-secondary")
                    } else {
                        icon.classList.add("text-secondary")
                        icon.classList.remove("text-success")
                    }
                })
                fragment.appendChild(label)
            }

            const selector = document.getElementById("selectorColumnas")
            if (selector) {
                selector.appendChild(fragment)
            }
        }

        function seleccionar() {
            const selectedData = tabla.value.getSelectedData()
            emit("fila-seleccionada", selectedData[0])
        }

        function toggleSelectorColumnas() {
            if (!selectorColumnasGenerado) {
                columnasVisibles()
                selectorColumnasGenerado = true
            }
            mostrarSelectorColumnas.value = !mostrarSelectorColumnas.value
        }

        onMounted(async () => {
            tabla.value = await inicializarTabla()

            tabla.value.on("tableBuilt", function () {
				watch(listado, () => {
					tabla.value.setData(listado.value)
				})
            })
        })

        return {
            refTabulator,
            exportar,
            mostrarSelectorColumnas,
            seleccionar,
            toggleSelectorColumnas,
        }
    },
})
</script>
