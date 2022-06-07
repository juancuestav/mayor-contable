<?php

namespace Database\Seeders;

use App\Models\TmaPlancta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TmaPlanctaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = [
			[1, 1, '', '', '', '', '', '', '', '2015-01-01', 'TOTAL ACTIVO', 1, 'G'],
			[2, 1, '1', '', '', '', '', '', '', '2015-01-01', 'ACTIVO', 2, 'G'],
			[3, 1, '1', '1', '', '', '', '', '', '2015-01-01', 'DISPONIBLE', 3, 'G'],
			[4, 1, '1', '1', '01', '', '', '', '', '2015-01-01', 'CAJA Y BANCOS', 4, 'G'],
			[5, 1, '1', '1', '01', '01', '', '', '', '2015-01-01', 'CAJAS', 5, 'M'],
			[6, 1, '1', '1', '01', '01', '', '001', '6-001', '2015-01-01', 'Caja General', 10, 'M'],
			[7, 1, '1', '1', '01', '01', '', '002', '7-002', '2015-01-01', 'Caja Rotativa (oficina)', 10, 'M'],
			[8, 1, '1', '1', '01', '02', '', '', '', '2015-01-01', 'BANCOS', 5, 'M'],
			[9, 1, '1', '1', '01', '02', '', '001', '9-001', '2015-01-01', 'Banco del Austro Cta. Aho 7215134', 10, 'M'],
			[10, 1, '1', '1', '01', '03', '', '', '', '2015-01-01', 'INVERSIONES FINANCIERAS', 5, 'G'],
			[11, 1, '1', '1', '01', '03', '', '001', '11-001', '2015-01-01', 'Inversiones Financieras Temporales', 10, 'M'],
			[12, 1, '1', '2', '', '', '', '', '', '2015-01-01', 'EXIGIBLE', 3, 'G'],
			[13, 1, '1', '2', '01', '', '', '', '', '2015-01-01', 'CTAS. Y DOCTOS. POR COBRAR', 4, 'G'],
			[14, 1, '1', '2', '01', '', '', '001', '14-001', '2015-01-01', 'Ctas. y Docs. por cobrar clientes', 10, 'M'],
			[15, 1, '1', '2', '01', '', '', '002', '15-002', '2015-01-01', 'Cta. Transitoria NC Clientes', 10, 'M'],
			[16, 1, '1', '2', '01', '', '', '003', '16-003', '2015-01-01', 'Doc. Por Cobrar', 10, 'M'],
			[17, 1, '1', '2', '01', '', '', '004', '17-004', '2015-01-01', 'Cheques protestados clientes', 10, 'M'],
			[18, 1, '1', '2', '01', '', '', '005', '18-005', '2015-01-01', 'Tarjeta de credito', 10, 'M'],
			[19, 1, '1', '2', '01', '', '', '006', '19-006', '2015-01-01', '(-) Provisión Cuentas Incobrables', 10, 'M'],
			[20, 1, '1', '2', '02', '', '', '', '', '2015-01-01', 'CTAS. Y DOCS. POR COBRAR RELACIONADOS', 4, 'G'],
			[21, 1, '1', '2', '02', '', '', '001', '21-001', '2015-01-01', 'Ctas. y Doc. por cobrar clientes relacio', 10, 'M'],
			[22, 1, '1', '2', '02', '', '', '002', '22-002', '2015-01-01', 'Otras Cuentas por Cobrar', 10, 'M'],
			[23, 1, '1', '2', '02', '', '', '003', '23-003', '2015-01-01', 'DIFERENCIA EN VENTA', 10, 'M'],
			[24, 1, '1', '2', '02', '', '', '004', '24-004', '2015-01-01', 'Prestamos al Personal', 10, 'M'],
			[25, 1, '1', '2', '02', '', '', '005', '25-005', '2015-01-01', 'Anticipo a Personal', 10, 'M'],
			[26, 1, '1', '2', '03', '', '', '', '', '2015-01-01', 'CREDITO TRIBUTARIO', 4, 'M'],
			[27, 1, '1', '2', '03', '', '', '001', '27-001', '2015-01-01', 'Crédito Tributario IVA', 10, 'M'],
			[28, 1, '1', '2', '03', '', '', '002', '28-002', '2015-01-01', 'Credito Tributario Retencion IVA', 10, 'M'],
			[29, 1, '1', '2', '03', '', '', '003', '29-003', '2017-02-06', 'Retención IVA 10% 721', 10, 'M'],
			[30, 1, '1', '2', '03', '', '', '004', '30-004', '2017-02-06', 'Retención IVA 20% 723', 10, 'M'],
			[31, 1, '1', '2', '03', '', '', '005', '31-005', '2015-01-01', 'Retencion IVA 30%   725', 10, 'M'],
			[32, 1, '1', '2', '03', '', '', '006', '32-006', '2016-07-20', 'Retención IVA 50% 727', 10, 'M'],
			[33, 1, '1', '2', '03', '', '', '007', '33-007', '2015-01-01', 'Retencion IVA 70%   729', 10, 'M'],
			[34, 1, '1', '2', '03', '', '', '008', '34-008', '2015-01-01', 'Retencion IVA 100%   731', 10, 'M'],
			[35, 1, '1', '2', '03', '', '', '009', '35-009', '2015-01-01', 'IVA Pagado (Compras)', 10, 'M'],
			[36, 1, '1', '2', '03', '', '', '010', '36-010', '2015-01-01', 'Cta Trnasitoria Dev Iva en Compras', 10, 'M'],
			[37, 1, '1', '2', '04', '', '', '', '', '2015-01-01', 'CREDITO TRIBUTARIO RETENCIONES RECIBIDAS', 4, 'G'],
			[38, 1, '1', '2', '04', '', '', '001', '38-001', '2015-01-01', 'Retenciones Recibidas IR 1%', 10, 'M'],
			[39, 1, '1', '2', '04', '', '', '002', '39-002', '2015-01-01', 'Retenciones Recibidas IR 2%', 10, 'M'],
			[40, 1, '1', '2', '04', '', '', '003', '40-003', '2015-01-01', 'Retenciones Recibidas IR 8%', 10, 'M'],
			[41, 1, '1', '2', '04', '', '', '004', '41-004', '2015-01-01', 'Retenciones Recibidas IR 10%', 10, 'M'],
			[42, 1, '1', '2', '05', '', '', '', '', '2015-01-01', 'ANTICIPO DE IMPUESTO A LA RENTA', 4, 'G'],
			[43, 1, '1', '2', '05', '', '', '001', '43-001', '2015-01-01', 'Anticipo de Impuesto a la Renta', 10, 'M'],
			[44, 1, '1', '3', '', '', '', '', '', '2015-01-01', 'INVENTARIOS', 3, 'G'],
			[45, 1, '1', '3', '01', '', '', '', '', '2015-01-01', 'INVENTARIO DE MERCADERIA', 4, 'M'],
			[46, 1, '1', '3', '01', '', '', '001', '46-001', '2015-01-01', 'Inventario de Materia Prima', 10, 'M'],
			[47, 1, '1', '3', '01', '', '', '002', '47-002', '2015-01-01', 'Inventario de suministros y materiales', 10, 'M'],
			[48, 1, '1', '3', '01', '', '', '003', '48-003', '2015-01-01', 'Inventario de Productos en proceso', 10, 'M'],
			[49, 1, '1', '3', '01', '', '', '004', '49-004', '2015-01-01', 'Inventario de Mercaderia en almacen', 10, 'M'],
			[50, 1, '1', '3', '01', '', '', '005', '50-005', '2015-01-01', 'Mercaderia en Transito', 10, 'M'],
			[51, 1, '1', '3', '01', '', '', '006', '51-006', '2015-01-01', 'Inventario, repuestos, herramientas y ac', 10, 'M'],
			[52, 1, '1', '3', '01', '', '', '007', '52-007', '2015-01-01', 'Ajuste de Inventario', 10, 'M'],
			[53, 1, '1', '3', '01', '', '', '008', '53-008', '2016-03-23', 'Diferencia Toma de Inventario', 10, 'M'],
			[54, 1, '1', '4', '', '', '', '', '', '2015-01-01', 'OTROS ACTIVOS', 3, 'G'],
			[55, 1, '1', '4', '01', '', '', '', '', '2015-01-01', 'PAGOS ANTICIPADOS', 4, 'G'],
			[56, 1, '1', '4', '01', '', '', '001', '56-001', '2015-01-01', 'Seguros Pagados por anticipado', 10, 'M'],
			[57, 1, '1', '4', '01', '', '', '002', '57-002', '2015-01-01', 'Arriendos Pagados por anticipado', 10, 'M'],
			[58, 1, '1', '4', '01', '', '', '003', '58-003', '2015-01-01', 'Dividendos Pagados por Anticipado', 10, 'M'],
			[59, 1, '1', '4', '01', '', '', '004', '59-004', '2015-01-01', 'Anticipo a Proveedores', 10, 'M'],
			[60, 1, '1', '4', '01', '', '', '005', '60-005', '2015-01-01', 'Otros Activos Corrientes', 10, 'M'],
			[61, 1, '1', '5', '', '', '', '', '', '2015-01-01', 'ACTIVOS FIJOS', 3, 'G'],
			[62, 1, '1', '5', '01', '', '', '', '', '2015-01-01', 'NO DEPRECIABLE', 4, 'G'],
			[63, 1, '1', '5', '01', '', '', '001', '63-001', '2015-01-01', 'Terreno', 10, 'M'],
			[64, 1, '1', '5', '01', '', '', '002', '64-002', '2015-01-01', 'Obras en Proceso', 10, 'M'],
			[65, 1, '1', '5', '02', '', '', '', '', '2015-01-01', 'DEPRECIABLE', 4, 'M'],
			[66, 1, '1', '5', '02', '', '', '001', '66-001', '2015-01-01', 'Edificios', 10, 'M'],
			[67, 1, '1', '5', '02', '', '', '002', '67-002', '2015-01-01', 'Obras en Proceso', 10, 'M'],
			[68, 1, '1', '5', '02', '', '', '003', '68-003', '2015-01-01', 'Instalaciones', 10, 'M'],
			[69, 1, '1', '5', '02', '', '', '004', '69-004', '2015-01-01', 'Muebles y Enseres', 10, 'M'],
			[70, 1, '1', '5', '02', '', '', '005', '70-005', '2015-01-01', 'Maquinaria y Equipo', 10, 'M'],
			[71, 1, '1', '5', '02', '', '', '006', '71-006', '2015-01-01', 'Naves, Aeronaves, Barcazas y Similares', 10, 'M'],
			[72, 1, '1', '5', '02', '', '', '007', '72-007', '2015-01-01', 'Equipos de Oficina', 10, 'M'],
			[73, 1, '1', '5', '02', '', '', '008', '73-008', '2015-01-01', 'Equipos de Computación y Software', 10, 'M'],
			[74, 1, '1', '5', '02', '', '', '009', '74-009', '2015-01-01', 'Otros Activos Fijos', 10, 'M'],
			[75, 1, '1', '5', '03', '', '', '', '', '2015-01-01', 'DEPRECIACION ACUM. NORMAL', 4, 'M'],
			[76, 1, '1', '5', '03', '', '', '001', '76-001', '2015-01-01', '(-) Depreciacion Acumulada', 10, 'M'],
			[77, 1, '1', '5', '03', '', '', '002', '77-002', '2015-01-01', '(-) Deprec. Acumul acelerada de Vehículo', 10, 'M'],
			[78, 1, '1', '5', '03', '', '', '003', '78-003', '2017-05-02', '(-) Deprec. Acum. Equipo de Computación', 10, 'M'],
			[79, 1, '1', '5', '03', '', '', '004', '79-004', '2017-05-02', '(-) Deprec. Acum. Equipo de Oficina', 10, 'M'],
			[80, 1, '1', '5', '03', '', '', '005', '80-005', '2017-05-02', '(-) Deprec. Acum. Muebles y Enseres', 10, 'M'],
			[81, 1, '1', '5', '03', '', '', '006', '81-006', '2017-05-02', '(-) Deprec. Acum. Maquinaria y Equipo', 10, 'M'],
			[82, 1, '1', '5', '03', '', '', '007', '82-007', '2017-05-02', '(-) Deprec. Acum. Vehículo', 10, 'M'],
			[83, 1, '1', '5', '04', '', '', '', '', '2015-01-01', 'FIJO INTANGIBLE', 4, 'G'],
			[84, 1, '1', '5', '04', '', '', '001', '84-001', '2015-01-01', 'Marcas, Patentes, derechos de llave y ot', 10, 'M'],
			[85, 1, '1', '5', '04', '', '', '002', '85-002', '2015-01-01', '(-) Amortización Acumulada', 10, 'M'],
			[86, 1, '1', '7', '', '', '', '', '', '2015-01-01', 'ACTIVO LARGO PLAZO', 3, 'G'],
			[87, 1, '1', '7', '01', '', '', '', '', '2015-01-01', 'CTAS. Y DOCTOS. POR COBRAR L/P', 4, 'G'],
			[88, 1, '1', '7', '01', '', '', '001', '88-001', '2015-01-01', 'Ctas. y Dctos. clientes relacionados L/P', 10, 'M'],
			[89, 1, '1', '7', '01', '', '', '002', '89-002', '2015-01-01', 'Ctas. y Dctos. clientes no Relacionados', 10, 'M'],
			[90, 1, '1', '7', '01', '', '', '003', '90-003', '2015-01-01', 'Otros', 10, 'M'],
			[91, 1, '1', '7', '01', '', '', '004', '91-004', '2015-01-01', '(-) Provisión Ctas. Incobrab. clientes n', 10, 'M'],
			[92, 1, '1', '7', '02', '', '', '', '', '2015-01-01', 'INVERSIONES A L/P', 4, 'G'],
			[93, 1, '1', '7', '02', '', '', '001', '93-001', '2015-01-01', 'Acciones y Participaciones', 10, 'M'],
			[94, 1, '1', '7', '02', '', '', '002', '94-002', '2015-01-01', 'Otras', 10, 'M'],
			[95, 1, '1', '7', '03', '', '', '', '', '2015-01-01', 'PAGOS ANTICIPADOS L/P', 4, 'G'],
			[96, 1, '1', '7', '03', '', '', '001', '96-001', '2015-01-01', 'Otros Gastos Anticipados L/P', 10, 'M'],
			[97, 1, '1', '7', '03', '', '', '002', '97-002', '2015-01-01', 'Otros Activos', 10, 'M'],
			[98, 1, '1', '7', '04', '', '', '', '', '2015-01-01', 'OTROS ACTIVOS', 4, 'G'],
			[99, 1, '1', '7', '04', '', '', '001', '99-001', '2015-01-01', 'Activos POR LIQUIDAR', 10, 'M'],
			[100, 2, '', '', '', '', '', '', '', '2015-01-01', 'TOTAL PASIVO Y PATRIMONIO', 1, 'G'],
			[101, 2, '2', '', '', '', '', '', '', '2015-01-01', 'PASIVO', 2, 'G'],
			[102, 2, '2', '1', '', '', '', '', '', '2015-01-01', 'PASIVO CORRIENTE', 3, 'G'],
			[103, 2, '2', '1', '01', '', '', '', '', '2015-01-01', 'CTAS. Y DCTOS. POR PAGAR PROVEEDORES', 4, 'M'],
			[104, 2, '2', '1', '01', '', '', '001', '104-001', '2015-01-01', 'Ctas. y Dctos. por pagar locales', 10, 'M'],
			[105, 2, '2', '1', '01', '', '', '002', '105-002', '2015-01-01', 'Cheques a Fecha de Proveedores', 10, 'M'],
			[106, 2, '2', '1', '01', '', '', '003', '106-003', '2015-01-01', 'Cta. Transitoria Dev. Interna Compra', 10, 'M'],
			[107, 2, '2', '1', '01', '', '', '004', '107-004', '2015-01-01', 'Otros Doc. Por Pagar', 10, 'M'],
			[108, 2, '2', '1', '01', '', '', '005', '108-005', '2015-01-01', 'N/C Transitoria de proveedores', 10, 'M'],
			[109, 2, '2', '1', '01', '', '', '006', '109-006', '2015-01-01', 'N/C fiscales Transitoria de proveedores', 10, 'M'],
			[110, 2, '2', '1', '02', '', '', '', '', '2015-01-01', 'OBLIGACIONES BANCARIAS', 4, 'M'],
			[111, 2, '2', '1', '03', '', '', '', '', '2015-01-01', 'PRESTAMOS DE ACCIONISTAS', 4, 'G'],
			[112, 2, '2', '1', '04', '', '', '', '', '2015-01-01', 'OBLIGACIÓN CON ADMINIST. TRIBUTARIA FORM. 103', 4, 'M'],
			[113, 2, '2', '1', '04', '', '', '001', '113-001', '2015-01-01', 'Retención Fuente IR 10% 303', 10, 'M'],
			[114, 2, '2', '1', '04', '', '', '002', '114-002', '2015-01-01', 'Retención Fuente IR  8%  304A', 10, 'M'],
			[115, 2, '2', '1', '04', '', '', '003', '115-003', '2015-01-01', 'Retención Fuente IR  8%  304 B', 10, 'M'],
			[116, 2, '2', '1', '04', '', '', '004', '116-004', '2015-01-01', 'Retención Fuente IR  2%  307', 10, 'M'],
			[117, 2, '2', '1', '04', '', '', '005', '117-005', '2015-01-01', 'Retención Fuente IR  1%  309', 10, 'M'],
			[118, 2, '2', '1', '04', '', '', '006', '118-006', '2015-01-01', 'Retención Fuente IR  1%  310', 10, 'M'],
			[119, 2, '2', '1', '04', '', '', '007', '119-007', '2015-01-01', 'Retención Fuente IR  2%  311', 10, 'M'],
			[120, 2, '2', '1', '04', '', '', '008', '120-008', '2015-01-01', 'Retención Fuente IR  1%  312', 10, 'M'],
			[121, 2, '2', '1', '04', '', '', '009', '121-009', '2015-01-01', 'Retención Fuente IR  8%  320', 10, 'M'],
			[122, 2, '2', '1', '04', '', '', '010', '122-010', '2015-01-01', 'Retención Fuente IR  1%  322', 10, 'M'],
			[123, 2, '2', '1', '04', '', '', '011', '123-011', '2015-01-01', 'Retención Fuente IR  1%  340 A', 10, 'M'],
			[124, 2, '2', '1', '04', '', '', '012', '124-012', '2015-01-01', 'Retención Fuente IR  1%  340 B', 10, 'M'],
			[125, 2, '2', '1', '04', '', '', '013', '125-013', '2015-01-01', 'Retención Fuente IR  2%  341', 10, 'M'],
			[126, 2, '2', '1', '04', '', '', '014', '126-014', '2015-01-01', 'Retención Fuente IR  2%  344', 10, 'M'],
			[127, 2, '2', '1', '04', '', '', '015', '127-015', '2015-06-18', 'Retencion Fuente IR 0% 332', 10, 'M'],
			[128, 2, '2', '1', '04', '', '', '016', '128-016', '2015-12-08', 'Dividendos Distribuidos PN Residente 1%', 10, 'M'],
			[129, 2, '2', '1', '04', '', '', '017', '129-017', '2016-02-02', 'Retención Fuente IR 1%343', 10, 'M'],
			[130, 2, '2', '1', '04', '', '', '018', '130-018', '2016-03-15', 'Retenciòn Fuente IR 8% 304', 10, 'M'],
			[131, 2, '2', '1', '05', '', '', '', '', '2015-01-01', 'OBLIGACIÓN CON ADMINIST. TRIBUTARIA FORM. 104', 4, 'M'],
			[132, 2, '2', '1', '05', '', '', '001', '132-001', '2015-01-01', 'Retención IVA 30%', 10, 'M'],
			[133, 2, '2', '1', '05', '', '', '002', '133-002', '2015-01-01', 'Retención IVA 70%', 10, 'M'],
			[134, 2, '2', '1', '05', '', '', '003', '134-003', '2015-01-01', 'Retención IVA 100%', 10, 'M'],
			[135, 2, '2', '1', '05', '', '', '004', '135-004', '2016-06-27', 'Contribución Solidaria Rem. Por Pagar', 10, 'M'],
			[136, 2, '2', '1', '05', '', '', '005', '136-005', '2015-01-01', 'IVA Cobrado (Ventas)', 10, 'M'],
			[137, 2, '2', '1', '06', '', '', '', '', '2015-01-01', 'IMPUESTOS DEL EJERCICIO', 4, 'G'],
			[138, 2, '2', '1', '06', '', '', '001', '138-001', '2015-01-01', 'Impuesto a la Renta por pagar del Ejercicio', 10, 'M'],
			[139, 2, '2', '1', '06', '', '', '002', '139-002', '2015-01-01', 'Participacion a Trabajadores por pagar', 10, 'M'],
			[140, 2, '2', '1', '07', '', '', '', '', '2015-01-01', 'OBLIGACIONES CON EL IESS', 4, 'M'],
			[141, 2, '2', '1', '07', '', '', '001', '141-001', '2015-01-01', 'Aporte Personal por Pagar (9.45%)', 10, 'M'],
			[142, 2, '2', '1', '07', '', '', '002', '142-002', '2016-07-04', 'Prestamos al IESS por Pagar', 10, 'M'],
			[143, 2, '2', '1', '07', '', '', '003', '143-003', '2015-01-01', 'Aporte Patronal por pagar (12.15%)', 10, 'M'],
			[144, 2, '2', '1', '07', '', '', '004', '144-004', '2015-01-01', 'Pago de IESS por liquidar', 10, 'M'],
			[145, 2, '2', '1', '08', '', '', '', '', '2015-01-01', 'BENEFICIOS SOCIALES POR PAGAR', 4, 'G'],
			[146, 2, '2', '1', '08', '', '', '001', '146-001', '2015-01-01', 'Sueldos y Salarios por Pagar', 10, 'M'],
			[147, 2, '2', '1', '08', '', '', '002', '147-002', '2015-01-01', 'Decimo Tercer Sueldo', 10, 'M'],
			[148, 2, '2', '1', '08', '', '', '003', '148-003', '2015-01-01', 'Decimo Cuarto Sueldo', 10, 'M'],
			[149, 2, '2', '1', '08', '', '', '004', '149-004', '2015-01-01', 'Vacaciones', 10, 'M'],
			[150, 2, '2', '1', '08', '', '', '005', '150-005', '2015-01-01', 'Fondo de Reserva', 10, 'M'],
			[151, 2, '2', '1', '08', '', '', '006', '151-006', '2015-01-01', 'Liquidaciones a personal por pagar', 10, 'M'],
			[152, 2, '2', '1', '09', '', '', '', '', '2015-01-01', 'OBLIGACIONES VARIAS', 4, 'G'],
			[153, 2, '2', '1', '09', '', '', '001', '153-001', '2015-01-01', 'Formularios 103 -104 por pagar', 10, 'M'],
			[154, 2, '2', '1', '10', '', '', '', '', '2015-01-01', 'OTRAS OBLIGACIONES POR PAGAR', 4, 'G'],
			[155, 2, '2', '1', '11', '', '', '', '', '2015-01-01', 'OTROS PASIVOS', 4, 'M'],
			[156, 2, '2', '1', '11', '', '', '001', '156-001', '2015-01-01', 'Provisiones', 10, 'M'],
			[157, 2, '2', '1', '11', '', '', '002', '157-002', '2015-01-01', 'Otros Ingresos por clasificar', 10, 'M'],
			[158, 2, '2', '1', '11', '', '', '003', '158-003', '2015-01-01', 'Anticipos de clientes', 10, 'M'],
			[159, 2, '2', '1', '12', '', '', '', '', '2015-01-01', 'CTAS Y DOCS POR PAGAR RELACIONADOS', 4, 'M'],
			[160, 2, '2', '1', '12', '', '', '001', '160-001', '2015-06-30', 'Dividendos por Pagar', 10, 'M'],
			[161, 2, '2', '2', '', '', '', '', '', '2015-01-01', 'PASIVO A LARGO PLAZO', 3, 'G'],
			[162, 2, '2', '2', '01', '', '', '', '', '2015-01-01', 'CTAS. Y DCTOS. POR PAGAR L/P', 4, 'G'],
			[163, 2, '2', '2', '01', '', '', '001', '163-001', '2015-01-01', 'Ctas. y Dctos. por pagar proveedores loc', 10, 'M'],
			[164, 2, '2', '2', '01', '', '', '002', '164-002', '2015-01-01', 'Ctas. y Dctos. por pagar del exterior', 10, 'M'],
			[165, 2, '2', '2', '02', '', '', '', '', '2015-01-01', 'OBLIGACIONES BANCARIAS', 4, 'M'],
			[166, 2, '2', '2', '02', '', '', '001', '166-001', '2015-01-01', 'Prestamos Bancarios locales', 10, 'M'],
			[167, 2, '2', '2', '03', '', '', '', '', '2015-01-01', 'PRESTAMOS ACCIONISTAS Y CIAS. RELACIONAD', 4, 'G'],
			[168, 2, '2', '2', '03', '', '', '001', '168-001', '2015-01-01', 'Prestamos Accion. y Cías. Relac. locales', 10, 'M'],
			[169, 2, '2', '2', '03', '', '', '002', '169-002', '2015-01-01', 'Prestamos Acc. y Cías. Relac. del exteri', 10, 'M'],
			[170, 2, '2', '2', '03', '', '', '003', '170-003', '2015-01-01', 'Transferencias casa matriz y sucursales', 10, 'M'],
			[171, 2, '2', '2', '04', '', '', '', '', '2015-01-01', 'OBLIGACIONES EMITIDAS', 4, 'G'],
			[172, 2, '2', '2', '04', '', '', '001', '172-001', '2015-01-01', 'Obligaciones Adquiridas por relacionadas', 10, 'M'],
			[173, 2, '2', '2', '04', '', '', '002', '173-002', '2015-01-01', 'Obligaciones adquiridas por terceros', 10, 'M'],
			[174, 2, '2', '2', '05', '', '', '', '', '2015-01-01', 'PROVISIONES A L/P', 4, 'G'],
			[175, 2, '2', '2', '05', '', '', '001', '175-001', '2015-01-01', 'Provisiones para jubiliación patronal', 10, 'M'],
			[176, 2, '2', '2', '05', '', '', '002', '176-002', '2015-01-01', 'Provisiones', 10, 'M'],
			[177, 2, '2', '2', '05', '', '', '003', '177-003', '2015-01-01', 'Crédito a mutuo', 10, 'M'],
			[178, 2, '2', '2', '06', '', '', '', '', '2015-01-01', 'PASIVO DIFERIDO', 4, 'G'],
			[179, 2, '2', '2', '06', '', '', '001', '179-001', '2015-01-01', 'Anticipo clientes', 10, 'M'],
			[180, 2, '2', '2', '06', '', '', '002', '180-002', '2015-01-01', 'Cta.Transitoria Ant. Empleado', 10, 'M'],
			[181, 2, '2', '2', '06', '', '', '003', '181-003', '2015-01-01', 'Otros Pasivos Diferidos', 10, 'M'],
			[182, 2, '2', '2', '07', '', '', '', '', '2015-01-01', 'OTROS PASIVOS L/P', 4, 'G'],
			[183, 2, '2', '2', '07', '', '', '001', '183-001', '2015-01-01', 'Ingresos Anticipados', 10, 'M'],
			[184, 2, '2', '2', '07', '', '', '002', '184-002', '2015-01-01', 'Pasivos Contingentes', 10, 'M'],
			[185, 2, '3', '', '', '', '', '', '', '2015-01-01', 'PATRIMONIO', 2, 'G'],
			[186, 2, '3', '1', '', '', '', '', '', '2015-01-01', 'PATRIMONIO NETO', 3, 'G'],
			[187, 2, '3', '1', '01', '', '', '', '', '2015-01-01', 'CAPITAL SOCIAL', 4, 'G'],
			[188, 2, '3', '1', '01', '', '', '001', '188-001', '2015-01-01', 'Accionista 1', 10, 'M'],
			[189, 2, '3', '1', '01', '', '', '002', '189-002', '2015-01-01', 'Accionista 2', 10, 'M'],
			[190, 2, '3', '1', '01', '', '', '003', '190-003', '2015-01-01', 'Accionista 3', 10, 'M'],
			[191, 2, '3', '1', '01', '', '', '004', '191-004', '2015-01-01', '(-) Capital suscrito no pagado, acciones', 10, 'M'],
			[192, 2, '3', '1', '03', '', '', '', '', '2015-01-01', 'APORTES PARA FUTURA CAPITALIZACION', 4, 'G'],
			[193, 2, '3', '1', '03', '', '', '001', '193-001', '2015-01-01', 'Aportes de socios para futura capitaliza', 10, 'M'],
			[194, 2, '3', '1', '04', '', '', '', '', '2015-01-01', 'RESERVAS', 4, 'G'],
			[195, 2, '3', '1', '04', '', '', '001', '195-001', '2015-01-01', 'Reserva Legal', 10, 'M'],
			[196, 2, '3', '1', '04', '', '', '002', '196-002', '2015-01-01', 'Reserva Facultativa', 10, 'M'],
			[197, 2, '3', '1', '04', '', '', '003', '197-003', '2015-01-01', 'Reserva Estatutaria', 10, 'M'],
			[198, 2, '3', '1', '04', '', '', '004', '198-004', '2015-01-01', 'Reserva de Capital', 10, 'M'],
			[199, 2, '3', '1', '04', '', '', '005', '199-005', '2015-01-01', 'Reserva por Valuación, Donaciones y Otra', 10, 'M'],
			[200, 2, '3', '1', '05', '', '', '', '', '2015-01-01', 'UTILIDAD O PERDIDA DEL EJERCICIO', 4, 'M'],
			[201, 2, '3', '1', '05', '', '', '001', '201-001', '2015-01-01', 'Utilidad No Distribuida Ejercicios Anter', 10, 'M'],
			[202, 2, '3', '1', '05', '', '', '002', '202-002', '2015-01-01', '(-) Pérdida Acumulada Ejercicios Anterio', 10, 'M'],
			[203, 2, '3', '1', '05', '', '', '003', '203-003', '2015-01-01', 'Resultado del Ejercicio', 10, 'M'],
			[204, 2, '3', '1', '05', '', '', '004', '204-004', '2015-01-01', '(-) Pérdida del Ejercicio', 10, 'M'],
			[205, 2, '3', '1', '05', '', '', '005', '205-005', '2015-07-20', 'Resultado Ejercicio 2015', 10, 'M'],
			[206, 3, '', '', '', '', '', '', '', '2015-01-01', 'TOTAL RESULTADOS', 1, 'G'],
			[207, 3, '4', '', '', '', '', '', '', '2015-01-01', 'INGRESOS', 2, 'G'],
			[208, 3, '4', '1', '', '', '', '', '', '2015-01-01', 'INGRESOS OPERACIONALES', 3, 'G'],
			[209, 3, '4', '1', '01', '', '', '', '', '2015-01-01', 'VENTAS NETAS', 4, 'M'],
			[210, 3, '4', '1', '01', '', '', '001', '210-001', '2015-01-01', 'Ventas netas locales Tarifa 12% 001001', 10, 'M'],
			[211, 3, '4', '1', '01', '', '', '002', '211-002', '2015-01-01', 'Ventas netas locales Tarifa 0% 001001', 10, 'M'],
			[212, 3, '4', '1', '01', '', '', '003', '212-003', '2015-01-01', 'Venta neta Tarifa 12% 001002', 10, 'M'],
			[213, 3, '4', '1', '01', '', '', '004', '213-004', '2015-01-01', 'Venta neta Tarifa 0% 001002', 10, 'M'],
			[214, 3, '4', '1', '01', '', '', '005', '214-005', '2016-02-24', 'Venta 12% 001001 Servicios', 10, 'M'],
			[215, 3, '4', '1', '01', '', '', '006', '215-006', '2016-02-24', 'Venta 12% 001002 Servicios', 10, 'M'],
			[216, 3, '4', '1', '01', '', '', '007', '216-007', '2016-02-24', 'Venta 0% 001001 Servicio', 10, 'M'],
			[217, 3, '4', '1', '01', '', '', '008', '217-008', '2016-02-24', 'Venta 0% 001002 Servicio', 10, 'M'],
			[401, 3, '4', '1', '01', '', '', '009', '401-009', '2021-03-04', 'Ventas 12% 001003 Servicios', 10, 'M'],
			[402, 3, '4', '1', '01', '', '', '010', '402-010', '2021-03-04', 'Ventas 0% 001003 Servicios', 10, 'M'],
			[403, 3, '4', '1', '01', '', '', '011', '403-011', '2021-04-28', 'Ventas 12% 001003 Bienes', 10, 'M'],
			[218, 3, '4', '1', '02', '', '', '', '', '2015-01-01', 'DESCTOS Y DEVO EN VENTAS', 4, 'M'],
			[219, 3, '4', '1', '02', '', '', '001', '219-001', '2015-01-01', 'Descto. en Venta 12% 001001', 10, 'M'],
			[220, 3, '4', '1', '02', '', '', '002', '220-002', '2015-01-01', 'Descto. en Venta 0% 001001', 10, 'M'],
			[221, 3, '4', '1', '02', '', '', '003', '221-003', '2015-01-01', 'Descto en Venta 12% 001002', 10, 'M'],
			[222, 3, '4', '1', '02', '', '', '004', '222-004', '2015-01-01', 'Descto en Venta 0% 001002', 10, 'M'],
			[223, 3, '4', '1', '02', '', '', '005', '223-005', '2015-01-01', 'Devolución en Venta 12% 001001', 10, 'M'],
			[224, 3, '4', '1', '02', '', '', '006', '224-006', '2015-01-01', 'Devolucion en Venta 0% 001001', 10, 'M'],
			[225, 3, '4', '1', '02', '', '', '007', '225-007', '2015-01-01', 'Devolucion en Venta 12% 001002', 10, 'M'],
			[226, 3, '4', '1', '02', '', '', '008', '226-008', '2015-01-01', 'Devolucion en Venta 0% 001002', 10, 'M'],
			[227, 3, '4', '1', '02', '', '', '009', '227-009', '2016-02-24', 'Dev. Venta 12% 001001 Servicio', 10, 'M'],
			[228, 3, '4', '1', '02', '', '', '010', '228-010', '2016-02-24', 'Dev. Venta 12% 001002 Servicio', 10, 'M'],
			[229, 3, '4', '1', '02', '', '', '011', '229-011', '2016-02-24', 'Dev. Venta 0% 001001 Servicio', 10, 'M'],
			[230, 3, '4', '1', '02', '', '', '012', '230-012', '2016-02-24', 'Dev. Venta 0% 001002 Servicio', 10, 'M'],
			[231, 3, '4', '2', '', '', '', '', '', '2015-01-01', 'INGRESOS NO OPERACIONALES', 3, 'G'],
			[232, 3, '4', '2', '02', '', '', '', '', '2015-01-01', 'EXPORTACIONES', 4, 'G'],
			[233, 3, '4', '2', '02', '', '', '001', '233-001', '2015-01-01', 'Exportaciones Netas', 10, 'M'],
			[234, 3, '4', '2', '02', '', '', '002', '234-002', '2015-01-01', 'Ingresos provenientes del exterior', 10, 'M'],
			[235, 3, '4', '2', '03', '', '', '', '', '2015-01-01', 'OTROS INGRESOS', 4, 'M'],
			[236, 3, '4', '2', '03', '', '', '001', '236-001', '2015-01-01', 'Rendimientos Financieros', 10, 'M'],
			[237, 3, '4', '2', '03', '', '', '002', '237-002', '2015-01-01', 'Instituciones Publicas', 10, 'M'],
			[238, 3, '4', '2', '03', '', '', '003', '238-003', '2015-01-01', 'Dividendos percibidos locales', 10, 'M'],
			[239, 3, '4', '2', '03', '', '', '004', '239-004', '2015-01-01', 'Otras Rentas Exentas', 10, 'M'],
			[240, 3, '4', '2', '03', '', '', '005', '240-005', '2015-01-01', 'Utilidad en venta de activos fijos', 10, 'M'],
			[241, 3, '4', '2', '03', '', '', '006', '241-006', '2015-01-01', 'Ingresos por Reembolso', 10, 'M'],
			[242, 3, '4', '2', '03', '', '', '008', '242-008', '2015-01-01', 'Intereses Ganados', 10, 'M'],
			[243, 3, '4', '2', '03', '', '', '009', '243-009', '2015-09-24', 'Otros ingresos Exedentes en cajas', 10, 'M'],
			[244, 3, '5', '', '', '', '', '', '', '2015-01-01', 'EGRESOS', 2, 'G'],
			[245, 3, '5', '1', '', '', '', '', '', '2015-01-01', 'COSTOS Y GASTOS', 3, 'G'],
			[246, 3, '5', '1', '01', '', '', '', '', '2015-01-01', 'COSTO DE VENTAS', 4, 'M'],
			[247, 3, '5', '1', '01', '', '', '001', '247-001', '2015-01-01', 'Costo de Venta 12% 001001', 10, 'M'],
			[248, 3, '5', '1', '01', '', '', '002', '248-002', '2015-01-01', 'Costo de Venta 0% 001001', 10, 'M'],
			[249, 3, '5', '1', '01', '', '', '003', '249-003', '2015-01-01', 'Costo de Venta 12% 001002', 10, 'M'],
			[250, 3, '5', '1', '01', '', '', '004', '250-004', '2015-01-01', 'Costo de Venta 0% 001002', 10, 'M'],
			[251, 3, '5', '1', '01', '', '', '005', '251-005', '2015-01-01', 'Otros Costos Excentos', 10, 'M'],
			[252, 3, '5', '1', '01', '', '', '006', '252-006', '2015-06-20', 'Compra de Mercedaria', 10, 'M'],
			[253, 3, '5', '1', '01', '', '', '007', '253-007', '2015-06-18', 'Seguro en Compras', 10, 'M'],
			[254, 3, '5', '1', '01', '', '', '008', '254-008', '2015-01-01', '(-) Descuentos en Compras', 10, 'M'],
			[404, 3, '5', '1', '01', '', '', '009', '404-009', '2021-04-28', 'Costo de Venta 12% 001003', 10, 'M'],
			[255, 3, '5', '1', '02', '', '', '', '', '2015-01-01', 'SUELDOS Y BENEFICIOS SOCIALES', 4, 'G'],
			[256, 3, '5', '1', '02', '', '', '001', '256-001', '2015-01-01', 'Sueldos, Salarios y demás Remuneraciones', 10, 'M'],
			[257, 3, '5', '1', '02', '', '', '002', '257-002', '2015-01-01', 'Sueldos, salarios y remuner. (tercerizad', 10, 'M'],
			[258, 3, '5', '1', '02', '', '', '003', '258-003', '2015-01-01', 'Aportes al IESS', 10, 'M'],
			[259, 3, '5', '1', '02', '', '', '004', '259-004', '2015-01-01', 'Beneficios sociales e indemnizaciones', 10, 'M'],
			[260, 3, '5', '1', '02', '', '', '005', '260-005', '2015-01-01', 'Gasto provisión para jubilación patronal', 10, 'M'],
			[261, 3, '5', '1', '02', '', '', '006', '261-006', '2015-01-01', 'Aporte al IESS Asumido', 10, 'M'],
			[262, 3, '5', '1', '02', '', '', '007', '262-007', '2015-01-01', 'Horas Extras', 10, 'M'],
			[263, 3, '5', '1', '02', '', '', '008', '263-008', '2015-01-01', 'Otras Bonificaciones', 10, 'M'],
			[264, 3, '5', '1', '02', '', '', '009', '264-009', '2015-01-01', 'Fondo de Reserva', 10, 'M'],
			[265, 3, '5', '1', '02', '', '', '010', '265-010', '2015-01-01', 'Vacaciones', 10, 'M'],
			[266, 3, '5', '1', '02', '', '', '011', '266-011', '2015-01-01', 'Decimo Tercera Remuneracion', 10, 'M'],
			[267, 3, '5', '1', '02', '', '', '012', '267-012', '2015-01-01', 'Decimo Cuarta Remuneracion', 10, 'M'],
			[268, 3, '5', '1', '03', '', '', '', '', '2015-01-01', 'GASTOS OPERACIONALES', 4, 'M'],
			[269, 3, '5', '1', '03', '', '', '001', '269-001', '2015-01-01', 'Mant. y Rep. de  Equipos de Oficina', 10, 'M'],
			[270, 3, '5', '1', '03', '', '', '002', '270-002', '2015-01-01', 'Arriendo bienes inmuebles persona natura', 10, 'M'],
			[271, 3, '5', '1', '03', '', '', '003', '271-003', '2015-01-01', 'Arriendo bienes inmuebles sociedades', 10, 'M'],
			[272, 3, '5', '1', '03', '', '', '004', '272-004', '2015-01-01', 'Comisión a sociedades', 10, 'M'],
			[273, 3, '5', '1', '03', '', '', '005', '273-005', '2015-01-01', 'Promoción y Publicidad', 10, 'M'],
			[274, 3, '5', '1', '03', '', '', '006', '274-006', '2015-01-01', 'Combustibles', 10, 'M'],
			[275, 3, '5', '1', '03', '', '', '007', '275-007', '2015-01-01', 'Lubricantes', 10, 'M'],
			[276, 3, '5', '1', '03', '', '', '008', '276-008', '2015-01-01', 'Arriendo mercantil local', 10, 'M'],
			[277, 3, '5', '1', '03', '', '', '009', '277-009', '2015-01-01', 'Arriendo mercantil del exterior', 10, 'M'],
			[278, 3, '5', '1', '03', '', '', '010', '278-010', '2015-01-01', 'Seguros y Reaseguros', 10, 'M'],
			[279, 3, '5', '1', '03', '', '', '011', '279-011', '2015-01-01', 'Suministros y Materiales', 10, 'M'],
			[280, 3, '5', '1', '03', '', '', '012', '280-012', '2015-01-01', 'Transporte', 10, 'M'],
			[281, 3, '5', '1', '03', '', '', '013', '281-013', '2015-01-01', 'Gastos de Gestión (agasajos)', 10, 'M'],
			[282, 3, '5', '1', '03', '', '', '014', '282-014', '2015-01-01', 'Gastos de Viaje', 10, 'M'],
			[283, 3, '5', '1', '03', '', '', '015', '283-015', '2015-01-01', 'Servicio Telefonico', 10, 'M'],
			[284, 3, '5', '1', '03', '', '', '016', '284-016', '2015-01-01', 'Notarios y registradores de la propiedad', 10, 'M'],
			[285, 3, '5', '1', '03', '', '', '017', '285-017', '2015-01-01', 'Impuestos, contribuciones y otros', 10, 'M'],
			[286, 3, '5', '1', '03', '', '', '018', '286-018', '2015-01-01', 'Depreciación de activos fijos', 10, 'M'],
			[287, 3, '5', '1', '03', '', '', '019', '287-019', '2015-01-01', 'Depreciac. aceler. vehículos, equipo tra', 10, 'M'],
			[288, 3, '5', '1', '03', '', '', '020', '288-020', '2015-01-01', 'Amortizaciones (Inversiones e Intangible', 10, 'M'],
			[289, 3, '5', '1', '03', '', '', '021', '289-021', '2015-01-01', 'Provisión Cuentas Incobrables', 10, 'M'],
			[290, 3, '5', '1', '03', '', '', '022', '290-022', '2015-01-01', 'Amortizaciones y gastos por diferencias', 10, 'M'],
			[291, 3, '5', '1', '03', '', '', '023', '291-023', '2015-01-01', 'Suministro de Limpieza', 10, 'M'],
			[292, 3, '5', '1', '03', '', '', '024', '292-024', '2015-01-01', 'Alimentación al Personal', 10, 'M'],
			[293, 3, '5', '1', '03', '', '', '025', '293-025', '2015-01-01', 'Servicios Basicos Agua y Luz', 10, 'M'],
			[294, 3, '5', '1', '03', '', '', '026', '294-026', '2015-01-01', 'Mantenimiento de Equipo de Computo', 10, 'M'],
			[295, 3, '5', '1', '03', '', '', '027', '295-027', '2015-01-01', 'Mantenimiento y Reparación de Vehiculo', 10, 'M'],
			[296, 3, '5', '1', '03', '', '', '028', '296-028', '2015-01-01', 'Servicio de Guardiania', 10, 'M'],
			[297, 3, '5', '1', '03', '', '', '029', '297-029', '2015-01-01', 'Servicios de Envios y Encomiendas', 10, 'M'],
			[298, 3, '5', '1', '03', '', '', '030', '298-030', '2015-01-01', 'Repuestos y Herramientas', 10, 'M'],
			[299, 3, '5', '1', '03', '', '', '031', '299-031', '2015-01-01', 'Instalaciones', 10, 'M'],
			[300, 3, '5', '1', '03', '', '', '032', '300-032', '2015-01-01', 'Mant. del Sistema Informatico', 10, 'M'],
			[301, 3, '5', '1', '03', '', '', '033', '301-033', '2015-01-01', 'Servicio de Impresion', 10, 'M'],
			[302, 3, '5', '1', '03', '', '', '034', '302-034', '2015-01-01', 'Mant.y Rep. de Equipo de Inventario', 10, 'M'],
			[303, 3, '5', '1', '03', '', '', '035', '303-035', '2015-01-01', 'Seguro en Compras', 10, 'M'],
			[304, 3, '5', '1', '03', '', '', '036', '304-036', '2015-01-01', 'Accesorios y Repuestos de Vehiculos', 10, 'M'],
			[305, 3, '5', '1', '03', '', '', '037', '305-037', '2015-01-01', 'Servicios Prestados', 10, 'M'],
			[306, 3, '5', '1', '03', '', '', '038', '306-038', '2015-01-01', 'Gastos Navideños', 10, 'M'],
			[307, 3, '5', '1', '03', '', '', '039', '307-039', '2015-01-01', 'Servicio de copias y reproducciones', 10, 'M'],
			[308, 3, '5', '1', '03', '', '', '040', '308-040', '2015-01-01', 'Uniforme para Personal', 10, 'M'],
			[309, 3, '5', '1', '03', '', '', '041', '309-041', '2015-01-01', 'Gastos de Contingencia', 10, 'M'],
			[310, 3, '5', '1', '03', '', '', '042', '310-042', '2015-01-01', 'Servicio Monitoreo de Vehiculos', 10, 'M'],
			[311, 3, '5', '1', '03', '', '', '043', '311-043', '2015-01-01', 'Servicios de Peaje', 10, 'M'],
			[312, 3, '5', '1', '03', '', '', '044', '312-044', '2015-01-01', 'Capacitacion de personal', 10, 'M'],
			[313, 3, '5', '1', '03', '', '', '045', '313-045', '2015-01-01', 'Mantenimiento Muebles y Enseres', 10, 'M'],
			[314, 3, '5', '1', '03', '', '', '046', '314-046', '2015-01-01', 'Seguro SOAT', 10, 'M'],
			[315, 3, '5', '1', '03', '', '', '047', '315-047', '2015-01-01', 'Autoconsumo', 10, 'M'],
			[316, 3, '5', '1', '03', '', '', '048', '316-048', '2015-01-01', 'Servicios de salud empleado', 10, 'M'],
			[317, 3, '5', '1', '03', '', '', '049', '317-049', '2015-01-01', 'Servicios Contables', 10, 'M'],
			[318, 3, '5', '1', '03', '', '', '050', '318-050', '2015-01-01', 'Servicio Viatico y Alimentacion', 10, 'M'],
			[319, 3, '5', '1', '03', '', '', '051', '319-051', '2015-01-01', 'Servicio de Internet', 10, 'M'],
			[320, 3, '5', '1', '03', '', '', '052', '320-052', '2015-01-01', 'Honorarios, comisiones y dietas', 10, 'M'],
			[321, 3, '5', '1', '03', '', '', '053', '321-053', '2015-10-19', 'Alquiler Mesas Sillas', 10, 'M'],
			[322, 3, '5', '1', '03', '', '', '054', '322-054', '2016-03-24', 'Mantenimiento y reparaciones', 10, 'M'],
			[323, 3, '5', '1', '04', '', '', '', '', '2015-01-01', 'GASTOS FINANCIEROS', 4, 'M'],
			[324, 3, '5', '1', '04', '', '', '001', '324-001', '2015-01-01', 'Intereses y comisiones locales', 10, 'M'],
			[325, 3, '5', '1', '04', '', '', '002', '325-002', '2015-01-01', 'Costo de Chequera', 10, 'M'],
			[326, 3, '5', '1', '04', '', '', '003', '326-003', '2015-01-01', 'Intereses pagados a terceros locales', 10, 'M'],
			[327, 3, '5', '1', '04', '', '', '004', '327-004', '2015-01-01', 'Intereses pagados a terceros al exterior', 10, 'M'],
			[328, 3, '5', '1', '04', '', '', '005', '328-005', '2015-01-01', 'Servicios Bancarios', 10, 'M'],
			[329, 3, '5', '1', '04', '', '', '006', '329-006', '2015-01-01', 'Comision por Cheques Protestados', 10, 'M'],
			[330, 3, '5', '1', '04', '', '', '007', '330-007', '2015-01-01', 'ND por Estados de Cuenta', 10, 'M'],
			[331, 3, '5', '1', '04', '', '', '008', '331-008', '2015-01-01', 'Comisiones TC', 10, 'M'],
			[332, 3, '5', '1', '04', '', '', '009', '332-009', '2015-11-25', 'Intereses Bancarios', 10, 'M'],
			[333, 3, '5', '1', '05', '', '', '', '', '2015-01-01', 'OTROS GASTOS', 4, 'M'],
			[334, 3, '5', '1', '05', '', '', '001', '334-001', '2015-01-01', 'Gastos reembolsados locales', 10, 'M'],
			[335, 3, '5', '1', '05', '', '', '002', '335-002', '2015-01-01', 'Gastos reembolsados al exterior', 10, 'M'],
			[336, 3, '5', '1', '05', '', '', '003', '336-003', '2015-01-01', 'Gasto provisiones deducibles', 10, 'M'],
			[337, 3, '5', '1', '05', '', '', '004', '337-004', '2015-01-01', 'Otros compras locales', 10, 'M'],
			[338, 3, '5', '1', '05', '', '', '005', '338-005', '2015-01-01', 'Otros gastos del exterior', 10, 'M'],
			[339, 3, '5', '1', '05', '', '', '006', '339-006', '2015-01-01', 'Iva que se carga al gasto', 10, 'M'],
			[340, 3, '5', '1', '05', '', '', '007', '340-007', '2015-01-01', 'Pérdida en venta de activos fijos', 10, 'M'],
			[341, 3, '5', '1', '05', '', '', '008', '341-008', '2015-01-01', 'Pérdidas en cartera', 10, 'M'],
			[342, 3, '5', '1', '05', '', '', '009', '342-009', '2015-01-01', 'Otros gastos locales por bienes', 10, 'M'],
			[343, 3, '5', '1', '05', '', '', '010', '343-010', '2015-01-01', 'Otros servicios locales', 10, 'M'],
			[344, 3, '5', '1', '05', '', '', '011', '344-011', '2016-06-29', 'Perdida de Inventario', 10, 'M'],
			[345, 3, '5', '1', '07', '', '', '', '', '2015-01-01', 'GASTOS NO DEDUCIBLES', 4, 'M'],
			[346, 3, '5', '1', '07', '', '', '001', '346-001', '2015-01-01', 'Gasto no deducible en el Pais GND', 10, 'M'],
			[347, 3, '5', '1', '07', '', '', '002', '347-002', '2015-01-01', 'Gasto no deducible en el exterior GND', 10, 'M'],
			[348, 3, '5', '1', '07', '', '', '003', '348-003', '2015-01-01', 'Suministro y Materiales GND', 10, 'M'],
			[349, 3, '5', '1', '07', '', '', '004', '349-004', '2015-01-01', 'Transporte GND', 10, 'M'],
			[350, 3, '5', '1', '07', '', '', '005', '350-005', '2015-01-01', 'Servicio Prestados GND', 10, 'M'],
			[351, 3, '5', '1', '07', '', '', '006', '351-006', '2015-01-01', 'Sueldos y Remuneraciones GND', 10, 'M'],
			[352, 3, '5', '1', '07', '', '', '007', '352-007', '2015-01-01', 'Beneficios a Empleados GND', 10, 'M'],
			[353, 3, '5', '1', '07', '', '', '008', '353-008', '2015-01-01', 'Multa e Intereses SRI GND', 10, 'M'],
			[354, 3, '5', '1', '07', '', '', '009', '354-009', '2015-01-01', 'Mantenimiento y Reparacion GND', 10, 'M'],
			[355, 3, '5', '1', '07', '', '', '010', '355-010', '2015-01-01', 'Alimentacion GND', 10, 'M'],
			[356, 3, '5', '1', '07', '', '', '011', '356-011', '2015-01-01', 'Estibaje de Mercaderias GND', 10, 'M'],
			[357, 3, '5', '1', '07', '', '', '012', '357-012', '2015-01-01', 'Retenciones asumidas GND', 10, 'M'],
			[358, 3, '5', '1', '07', '', '', '013', '358-013', '2015-01-01', 'Multas e Intereses IESS GND', 10, 'M'],
			[359, 3, '5', '1', '07', '', '', '014', '359-014', '2015-06-30', 'Gasto de Viaje y Viaticos GND', 10, 'M'],
			[360, 3, '5', '1', '07', '', '', '015', '360-015', '2015-07-01', 'Contribuciones y Donaciones GND', 10, 'M'],
			[361, 3, '5', '1', '07', '', '', '016', '361-016', '2015-07-06', 'Otros Gastos Locales por bienes GND', 10, 'M'],
			[362, 3, '5', '1', '07', '', '', '017', '362-017', '2015-08-05', 'Servicios de Peajes GND', 10, 'M'],
			[363, 3, '5', '1', '07', '', '', '018', '363-018', '2015-08-17', 'Servicios Básicos GND', 10, 'M'],
			[364, 3, '5', '1', '07', '', '', '019', '364-019', '2015-10-02', 'Comisiones a Terceros GND', 10, 'M'],
			[365, 3, '5', '1', '07', '', '', '020', '365-020', '2015-10-07', 'Arriendo de local comercial GND', 10, 'M'],
			[366, 3, '5', '1', '07', '', '', '021', '366-021', '2016-02-17', 'Servicios Bancarios GND', 10, 'M'],
			[367, 3, '5', '1', '07', '', '', '022', '367-022', '2016-06-21', 'Gasto IVA no deducible', 10, 'M'],
			[368, 3, '5', '1', '07', '', '', '023', '368-023', '2017-08-04', 'Impuestos, Contribuciones y otros GND', 10, 'M'],
		];

		foreach ($data as $item) {
			TmaPlancta::create([
				'cc_seqcta' => $item[0],
				'cc_nivel1' => $item[1],
				'cc_nivel2' => $item[2],
				'cc_nivel3' => $item[3],
				'cc_nivel4' => $item[4],
				'cc_nivel5' => $item[5],
				'cc_nivel6' => $item[6],
				'cc_auxiliar' => $item[7],
				'cc_ctamov' => $item[8],
				'cc_fecape' => $item[9],
				'cc_nombre' => $item[10],
				'cc_tipocta' => strval($item[11]),
				'cc_clase' => $item[12],
			]);
		}
	}
}