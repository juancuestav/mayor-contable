<template>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header fw-bold d-flex justify-content-between">
                <span>Mayor contable</span>
                <button class="btn btn-primary" @click="filtrar()">
                    <i class="bi-search me-2"></i> Consultar
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Cuenta -->
                    <div class="col-md-2">
                        <label for="" class="form-label">Cuenta</label>
                        <cleave
                            v-model="criterioBusquedaCuenta"
                            :options="CONFIG_CUENTA"
                            class="form-control"
                            placeholder="0000..."
                            @keydown.enter="listarCuentas()"
                        />
                    </div>

                    <!-- Resultado de busqueda -->
                    <div class="col-md-4 mb-4">
                        <label for="" class="form-label">&nbsp;</label>
                        <input
                            v-model="cuentaSeleccionada.cc_nombre"
                            type="text"
                            disabled
                            class="form-control"
                            placeholder="Resultado de búsqueda"
                        />
                    </div>

                    <!-- Año fiscal -->
                    <div class="col-md-2 mb-4">
                        <label for="" class="form-label">Año fiscal</label>
                        <cleave
                            v-model="mayorContable.anio_fiscal"
                            :options="CONFIG_ANIO"
                            class="form-control"
                            placeholder="0000"
                        />
                    </div>

                    <!-- Desde -->
                    <div class="col-md-2 mb-4">
                        <label for="" class="form-label">Desde</label>
                        <input
                            v-model="mayorContable.desde"
                            type="date"
                            class="form-control"
                        />
                    </div>

                    <!-- Hasta -->
                    <div class="col-md-2 mb-4">
                        <label for="" class="form-label">Hasta</label>
                        <input
                            v-model="mayorContable.hasta"
                            type="date"
                            class="form-control"
                        />
                    </div>
                </div>

                <listado
                    :configuracion-columnas="configuracionColumnas"
                    :elementos="listado"
                ></listado>
            </div>
            <div class="card-footer pb-4">
                <div class="row row-cols-md-4 row-cols-1">
                    <div class="col">
                        <label for="" class="form-label">Saldo anterior</label>
                        <input
                            v-model="refSaldoAnterior"
                            class="form-control"
                            type="text"
                            disabled
                        />
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Cargos</label>
                        <input
                            v-model="refCargos"
                            class="form-control"
                            type="text"
                            disabled
                        />
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Créditos</label>
                        <input
                            v-model="refCreditos"
                            class="form-control"
                            type="text"
                            disabled
                        />
                    </div>

                    <div class="col">
                        <label for="" class="form-label">Saldo actual</label>
                        <input
                            v-model="refSaldoActual"
                            class="form-control"
                            type="text"
                            disabled
                        />
                    </div>
                </div>
            </div>
        </div>

        <listado-seleccionable
            ref="refListadoSeleccionableCuentas"
            :configuracion-columnas="configuracionColumnasCuentas"
            :elementos="listadoCuentas"
            @seleccionar="seleccionarCuenta"
        ></listado-seleccionable>
    </div>
</template>

<script src="./MayorContablePage"></script>
