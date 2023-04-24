<?php

namespace Database\Seeders;

use App\Models\ClasesServiciosRutas;
use App\Models\Departamento;
use App\Models\RutasTransporte;
use App\Models\TiposServiciosRutas;
use App\Models\TiposVehiculosRutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                "codigo_ruta" => "AB000A0",
                "ruta" => "A",
                "denominacion" => "COLONIA 10 DE OCTUBRE - SAN MARCOS - 15 CALLE PONIENTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB000A1LP",
                "ruta" => "A-1",
                "denominacion" => "ZONA FRANCA MIRAMAR- SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB000B0",
                "ruta" => "B",
                "denominacion" => "CALLE SAN SEBASTIAN Y 5 AV. SUR-CDAD. DELGADO-METROCENTRO- UES Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB001X0",
                "ruta" => "1",
                "denominacion" => "SAN PEDRO - AYUTUXTEPEQUE - ZACAMIL - CENTRO - COL. AMERICA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB002A1",
                "ruta" => "2-A",
                "denominacion" => "COL. BUENA VISTA (MEJICANOS)-3ª C.OTE- 2ª AV. NTE. (S.S.) Y VIC",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB002A2",
                "ruta" => "2-A",
                "denominacion" => "COL. BUENA VISTA (MEJICANOS)-3ª C. PTE. - 2ª AV. NTE. (S.S) Y VIC",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB002B1",
                "ruta" => "2-B",
                "denominacion" => "MEJICANOS-MODELO-COL. COSTA RICA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB002B2",
                "ruta" => "2-B",
                "denominacion" => "MEJICANOS-SAN JACINTO-COL. COSTA RICA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB002C0",
                "ruta" => "2-C",
                "denominacion" => "MEJICANOS-METROCENTRO-CENTRO-RELOJ DE FLORES Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB003A0",
                "ruta" => "3-A",
                "denominacion" => "COL.SIERRA MORENA-COL. LAS BRISAS-SOYAPANGO-CENTRO-COL.  ATLACATL  Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB003X0",
                "ruta" => "3",
                "denominacion" => "COL. SIERRA MORENA-SOYAPANGO-CENTRO-COL. ATLACATL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB004X0",
                "ruta" => "4",
                "denominacion" => "KM 10 1/2 TRONCAL DEL NORTE-CIUDAD DELGADO-CENTRO-HOSPITAL-TERMINAL DE OCCIDENTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB005X0",
                "ruta" => "5",
                "denominacion" => "URBANIZACION LA CIMA I,II, III,IV -TERMINAL DE ORIENTE (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB006X1",
                "ruta" => "6",
                "denominacion" => "VIA MARIONA (CUSCATANCINGO) -MEJICANOS-AV. ESPAÑA-9ª C. OTE (S.S.) Y VIC.-",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB006X2",
                "ruta" => "6",
                "denominacion" => "VIA MARIONA-MEJICANOS-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB006X3",
                "ruta" => "6",
                "denominacion" => "VIA MARIONA-MEJICANOS-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB007C0",
                "ruta" => "7-C",
                "denominacion" => "BOSQUES DE PRUSIA-LOS SANTOS 1-TERMINAL DE OCC.   Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB007D0",
                "ruta" => "7-D",
                "denominacion" => "COL. LOS CONACASTES-CENTRO-METROCENTRO-GALERIAS ESCALON Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB007X0",
                "ruta" => "7",
                "denominacion" => "COL. GUADALUPE (SOYAPANGO) PLAZA LAS AMERICAS -  GALERIAS Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB008X0",
                "ruta" => "8",
                "denominacion" => "COL. DOLORES-TERMINAL DE ORIENTE-COL. LA CHACRA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB009X0",
                "ruta" => "9",
                "denominacion" => "CIUDAD CREDISA-AMATEPEC-ZACAMIL-SANTISIMA TRINIDAD Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB010X0",
                "ruta" => "10",
                "denominacion" => "URB. COLINAS DEL NORTE-CENTRO-COL. VISTA HERMOSA-MONSERRAT Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB011X0",
                "ruta" => "11",
                "denominacion" => "COL. GALVEZ-SANTA FE- SAN MARCOS-HOSPITALES-RES. SAN LUIS Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB012X0SS",
                "ruta" => "12",
                "denominacion" => "CASERIO MIL CUMBRES  -PLANES DE RENDEROS - MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB013X0",
                "ruta" => "13",
                "denominacion" => "COLONIA SANTA LUCIA-SOYAPANGO-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB014A0",
                "ruta" => "14-A",
                "denominacion" => "PTO.STA.TERESA - SAN MARTIN - 12 AV SUR - 2 C. OTE Y AV. CERVANTES (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB014X0",
                "ruta" => "14",
                "denominacion" => "SAN MARTIN-SOYAPANGO-ALCALDIA DE SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB015X0",
                "ruta" => "15",
                "denominacion" => "TURICENTRO APULO-ILOPANGO-AVE.ESPAÑA Y 9A CALLE ORIENTE-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB016X0",
                "ruta" => "16",
                "denominacion" => "SAN ANTONIO ABAD-PLAZA LAS AMERICAS-9 AV. NORTE- JUAN PABLO II Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB017B0SS",
                "ruta" => "17-B",
                "denominacion" => "HACIENDA MELARA-ROSARIO DE MORA-PLANES DE RENDEROS-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB018X0SS",
                "ruta" => "18",
                "denominacion" => "CTON. LOMAS DE CANDELARIA - C.ANT.A HUIZUCAR - BVRD LOS PROCERES-MDO.CTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB019X0",
                "ruta" => "19",
                "denominacion" => "CANTON SAN JOSE CORTEZ-CANTON PLAN DEL PINO-SOYAPANGO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB020X0",
                "ruta" => "20",
                "denominacion" => "CUSCATANCINGO-20 AVENIDA NORTE-AVENIDA ESPAÑA-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB021A0SS",
                "ruta" => "21-A",
                "denominacion" => "SGO.TEXACUANGOS - C.A SAN MARCOS - 4 C. OTE. - AV. CUSCATLAN Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB021B0SS",
                "ruta" => "21-B",
                "denominacion" => "SANTIAGO TEXACUANGO- MERCADO CENTRAL (SAN SALVADOR) - VIA AUTOPISTA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB022X0",
                "ruta" => "22",
                "denominacion" => "REPARTO SANTA CLARA-JUZGADOS-SAN ANTONIO ABAD Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB023A0",
                "ruta" => "23-A",
                "denominacion" => "SAN RAMON-29 AVENIDA NORTE-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB023B0",
                "ruta" => "23-B",
                "denominacion" => "CANTON SAN ROQUE-3A CALLE OTE. Y 2A AV. NTE (S:S)- Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB024X0",
                "ruta" => "24",
                "denominacion" => "CUSCATANCINGO-MEJICANOS-PARQUE INFANTIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB026X0",
                "ruta" => "26",
                "denominacion" => "JARDINES DE SAN MARCOS-AUTOPISTA NORTE-COLONIA MIRALVALLE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB027X0",
                "ruta" => "27",
                "denominacion" => "COL.EL PARAISO - TERMINAL- JNES DE MONSERRAT -LOS ELISEOS - BLVD  LOS PROCERES Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB028X0",
                "ruta" => "28",
                "denominacion" => "COL. IVU-MERCADO CENTRAL-TERMINAL OTE. Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029A0",
                "ruta" => "29-A",
                "denominacion" => "RTO. VALLE NUEVO-COL. STA. LUCIA-METROCENTRO-MIRAMONTE-AV. BERNAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029C0",
                "ruta" => "29-C",
                "denominacion" => "COL.ALTA VISTA-SN.BARTOLO-SOYGO.(C/RTNO.H.PAIZ)-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029C2E",
                "ruta" => "29-C2",
                "denominacion" => "COL.ALTA VISTA-SN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB029CE",
                "ruta" => "29-CE",
                "denominacion" => "COL. ALTA VISTA-SAN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.SERVICIO EXCLUSIVO",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB029DE",
                "ruta" => "29-D",
                "denominacion" => "REPARTO LAS CAÑAS-ILOPANGO-METROCENTRO Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB029E0",
                "ruta" => "29-E",
                "denominacion" => "COL.CIMAS DE SN.BARTOLO-SN.BARTOLO-SPGO(C/RTNO. H.PAIZ)-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029EE",
                "ruta" => "29-E",
                "denominacion" => "COL. CIMAS DE SN BARTOLO-SN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB029F0",
                "ruta" => "29-F",
                "denominacion" => "RTO. SAN FELIPE-SAN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029FE",
                "ruta" => "29-F",
                "denominacion" => "REPARTO SAN FELIPE-SN BARTOLO-SOYAPANGO-METROCENTROY VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB029G0",
                "ruta" => "29-G",
                "denominacion" => "JARD. DE SAN BARTOLO-SAN BARTOLO-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029H0",
                "ruta" => "29-H",
                "denominacion" => "CUMBRES DE SAN BARTOLO-SAN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB029HE",
                "ruta" => "29-H",
                "denominacion" => "CUMBRES DE SN BARTOLO-SN BARTOLO-SOYAPANGO-METROCENTRO Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB030B0",
                "ruta" => "30-B",
                "denominacion" => "COL. LAS TERRAZAS-AYUTUXTEPEQUE-COL. SAN BENITO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB030X0",
                "ruta" => "30",
                "denominacion" => "COL. METROPOLIS (MEJICANOS)-METROCENTRO-C.RUBEN DARIO-11° AV. SUR (S.S.) Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB031X0",
                "ruta" => "31",
                "denominacion" => "COL. MONTE CARMELO-ZACAMIL-MEJICANOS Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB034A0",
                "ruta" => "34-A",
                "denominacion" => "TERMINAL DE ORIENTE -TERMINAL DE OCCIDENTE-SAN BENITO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB034B0",
                "ruta" => "34-B",
                "denominacion" => "TERMINAL DE OTE - TERMINAL DE OCCIDENTE - SANTA ELENA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB035X0",
                "ruta" => "35",
                "denominacion" => "LA CIMA IV-REPARTO SN. PATRICIO -4ª CALLE OTE. Y AV. CUSCATLAN (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB036X0",
                "ruta" => "36",
                "denominacion" => "PARQUE DE ILOPANGO-CTON. ASINO-JOYA GRANDE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB037A0SS",
                "ruta" => "37-A",
                "denominacion" => "CANTON LAS CASITAS-SAN MARCOS-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "AB037B0SS",
                "ruta" => "37-B",
                "denominacion" => "CANTON AGUA ZARCA-SAN MARCOS-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "AB038A0",
                "ruta" => "38-A",
                "denominacion" => "SAN JOSE LAS FLORES-APOPA-2° AV. NORTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB038B0",
                "ruta" => "38-B",
                "denominacion" => "COL. VALLE DEL SOL - COL.EL TIKAL - APOPA - 2° CALLE OTE. (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB038C0",
                "ruta" => "38-C",
                "denominacion" => "RESIDENCIAL VALLE VERDE (APOPA) - CENTRO JUDICIAL ISIDRO MENENDEZ Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB039X0",
                "ruta" => "39",
                "denominacion" => "HUIZUCAR-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB041A0",
                "ruta" => "41-A",
                "denominacion" => "COL. SAN JOSE-SOYAPANGO-1ª C. PTE Y 9ª AV. NTE. JP II (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB041B0",
                "ruta" => "41-B",
                "denominacion" => "URB.BOSQUES DEL RIO-URB. EL LIMON (SOYAPANGO)-1ª C. PTE Y 9ª AV. NTE.- JP II  Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB041C0",
                "ruta" => "41-C",
                "denominacion" => "COL. SANTA EDUVIGES (SOYAPANGO) -1ª C. PTE. Y 9ª AV. NTE.- PJ II (S.S) Y VIC",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB041D0",
                "ruta" => "41-D",
                "denominacion" => "REPARTO LAS MARGARITAS-PRADOS DE VENECIA-1° CALLE PTE Y 9° AV. NTE.-JP II (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB041E0",
                "ruta" => "41-E",
                "denominacion" => "C. CIUDADELA DON BOSCO (CTON. EL ALGODON-SOYAPANGO)- 9ª AV. NTE-JP II (S.S.) Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB042A0",
                "ruta" => "42-A",
                "denominacion" => "COL. SANTA TERESA-CIUDAD MERLIOT-ALTOS DEL BOULEVARD, SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB042B0",
                "ruta" => "42-B",
                "denominacion" => "COL. SANTA MONICA-CIUDAD MERLIOT-12 AV. SUR-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB042C0",
                "ruta" => "42-C",
                "denominacion" => "JARDINES DE LA SABANA (SANTA TECLA) - 14° AV. NTE. - 1° C. OTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB043X0",
                "ruta" => "43",
                "denominacion" => "CIUDADELA DON BOSCO (CTON. EL ALGODON) - 1ª  C. PTE. Y 9ª AV. NTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB044X1",
                "ruta" => "44",
                "denominacion" => "ANTIGUO CUSCATLAN-METROCENTRO-ZACAMIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB044X2",
                "ruta" => "44",
                "denominacion" => "ANTIGUO CUSCATLAN-ZACAMIL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB046X1",
                "ruta" => "46",
                "denominacion" => "SAN RAMON (MEJICANOS) - 3ª C. OTE Y 8ª AV. NTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB046X2",
                "ruta" => "46",
                "denominacion" => "SAN RAMON (MEJICANOS)-13º AV. NTE. Y 1º C. PTE  (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB047X0",
                "ruta" => "47",
                "denominacion" => "COL. ESMERALDA-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB048X0",
                "ruta" => "48",
                "denominacion" => "COL. SANTA MARTA-MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB049A0",
                "ruta" => "49-A",
                "denominacion" => "COL. LA CAMPANERA-CANTON EL LIMON-SOYAPANGO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB049B0",
                "ruta" => "49-B",
                "denominacion" => "CTON.EL ROSARIO-RTO.SN.RAMON-CTON.EL LIMON-URB.LA CAMPANERA-SOYGO. Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB050X0SA",
                "ruta" => "50",
                "denominacion" => "CTON. EL SALAMO - COL. ESPAÑA - PUENTE EL TREBOL - FINAL BOULEVARD LOS 44 Y CA-1 Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051A0SA",
                "ruta" => "51-A",
                "denominacion" => "COL. ALTOS DEL PALMAR-REDONDEL JOSE MARIA ESCRIBA DE BALAGUER Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051B0SA",
                "ruta" => "51-B",
                "denominacion" => "COL. ALTOS DEL PALMAR-COL. IVU Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051C0SA",
                "ruta" => "51-C",
                "denominacion" => "COL. LAMATEPEC-COL. ESPAÑA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051D0SA",
                "ruta" => "51-D",
                "denominacion" => "COL. RIO ZARCO-ALTOS DEL PALMAR Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051D1SA",
                "ruta" => "51-D",
                "denominacion" => "COL. SANTA ANA NORTE-COL. ALTOS DEL PALMAR Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051E0SA",
                "ruta" => "51-E",
                "denominacion" => "COL. ALTOS DEL PALMAR-COL. IVU Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051F0SA",
                "ruta" => "51-F",
                "denominacion" => "COL. EL MILAGRO-COL. CONTEXA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB051F1SA",
                "ruta" => "51-F",
                "denominacion" => "COL. SANTA ANA NORTE-COL. CONTEXA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB052X1",
                "ruta" => "52-X1",
                "denominacion" => "CALLE FENADESAL (SN SALV.)-REDONDEL MASFERRER (SN SALVADOR) Y VIC.(HOTEL)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB052X2",
                "ruta" => "52-X2",
                "denominacion" => "CALLE FENADESAL (SN SALV.)-REDONDEL MASFERRER (SN SALVADOR) Y VIC.(PASEO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB053A0SO",
                "ruta" => "53-A",
                "denominacion" => "SONSONATE-IZALCO-CALUCO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.26
            ],
            [
                "codigo_ruta" => "AB053B0SO",
                "ruta" => "53-B",
                "denominacion" => "COL. JARDINES DE SONSONATE -URBANIZACION LOMAS DE SAN ANTONIO- COL. EL SAUCE (SONZACATE)  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB053C0SO",
                "ruta" => "53-C",
                "denominacion" => "NAHULINGO-TERMINAL-CENTRO-SAN ANTONIO DEL MONTE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB053D0SO",
                "ruta" => "53-D",
                "denominacion" => "SONSONATE-NAHUIZALCO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.26
            ],
            [
                "codigo_ruta" => "AB053E0SO",
                "ruta" => "53-E",
                "denominacion" => "TERMINAL SEDAS-METROCENTRO-COL. LAS PALMERAS-CENTRO-COL. 14 DE DIC. Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB053F0SO",
                "ruta" => "53-F",
                "denominacion" => "SONSONATE-SISIMITEPEQUE (VIA DM6)-NAHUIZALCO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.34
            ],
            [
                "codigo_ruta" => "AB053G0SO",
                "ruta" => "53-G",
                "denominacion" => "URB. SANTA EUGENIA - CENTRO - COL.. SENSUNAPAN - METROCENTRO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB053H0SO",
                "ruta" => "53-H",
                "denominacion" => "CTON. SISIMITEPEQUE-NAHUIZALCO-LOMA DEL MUERTO- LA COLOCHA-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.34
            ],
            [
                "codigo_ruta" => "AB053I0SO",
                "ruta" => "53-I",
                "denominacion" => "LAS TABLAS - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB053J0SO",
                "ruta" => "53-J",
                "denominacion" => "LOS RIITOS - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.26
            ],
            [
                "codigo_ruta" => "AB054A0UN",
                "ruta" => "54-A",
                "denominacion" => "P. JOCOTE-HUISQUIL-CUTUCO-COMPLEJO PESQUERO-COL BELEN-LAS FLORES  Y  VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB054B0UN",
                "ruta" => "54-B",
                "denominacion" => "P. JOCOTE-COL.ESPERANZA-BELLA VISTA-MATARRITA-SANTA ROSA-LOS RUBIOS Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB054X0UN",
                "ruta" => "54",
                "denominacion" => "CUTUCO-COOPERATIVA ALGODONERA-LA UNION-MULTIPESCA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055A0SA",
                "ruta" => "55-A",
                "denominacion" => "LOTF. ANA LINDA-CENTRO-PUENTE LAS PULGAS Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055A1SA",
                "ruta" => "55-A",
                "denominacion" => "LOTF. ANA LINDA-CENTRO-CASERIO EL BEJUCO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055A2SA",
                "ruta" => "55-A",
                "denominacion" => "CTON. PRIMAVERITA-DESPENSA DE DON JUAN-LOTIFICACION ANA LINDA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055AE0SA",
                "ruta" => "55",
                "denominacion" => "LOTIFICACION ANA LINDA-CENTRO-PUENTE LAS PULGAS Y VICEVERSA",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB055AE1SA",
                "ruta" => "055-AE",
                "denominacion" => "LOTIFICACION ANA LINDA-CENTRO-CASERIO EL BEJUCO Y VICEVERSA",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB055B0SA",
                "ruta" => "55-B",
                "denominacion" => "COMECAYO-CENTRO-RESID. EL TREBOL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055B1SA",
                "ruta" => "55-B",
                "denominacion" => "PLANES DEL RANCHADOR-CENTRO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055B2SA",
                "ruta" => "55-B",
                "denominacion" => "CTON.  EMPALIZADA-CENTRO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055C0SA",
                "ruta" => "55-C",
                "denominacion" => "CANTON POTRERILLOS-HOSPITAL-RESIDENCIAL EL TREBOL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB055D0SA",
                "ruta" => "55-D",
                "denominacion" => "RESID. EL TREBOL-CTON. POTRERILLOS DEL MATAZANO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB056X0SO",
                "ruta" => "56",
                "denominacion" => "BARRIO LAS ATARRAYAS-EL CAMPAMENTO-COL. EL MILAGRO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB059X0SA",
                "ruta" => "59",
                "denominacion" => "CANTON EL GUINEO-PUENTE EL CONGO - CENTRO ( SANTA ANA ) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB060X0AH",
                "ruta" => "60",
                "denominacion" => "AHUACHAPAN-CTON. LAS CHINAMAS Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB061X0AH",
                "ruta" => "61",
                "denominacion" => "CTON. LLANO DE DOÑA MARIA-CTON. CHANCUYO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB062X0AH",
                "ruta" => "62",
                "denominacion" => "AHUACHAPAN-LOS CERRITOS-CANTON LA LABOR Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB064X0SO",
                "ruta" => "64",
                "denominacion" => "JUAYUA-CTON. SAN JOSE LA MAJADA  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB065X0SO",
                "ruta" => "65",
                "denominacion" => "CANTON  SAN JUAN DE DIOS - JUAYUA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB066X0CU",
                "ruta" => "66",
                "denominacion" => "SANTA CRUZ MICHAPA-COJUTEPEQUE Y VIC",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB071X0LL",
                "ruta" => "71",
                "denominacion" => "QUEZALTEPEQUE-BALNEARIO LA TOMA-COLONIA SANTA CRISTINA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072A0SV",
                "ruta" => "72-A",
                "denominacion" => "COL. AGUA CALIENTE-HOSPITALES-MERCADO Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072B0SV",
                "ruta" => "72-B",
                "denominacion" => "C.PPAL.BO. CONCEPCION, 8 CALLE PONIENTE, 2 AV. SUR (HOSPITAL) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072C0SV",
                "ruta" => "72-C",
                "denominacion" => "COL. CAÑAVERAL-COL. LA GLORIA-CALLE ALVARO QUIÑONEZ-2 AV. NTE.-HOSPITAL Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072D0SV",
                "ruta" => "72-D",
                "denominacion" => "BO. CONCEPCION-HOSPITALES Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072E0SV",
                "ruta" => "72-E",
                "denominacion" => "COL. IVU-MERCADO-COL. SANTA ELENA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB072X0SV",
                "ruta" => "72",
                "denominacion" => "AMAPULAPA - SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB077X1LL",
                "ruta" => "77",
                "denominacion" => "CO.EL PITAL(LOURDES COLON)2.C.PTE.PQUE.DANIEL HDEZ.(NVA.SN.SALV) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB077X2LL",
                "ruta" => "77",
                "denominacion" => "ENTRE RIOS(LDES COLON)2.C.PTE.PQUE.DANIEL HDEZ.(NVA.SN.SALV) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB077X3LL",
                "ruta" => "77",
                "denominacion" => "CINCO CEDROS(LDES.COLON)2.C.PTE.PQUE.DANIEL HDEZ.(NVA.SN.SALV) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB078X0LL",
                "ruta" => "78",
                "denominacion" => "CANTON NAZARETH (HUIZUCAR) - NUEVO CUSCATLAN - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "AB079X1LL",
                "ruta" => "79",
                "denominacion" => "VILLA LOURDES(LDES.COLON)15.AV.SUR,PQUE.BOLIVAR (SN.SALV) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB079X2LL",
                "ruta" => "79",
                "denominacion" => "CAMPOS VERDES(LOURDES.COLON) 15.AV.SUR,PQUE.BOLIVAR(S.S.)  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB079X3LL",
                "ruta" => "79",
                "denominacion" => "COL.NVO.LOURDES-CD. MUJER-LAS MORAS (LDES.COLON)-15.AV.SUR. PQUE.BOLIVAR(S.S) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB079X4LL",
                "ruta" => "79",
                "denominacion" => "PALO GRANDE (LDES.COLON) 15 AV.SUR,PARQUE BOLIVAR (SAN SALVADOR) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB080A0LL",
                "ruta" => "80-A",
                "denominacion" => "PUERTO DE LA LIBERTAD-MAJAHUAL-HDA SAN ALFONSO-PLAYA EL SUNZAL Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB080B0LL",
                "ruta" => "80-B",
                "denominacion" => "PUERTO DE LA LIBERTAD - CANTON SAN DIEGO Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.23
            ],
            [
                "codigo_ruta" => "AB081A0UN",
                "ruta" => "81-A",
                "denominacion" => "CANTON EL CHAUITE-SAN JOSE LA FUENTE - CANTON LA PAZ - BOLIVAR - SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB084X0LL",
                "ruta" => "84",
                "denominacion" => "CANTON EL LIMON- SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB088A0SM",
                "ruta" => "88-A",
                "denominacion" => "HOSPITAL REGIONAL-CENTRO-TERMINAL-PRADOS-LAS UNIDAS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB088B0SM",
                "ruta" => "88-B",
                "denominacion" => "COL. VILLA SATELITE - HOSPITAL - CENTRO - COQUERA - CO. EL MOLINOS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB088S0SM",
                "ruta" => "88-S",
                "denominacion" => "HOSPITAL REGIONAL-CENTRO-TERMINAL-MOLINOS-SATELITE Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089A0US",
                "ruta" => "89-A",
                "denominacion" => "COL. LA POZA - USULUTAN - LA LAGUNA - SANTA MARIA Y VIC",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB089B0US",
                "ruta" => "89-B",
                "denominacion" => "CANTON LA CRUZ-USULUTAN-LA PEDRERA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089C0US",
                "ruta" => "89-C",
                "denominacion" => "RESD LAS VERANERAS - CENTRO - COL. PARRAS Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089E0US",
                "ruta" => "89-E",
                "denominacion" => "LA PEDRERA-USULUTAN-EREGUAYQUIN-CONCEPCION BATRES Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB089F0US",
                "ruta" => "89-F",
                "denominacion" => "USULUTAN-EL OBRAJUELO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089G0US",
                "ruta" => "89-G",
                "denominacion" => "CANTON EL TRILLO - COL. EL PARAISO - USULUTAN. Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089H0US",
                "ruta" => "89-H",
                "denominacion" => "CANTON LA PEÑA - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB089R0US",
                "ruta" => "89-R",
                "denominacion" => "USULUTAN-EREGUAYQUIN-ANALCO-CANTON OJO DE AGUA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB090A0SM",
                "ruta" => "90-A",
                "denominacion" => "EL OBRAJUELO-CENTRO-COL. EL TESORO-EL PEDRERITO-COLONIA EL CASTAÑO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB090B0SM",
                "ruta" => "90-B",
                "denominacion" => "COL. CIUDAD PACIFICA - CENTRO - PRADERA - PAPALON Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB090D0SM",
                "ruta" => "90-D",
                "denominacion" => "CASERIO PLACITA-CENTRO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB090F0SM",
                "ruta" => "90-F",
                "denominacion" => "CANTON EL HAVILLAL-UNIVERSIDAD-CENTRO-COL. CHAPARRASTIQUE Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB090G0SM",
                "ruta" => "90-G",
                "denominacion" => "EL OBRAJUELO - QUELEPA - CENTRO - COL. SANTA EMILIA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "AB090X0SM",
                "ruta" => "90",
                "denominacion" => "CIUDAD DE MONCAGUA-CENTRO-COL. PEDRERITO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.34
            ],
            [
                "codigo_ruta" => "AB091X0SM",
                "ruta" => "91",
                "denominacion" => "COL. MILAGRO DE LA PAZ-CENTRO-TERMINAL-HATO NUEVO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB092X0LP",
                "ruta" => "92",
                "denominacion" => "ZACATECOLUCA-SANTA CRUZ PORRILLO-EL PLAYON Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB092X1LP",
                "ruta" => "92",
                "denominacion" => "ZACATECOLUCA - SAN RAFAEL OBRAJUELO Y VICEVERSA",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB092X2LP",
                "ruta" => "92",
                "denominacion" => "ZACATECOLUCA-CANTON AMAYO Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB092X3LP",
                "ruta" => "92",
                "denominacion" => "ZACATECOLUCA-CANTON EL COPINOL Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB092X4LP",
                "ruta" => "92",
                "denominacion" => "ZACATECOLUCA-COL. MIRAMAR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB093X0CU",
                "ruta" => "93",
                "denominacion" => "SANTA CRUZ MICHAPA-COJUTEPEQUE Y VIC",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB094A0SM",
                "ruta" => "94-A",
                "denominacion" => "COL. LA PRESITA-CENTRO-TURICENTRO LA CUEVA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB094X0SM",
                "ruta" => "94",
                "denominacion" => "COL. LA PRESITA-CENTRO-EL ZAMORAN Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB095A0SM",
                "ruta" => "95-A",
                "denominacion" => "CANTON SAN ANDRES - CENTRO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB095X0SM",
                "ruta" => "95",
                "denominacion" => "CASERIO CHAPARRASTIQUE - CANTON EL NIÑO - CENTRO ( SAN MIGUEL ) Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB096X0LL",
                "ruta" => "96",
                "denominacion" => "CANTON SAN SEBASTIAN-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB097X0",
                "ruta" => "97",
                "denominacion" => "RESIDENCIAL EUROPA-CIUDAD MERLIOT-SANTA TECLA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB098X0LL",
                "ruta" => "98",
                "denominacion" => "CANTON LOS SITIOS-NUEVA SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB099A0LL",
                "ruta" => "99-A",
                "denominacion" => "CANTON MATAZANO-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB099X0LL",
                "ruta" => "99",
                "denominacion" => "CANTON EL TRIUNFO-CANTON GRANADILLAS-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB100X0LL",
                "ruta" => "100",
                "denominacion" => "SAN SALVADOR-CIUDAD ARCE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB101A1",
                "ruta" => "101-A",
                "denominacion" => "COL. LAS DELICIAS (SANTA TECLA) - 5ª C. PTE. - 11ª AV. NTE. (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB101A2",
                "ruta" => "101-A",
                "denominacion" => "COL. LAS DELICIAS -SANTA TECLA-SAN SALVADOR Y VIC. (VIA SHELL)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB101B1",
                "ruta" => "101-B",
                "denominacion" => "COL. QUEZALTEPEC-SANTA TECLA-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB101B2",
                "ruta" => "101-B",
                "denominacion" => "ALPES SUIZOS- COL. QUEZALTEPEC-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB101C0",
                "ruta" => "101-C",
                "denominacion" => "HACIENDA SAN JOSE-SANTA TECLA-ANTIGUO CUSCATLAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB101D0",
                "ruta" => "101-D",
                "denominacion" => "RESIDENCIAL SAN ANTONIO-SANTA TECLA-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB102A0LL",
                "ruta" => "102-A",
                "denominacion" => "SAN SALVADOR-SANTA TECLA-PUERTO DE LA LIBERTAD-EL SUNZAL Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.81
            ],
            [
                "codigo_ruta" => "AB102X0LL",
                "ruta" => "102",
                "denominacion" => "SAN SALVADOR-SANTA TECLA-PUERTO DE LA LIBERTAD Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB102X1LL",
                "ruta" => "102",
                "denominacion" => "SAN SALVADOR-LA LIBERTAD Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB103A0LL",
                "ruta" => "103-A",
                "denominacion" => "CRIO. VALLE NUEVO ( CANTON LAS DELICIAS ) - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB103A1LL",
                "ruta" => "103-A",
                "denominacion" => "QUEZALTEPEQUE-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB103B0LL",
                "ruta" => "103-B",
                "denominacion" => "CANTON SAN JUAN LOS PLANES - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB103B1LL",
                "ruta" => "103-B",
                "denominacion" => "CANTON SAN JUAN LOS PLANES- 3ª CALLE ORIENTE- AV. MANUEL GALLARDO (SANTA TECLA) Y VICEVERSA.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB103X0LL",
                "ruta" => "103",
                "denominacion" => "EL VOLCAN -3ª CALLE ORIENTE-AVENIDA MANUEL GALLARDO (SANTA TECLA) Y VICEVERSA",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB104A0LL",
                "ruta" => "104-A",
                "denominacion" => "CANTON SAN LUIS-SHILA-COMASAGUA-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB104X0LL",
                "ruta" => "104",
                "denominacion" => "COMASAGUA - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB105X0LL",
                "ruta" => "105",
                "denominacion" => "SAN SALVADOR-ATEOS-JAYAQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB106X0LL",
                "ruta" => "106",
                "denominacion" => "SAN SALVADOR-TEPECOYO Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB107X0LL",
                "ruta" => "107",
                "denominacion" => "SAN SALVADOR-TEOTEPEQUE-VIA LITORAL Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB108A0LL",
                "ruta" => "108-A",
                "denominacion" => "NUEVA CONCEPCION-SAN PABLO TACACHICO-SAN JUAN OPICO-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.85
            ],
            [
                "codigo_ruta" => "AB108B0LL",
                "ruta" => "108-B",
                "denominacion" => "SAN PABLO TACACHICO-OPICO-QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB108C0LL",
                "ruta" => "108-C",
                "denominacion" => " SAN MATIAS-QUEZALTEPEQUE-SAN SALVADOR (VIA APOPA) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB108C1LL",
                "ruta" => "108-C",
                "denominacion" => "SAN JUAN OPICO - SAN MATIAS - QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB108C2LL",
                "ruta" => "108-C",
                "denominacion" => "SAN MATIAS - QUEZALTEPEQUE  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB108C3LL",
                "ruta" => "108-C",
                "denominacion" => "SAN JUAN OPICO - QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB108D0LL",
                "ruta" => "108-D",
                "denominacion" => "ATIOCOYO - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB108X0LL",
                "ruta" => "108",
                "denominacion" => "SAN JUAN OPICO - SAN SALVADOR VIA SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB109X0LL",
                "ruta" => "109",
                "denominacion" => "QUEZALTEPEQUE - APOPA - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB109X1SS",
                "ruta" => "109",
                "denominacion" => "NEJAPA - APOPA - SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB110A0SV",
                "ruta" => "110-A",
                "denominacion" => "CANTON LA LABOR - SAN SEBASTIAN - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB110X0SV",
                "ruta" => "110",
                "denominacion" => "SAN SEBASTIAN - SANTO DOMINGO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB111A0CH",
                "ruta" => "111-A",
                "denominacion" => "POTONICO - ILOBASCO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB111X0CA",
                "ruta" => "111",
                "denominacion" => "ILOBASCO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB111X1CA",
                "ruta" => "111-1",
                "denominacion" => "ILOBASCO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB112A0CA",
                "ruta" => "112-A",
                "denominacion" => "SENSUNTEPEQUE - ILOBASCO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB112B0CA",
                "ruta" => "112-B",
                "denominacion" => "DOLORES - SENSUNTEPEQUE-TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.14
            ],
            [
                "codigo_ruta" => "AB112B1CA",
                "ruta" => "112-B",
                "denominacion" => "DOLORES - SENSUNTEPEQUE-TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.35
            ],
            [
                "codigo_ruta" => "AB112X0CA",
                "ruta" => "112",
                "denominacion" => "SENSUNTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB113X0CU",
                "ruta" => "113",
                "denominacion" => "COJUTEPEQUE - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.49
            ],
            [
                "codigo_ruta" => "AB114X0CU",
                "ruta" => "114",
                "denominacion" => "TENANCINGO - COJUTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB115X0",
                "ruta" => "115",
                "denominacion" => "TONACATEPEQUE-DISTRITO ITALIA-APOPA-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.40
            ],
            [
                "codigo_ruta" => "AB116X0SV",
                "ruta" => "116",
                "denominacion" => "SAN VICENTE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB116X1SV",
                "ruta" => "116",
                "denominacion" => "SAN VICENTE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.19
            ],
            [
                "codigo_ruta" => "AB116X1SV",
                "ruta" => "116",
                "denominacion" => "SAN VICENTE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 1.19
            ],
            [
                "codigo_ruta" => "AB117A0SS",
                "ruta" => "117-A",
                "denominacion" => "HACIENDA SAN CARLOS - AGUILARES - SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB117C0SS",
                "ruta" => "117-C",
                "denominacion" => "CANTON TUTULTEPEQUE-AGUILARES Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB117X0SS",
                "ruta" => "117",
                "denominacion" => "EL PAISNAL - AGUILARES - SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "AB118X0CH",
                "ruta" => "118",
                "denominacion" => "CANTON OJO DE AGUA-SAN RAFAEL-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB119X0CH",
                "ruta" => "119",
                "denominacion" => "SAN SALVADOR-FRONTERA EL POY Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB120X0CH",
                "ruta" => "120",
                "denominacion" => "SAN SALVADOR - LA REYNA Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB121X0CU",
                "ruta" => "121",
                "denominacion" => "SAN JOSE GUAYABAL - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB123A0CU",
                "ruta" => "123-A",
                "denominacion" => "CANTON PALACIOS - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB123X0CU",
                "ruta" => "123",
                "denominacion" => "ORATORIO DE CONCEPCION - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB124A0CH",
                "ruta" => "124-A",
                "denominacion" => "DULCE NOMBRE DE MARIA-SAN FERNANDO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB124B0CH",
                "ruta" => "124-B",
                "denominacion" => "DULCE NOMBRE DE MARIA-VIA STA RITA-COBANAL-EL TABLON-SN RAFAEL-DULCE NOMBRE DE MARIA Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB124X0CH",
                "ruta" => "124",
                "denominacion" => "DULCE NOMBRE DE MARIA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB125A1CH",
                "ruta" => "125-A",
                "denominacion" => "AZACUALPA-CHALATENANGO- SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.16
            ],
            [
                "codigo_ruta" => "AB125C0CH",
                "ruta" => "125-C",
                "denominacion" => "SAN SALVADOR-CHALATENANGO-SAN MIGUEL LAS MERCEDES Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB125D0CH",
                "ruta" => "125-D",
                "denominacion" => "SAN SALVADOR-CHALATENANGO-ARCATAO VIA GUARJILA Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB125X0CH",
                "ruta" => "125",
                "denominacion" => "CHALATENANGO - SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB125X1CH",
                "ruta" => "125",
                "denominacion" => "CHALATENANGO- SAN SALVADOR Y VIC. ( SERVICIO EXCLUSIVO )",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 2.50
            ],
            [
                "codigo_ruta" => "AB125X1CH",
                "ruta" => "125",
                "denominacion" => "CHALATENANGO- SAN SALVADOR Y VIC. ( SERVICIO EXCLUSIVO )",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 2.50
            ],
            [
                "codigo_ruta" => "AB126X0CH",
                "ruta" => "126",
                "denominacion" => "SAN SALVADOR-CONCEPCION QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB127X0CH",
                "ruta" => "127",
                "denominacion" => "TEJUTLA - SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB128X0LP",
                "ruta" => "128",
                "denominacion" => "SAN FRANCISCO CHINAMECA- SAN SALVADOR ( MERCADO CENTRAL) Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB129X0CU",
                "ruta" => "129",
                "denominacion" => "SUCHITOTO - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB131X0LP",
                "ruta" => "131",
                "denominacion" => "CTON EL SOCORRO-SAN ANTONIO MASAHUAT- SN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB132X0LP",
                "ruta" => "132",
                "denominacion" => "SAN JUAN TEPEZONTES - SAN MIGUEL TEPEZONTES - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB133A0LP",
                "ruta" => "133-A",
                "denominacion" => "ZACATECOLUCA (VIA AUTOPISTA COMALAPA) - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB133B0LP",
                "ruta" => "133-B",
                "denominacion" => "ZACATECOLUCA - SAN SALVADOR (VIA TEJERA ) Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB133X0LP",
                "ruta" => "133-X",
                "denominacion" => "ZACATECOLUCA(VIA AUTOPISTA COMALAPA)-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.25
            ],
            [
                "codigo_ruta" => "AB133X0LP",
                "ruta" => "133-X",
                "denominacion" => "ZACATECOLUCA(VIA AUTOPISTA COMALAPA)-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 1.25
            ],
            [
                "codigo_ruta" => "AB134X0LP",
                "ruta" => "134",
                "denominacion" => "SAN LUIS LA HERRADURA-SAN SALVADOR  (VIA AUTOPISTA)  Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB134X1LP",
                "ruta" => "134-1",
                "denominacion" => "LA HERRADURA-SAN SALVADOR (VIA TEJERA) Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB135A0LP",
                "ruta" => "135-A",
                "denominacion" => "SANTA MARIA OSTUMA - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB135X0LP",
                "ruta" => "135",
                "denominacion" => "SAN PEDRO NONUALCO - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB137X0CH",
                "ruta" => "137",
                "denominacion" => "CANTON EL ROSARIO ( SAN IGNACIO ) - SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB138X0LP",
                "ruta" => "138",
                "denominacion" => "SAN SALVADOR-SAN JUAN TALPA VIA AUTOPISTA COMALAPA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB140X1CA",
                "ruta" => "140",
                "denominacion" => "ILOBASCO-CHORRERA EL GUAYABO-CANTON SAN NICOLAS Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB141X0CH",
                "ruta" => "141",
                "denominacion" => "SAN SALVADOR-NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.99
            ],
            [
                "codigo_ruta" => "AB142X0CA",
                "ruta" => "142",
                "denominacion" => "TEJUTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.99
            ],
            [
                "codigo_ruta" => "AB144A0CU",
                "ruta" => "144-A",
                "denominacion" => "CANTON HUISILTEPEQUE (SAN PEDRO PERULAPAN) - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB144B0CU",
                "ruta" => "144-B",
                "denominacion" => "CANTON LA ESPERANZA (SAN PEDRO PERULAPAN) - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB144C0CU",
                "ruta" => "144-C",
                "denominacion" => "CANTON EL RODEO-SAN PEDRO PERULAPAN - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.47
            ],
            [
                "codigo_ruta" => "AB144C1CU",
                "ruta" => "144-C",
                "denominacion" => "CANTON EL PARAISO - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB144D0CU",
                "ruta" => "144-D",
                "denominacion" => "CANTON SAN FRANCISCO (SAN PEDRO PERULAPAN) -TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.54
            ],
            [
                "codigo_ruta" => "AB144X0CU",
                "ruta" => "144",
                "denominacion" => "SAN PEDRO PERULAPAN - SAN MARTIN - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB145X0CU",
                "ruta" => "145",
                "denominacion" => "SAN BARTOLOME PERULAPIA - TERMINAL PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB146X0LP",
                "ruta" => "146",
                "denominacion" => "TAPALHUACA-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB148X0US",
                "ruta" => "148",
                "denominacion" => "SAN AGUSTIN - SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.22
            ],
            [
                "codigo_ruta" => "AB149X0LP",
                "ruta" => "149",
                "denominacion" => "CANTON BARAHONA-SAN SALVADOR  Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB150X0LL",
                "ruta" => "150",
                "denominacion" => "NUEVO CUSCATLAN - SANTA TECLA  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "AB151X0LL",
                "ruta" => "151",
                "denominacion" => "EL PALOMAR - SAN JOSE VILLANUEVA - SANTA TECLA  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB153X0LP",
                "ruta" => "153",
                "denominacion" => "SAN LUIS LA HERRADURA - ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB154A0LP",
                "ruta" => "154-A",
                "denominacion" => "ZACATECOLUCA-HACIENDA  SANTA RITA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB155X0LP",
                "ruta" => "155",
                "denominacion" => "CASERIO LA PITA-ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB156A0SV",
                "ruta" => "156-A",
                "denominacion" => "SANTA CLARA - APASTEPEQUE - SAN VICENTE  Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "AB156E0SV",
                "ruta" => "156-E",
                "denominacion" => "EL ZAPOTE - SAN JUAN MERINOS - APASTEPEQUE - SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB156X0SV",
                "ruta" => "156",
                "denominacion" => "APASTEPEQUE - SAN VICENTE  Y VIC",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB157A0SV",
                "ruta" => "157-A",
                "denominacion" => "SAN VICENTE-APASTEPEQUE-SAN NICOLAS Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB157A2SV",
                "ruta" => "157-A",
                "denominacion" => "SAN PEDRO-SAN JACINTO-ORATORIO-SAN FELIPE-APASTEPEQUE-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB157B0SV",
                "ruta" => "157-B",
                "denominacion" => "CANTON EL REBELDE - SAN VICENTE  Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB157X0SV",
                "ruta" => "157",
                "denominacion" => "SAN VICENTE-MERCEDES UMAÑA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB159X0SV",
                "ruta" => "159",
                "denominacion" => "TECOLUCA-SAN NICOLAS LEMPA-CANTON LOS NARANJOS-CASERIO LA PITA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.14
            ],
            [
                "codigo_ruta" => "AB160A0SV",
                "ruta" => "160-A",
                "denominacion" => "SAN PEDRO NONUALCO-GUADALUPE-VERAPAZ-NUEVO TEPETITAN- SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB160X0SV",
                "ruta" => "160",
                "denominacion" => "SAN VICENTE-SAN PEDRO NONUALCO-GUADALUPE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB161X0LL",
                "ruta" => "161",
                "denominacion" => "CANTON SAN PEDRO - LOS RANCHOS - EL JOCOTE - QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB163X0CU",
                "ruta" => "163",
                "denominacion" => "AGUILARES-SUCHTO-CTON.VALLE VERDE-EL COROZAL- EL CERETO-EL CENICERO Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB165A0LL",
                "ruta" => "165-A",
                "denominacion" => "TALNIQUE - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB165X0LL",
                "ruta" => "165",
                "denominacion" => "CANTON SAN JOSE LOS SITIOS DE TALNIQUE-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB166A0LP",
                "ruta" => "166-A",
                "denominacion" => "CANTON PLANES DE LAS DELICIAS-CTON MELARA-TERMINAL DEL SUR-SN SALV. Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB166X0LL",
                "ruta" => "166",
                "denominacion" => "SAN SALVADOR-CANGREJERA-LA LIBERTAD Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB168X0LL",
                "ruta" => "168",
                "denominacion" => "QUEZALTEPEQUE-STA. TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB169X0LL",
                "ruta" => "169",
                "denominacion" => "HUIZUCAR-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB170X0CH",
                "ruta" => "170",
                "denominacion" => "AGUA CALIENTE  - SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB171X0LP",
                "ruta" => "171",
                "denominacion" => "ZACATECOLUCA - USULUTAN Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB173X0",
                "ruta" => "173",
                "denominacion" => "NEJAPA-SAN  SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB174X0CH",
                "ruta" => "174",
                "denominacion" => "SAN.FRANCISCO MORAZAN - TERMINAL DE ORIENTE (SAN SALVADOR) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB175A1CU",
                "ruta" => "175-A",
                "denominacion" => "CANTON SAN ANDRES - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB175B0CU",
                "ruta" => "175-B",
                "denominacion" => "CANTON EL ROSARIO-MONTE SAN JUAN-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB175X0CU",
                "ruta" => "175",
                "denominacion" => "COJUTEPEQUE-MONTE SAN JUAN-CON EXTENSION SAN MARTINCITO Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB175X1CU",
                "ruta" => "175",
                "denominacion" => "CANTON SAN MARTINCITO-MONTE SAN JUAN-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB176B0SV",
                "ruta" => "176-B",
                "denominacion" => "AMATITAN-SAN ESTEBAN CATARINA-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB176B1SV",
                "ruta" => "176-B",
                "denominacion" => "SAN LORENZO-SAN ESTEBAN CATARINA-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB176D0SV",
                "ruta" => "176-D",
                "denominacion" => "SAN ESTEBAN CATARINA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB176X0SV",
                "ruta" => "176",
                "denominacion" => "SAN LORENZO - SAN ESTEBAN CATARINA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB177A0SV",
                "ruta" => "177-A",
                "denominacion" => "TERMINAL (SAN VICENTE)-COL. JIBOA 2-Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB177X0SV",
                "ruta" => "177",
                "denominacion" => "SAN VICENTE- TECOLUCA - ZACATECOLUCA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB178A0SV",
                "ruta" => "178-A",
                "denominacion" => "SAN EMIGDIO-VERAPAZ-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB178X0SV",
                "ruta" => "178",
                "denominacion" => "SAN VICENTE-VERAPAZ-GUADALUPE-SAN EMIGDIO Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB179X0CU",
                "ruta" => "179",
                "denominacion" => "CANTON SAN ANTONIO - CANDELARIA - CANTON MIRAFLORES - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB179X1CU",
                "ruta" => "179",
                "denominacion" => "CANTON LAS ANIMAS-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB180X0CH",
                "ruta" => "180",
                "denominacion" => "EL PARAISO-SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB181A0CA",
                "ruta" => "181-A",
                "denominacion" => "VICTORIA - SENSUNTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB181X0CA",
                "ruta" => "181",
                "denominacion" => "VICTORIA - SENSUNTEPEQUE - ILOBASCO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB182X0LP",
                "ruta" => "182",
                "denominacion" => "SAN JOSE  LA MONTAÑA - ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB185X0US",
                "ruta" => "185",
                "denominacion" => "PUERTO EL TRIUNFO-JIQUILISCO-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB186B0CU",
                "ruta" => "186-B",
                "denominacion" => "SAN MIGUEL TEPEZONTES-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB186X0CU",
                "ruta" => "186",
                "denominacion" => "COJUTEPEQUE-SAN EMIGDIO-SANTA CRUZ ANALQUITO-PARAISO DE OSORIO Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB187A0LL",
                "ruta" => "187-A",
                "denominacion" => "TAMANIQUE - PUERTO DE LA LIBERTAD Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB187B0LL",
                "ruta" => "187-B",
                "denominacion" => "PUERTO LA LIBERTAD-CANGREJERA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB187X0LL",
                "ruta" => "187",
                "denominacion" => "PTO. LA LIBERTAD-CANGREJERA-COMALAPA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB188X0LL",
                "ruta" => "188",
                "denominacion" => "STA. TECLA-CTN. LAS DELICIAS Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.40
            ],
            [
                "codigo_ruta" => "AB189X0CH",
                "ruta" => "189",
                "denominacion" => "CANTON PETAPA-LA LAGUNA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB190A0SS",
                "ruta" => "190-A",
                "denominacion" => "SAN MARTIN-CARRETERA PANAMERICANA-CANTON SAN AGUSTIN Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.67
            ],
            [
                "codigo_ruta" => "AB190X0",
                "ruta" => "190",
                "denominacion" => "TONACATEPEQUE-SAN MARTIN Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB191A0SV",
                "ruta" => "191-A",
                "denominacion" => "SAN VICENTE-MERCEDES LA CEIBA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB191X0SV",
                "ruta" => "191",
                "denominacion" => "TEPETITAN - CANDELARIA ABAJO - SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "AB192A0LL",
                "ruta" => "192-A",
                "denominacion" => "CHILTIUPAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB192A1LL",
                "ruta" => "192-A",
                "denominacion" => "PUERTO DE LA LIBERTAD-CHILTIUPAN Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB192B0LL",
                "ruta" => "192-B",
                "denominacion" => "PUERTO DE LA LIBERTAD-TEOTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB192X0LL",
                "ruta" => "192",
                "denominacion" => "PUERTO LA LIBERTAD (LA LIBERTAD)-LA PERLA  (JICALAPA) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB193B0LP",
                "ruta" => "193-B",
                "denominacion" => "LA PUNTILLA ( SAN LUIS LA HERRADURA - ZACATECOLUCA  Y VIC. )",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB193D0LP",
                "ruta" => "193-D",
                "denominacion" => "DESVIO LA FLECHA-SAN MARCELINO-COSTA DEL SOL-LA PUNTILLA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB193E0SV",
                "ruta" => "193-E",
                "denominacion" => "SAN VICENTE-ZACATECOLUCA-TECOLUCA-COSTA DEL SOL Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.06
            ],
            [
                "codigo_ruta" => "AB194X0SV",
                "ruta" => "194",
                "denominacion" => "SAN VICENTE-PUENTE CUSCATLAN-MERCEDES UMAÑA-ESTANZUELAS Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB195X0SV",
                "ruta" => "195",
                "denominacion" => "SAN VICENTE-SAN ILDEFONSO Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB195X1SV",
                "ruta" => "195",
                "denominacion" => "SAN VICENTE-EL ZAITE-SAN JOSE LOS ALMENDROS Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB198A0CU",
                "ruta" => "198-A",
                "denominacion" => "EL ROSARIO - SAN RAFAEL CEDROS - COJUTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB198X0CU",
                "ruta" => "198",
                "denominacion" => "COJUTEPEQUE-EL ROSARIO (CUSCATLAN) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB199A0CU",
                "ruta" => "199-A",
                "denominacion" => "CANTON SANTA ANITA ( SAN CRISTOBAL ) COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB199X0CU",
                "ruta" => "199",
                "denominacion" => "CANTON SAN FRANCISCO (SAN CRISTOBAL) - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB201A0SA",
                "ruta" => "201-A",
                "denominacion" => "METAPAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB201A1SA",
                "ruta" => "201-A1",
                "denominacion" => "METAPAN-SAN SALVADOR Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 2.00
            ],
            [
                "codigo_ruta" => "AB201A1SA",
                "ruta" => "201-A1",
                "denominacion" => "METAPAN-SAN SALVADOR Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 2.00
            ],
            [
                "codigo_ruta" => "AB201DI0SA",
                "ruta" => "201-DI",
                "denominacion" => "SANTA ANA-SAN SALVADOR VIA CALLE NUEVA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB201DI1SA",
                "ruta" => "201-DI",
                "denominacion" => "SANTA ANA-SAN SALVADOR  VIA CONGO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB201DI2SA",
                "ruta" => "201",
                "denominacion" => "SANTA ANA-SAN SALVADOR (VIA CALLE NUEVA) Y VIC. (SERV. EXCLUSIVO)",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB201OR0SA",
                "ruta" => "201-OR",
                "denominacion" => "SANTA ANA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB202X0AH",
                "ruta" => "202",
                "denominacion" => "AHUACHAPAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB202X1AH",
                "ruta" => "202-1",
                "denominacion" => "AHUACHAPAN-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 1.60
            ],
            [
                "codigo_ruta" => "AB202X1AH",
                "ruta" => "202-1",
                "denominacion" => "AHUACHAPAN-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.60
            ],
            [
                "codigo_ruta" => "AB203A0SO",
                "ruta" => "203-A",
                "denominacion" => "SANTA ISABEL ISHUATAN - SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB203X0SO",
                "ruta" => "203",
                "denominacion" => "SAN JULIAN - SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB205X0SO",
                "ruta" => "205",
                "denominacion" => "SONSONATE-SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB205X0SO",
                "ruta" => "205",
                "denominacion" => "SONSONATE-SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB205X1SO",
                "ruta" => "205",
                "denominacion" => "SONSONATE - SAN SALVADOR Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB205X1SO",
                "ruta" => "205",
                "denominacion" => "SONSONATE - SAN SALVADOR Y VIC.(SERVICIO EXCLUSIVO)",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB208X0SO",
                "ruta" => "208",
                "denominacion" => "ARMENIA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.53
            ],
            [
                "codigo_ruta" => "AB209X0SA",
                "ruta" => "209",
                "denominacion" => "SANTA ANA-SONSONATE VIA CERRO VERDE Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.71
            ],
            [
                "codigo_ruta" => "AB210X0SA",
                "ruta" => "210",
                "denominacion" => "SANTA ANA - CHALCHUAPA - ATIQUIZAYA - AHUACHAPAN Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB211A0SA",
                "ruta" => "211-A",
                "denominacion" => "METAPAN-FRONTERA ANGUIATU   Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB211X0SA",
                "ruta" => "211",
                "denominacion" => "METAPAN-SAN JERONIMO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.54
            ],
            [
                "codigo_ruta" => "AB212X0SA",
                "ruta" => "212",
                "denominacion" => "SANTA ANA-TEXISTEPEQUE-CTON. CHILCUYO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB213X0SA",
                "ruta" => "213",
                "denominacion" => "SANTA ANA-SAN PABLO TACACHICO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.85
            ],
            [
                "codigo_ruta" => "AB214X0SA",
                "ruta" => "214",
                "denominacion" => "SANTA ANA-ATIQUIZAYA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB216X0SA",
                "ruta" => "216",
                "denominacion" => "SANTA ANA - SONSONATE Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB217A0SA",
                "ruta" => "217-A",
                "denominacion" => "SANTA ANA-TEXISTEPEQUE-SAN MIGUEL-EL TABLON Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB217C0SA",
                "ruta" => "217-C",
                "denominacion" => "SANTA ANA-TEXISTEPEQUE-SANTO TOMAS CASITAS Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB217D0SA",
                "ruta" => "217-D",
                "denominacion" => "CASERIO SAN JOSE EL TRIUNFO-CASERIO LA \" Y\" GRIEGA-TEXISTEPEQUE-SANTA ANA  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB217X0SA",
                "ruta" => "217",
                "denominacion" => "SANTA ANA-TEXISTEPEQUE-CTON. SAN MIGUEL Y   VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB218X0SA",
                "ruta" => "218",
                "denominacion" => "SANTA ANA-CHALCHUAPA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.26
            ],
            [
                "codigo_ruta" => "AB219X0SO",
                "ruta" => "219",
                "denominacion" => "CUISNAHUAT - SITIO SAN LUCAS - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB220X0SA",
                "ruta" => "220",
                "denominacion" => "SANTA ANA-LAGO DE COATEPEQUE VIA CASERIO MONTERREY Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "AB222X0SA",
                "ruta" => "222",
                "denominacion" => "SANTA ANA-CTON. LA PARADA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB226X0SA",
                "ruta" => "226",
                "denominacion" => "SANTA ANA-CTON. CALZONTES ARRIBA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB227X0SA",
                "ruta" => "227",
                "denominacion" => "BORDE DE LA LAGUNA (VIA FLOR AMARILLA)  SANTA ANA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB228X0SA",
                "ruta" => "228",
                "denominacion" => "SANTA ANA-FLOR AMARILLA-CTON. CALZONTES ABAJO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB229X0SA",
                "ruta" => "229",
                "denominacion" => "SANTA ANA-ACHUPSE ARRIBA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB232B0SA",
                "ruta" => "232-B",
                "denominacion" => "SANTA ANA-CTON. EL RESBALADERO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB232C0SA",
                "ruta" => "232-C",
                "denominacion" => "SANTA ANA-CASERIO EL LIMITE Y VIC",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB232X0SA",
                "ruta" => "232",
                "denominacion" => "SANTA ANA-EL COBANO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB233X0SA",
                "ruta" => "233",
                "denominacion" => "SANTA ANA-CTON. PRIMAVERA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB234A0SA",
                "ruta" => "234-A",
                "denominacion" => "CHALCHUAPA-CTON. EL COCO-EL AMATON Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB234B0SA",
                "ruta" => "234-B",
                "denominacion" => "CHALCHUAPA-EL JUTE Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB234C0SA",
                "ruta" => "234-C",
                "denominacion" => "LA HACIENDITA-SAN LUIS CHALCHUAPA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB234X0SA",
                "ruta" => "234",
                "denominacion" => "CHALCHUAPA - CANTÓN EL COCO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB235A0SA",
                "ruta" => "235-A",
                "denominacion" => "SANTA ANA-SAN JERONIMO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB235X0SA",
                "ruta" => "235",
                "denominacion" => "FRONTERA ANGUIATU - SANTA ANA  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB236X0SA",
                "ruta" => "236",
                "denominacion" => "SAN CRISTOBAL DE LA FRONTERA - SANTA ANA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.53
            ],
            [
                "codigo_ruta" => "AB237X0SA",
                "ruta" => "237",
                "denominacion" => "SANTA ANA-CTON. SAN JERONIMO-CASERIO EL TABLONCITO- EL PARAISO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "AB238X0SA",
                "ruta" => "238",
                "denominacion" => "SANTA ANA-JUAYUA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB242X0SA",
                "ruta" => "242",
                "denominacion" => "SANTA ANA-PLANES DE LA LAGUNA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "AB243X0SO",
                "ruta" => "243",
                "denominacion" => "SONSONATE-JUJUTLA (VIA EL ROSARIO)-SAN MARTIN- EL PEÑON Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.19
            ],
            [
                "codigo_ruta" => "AB245X0AH",
                "ruta" => "245",
                "denominacion" => "HACIENDA  CALERA GRANDE-CANTON RIO FRIO-ATIQUIZAYA Y VIC",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB246A0SO",
                "ruta" => "246-A",
                "denominacion" => "SANTO DOMINGO DE GUZMAN-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB246X0SO",
                "ruta" => "246",
                "denominacion" => "SAN PEDRO PUXTLA-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB247X0SA",
                "ruta" => "247",
                "denominacion" => "CANTON SAN LUIS - SAN SEBASTIAN SALITRIO - SANTA ANA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.33
            ],
            [
                "codigo_ruta" => "AB248X0SA",
                "ruta" => "248",
                "denominacion" => "SANTA ANA-CERRO VERDE Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB249X0SO",
                "ruta" => "249",
                "denominacion" => "SONSONATE-JUAYUA-APANECA-ATACO-AHUACHAPAN Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB251X0SO",
                "ruta" => "251",
                "denominacion" => "SONSONATE-CTON. SAN JOSE EL NARANJO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB252X0SO",
                "ruta" => "252",
                "denominacion" => "ACAJUTLA - SONSONATE  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB256X0SA",
                "ruta" => "256",
                "denominacion" => "SAN ISIDRO-OPICO-SANTA ANA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB257X0SO",
                "ruta" => "257",
                "denominacion" => "CASERIO LOS COBANOS - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB258X0SO",
                "ruta" => "258",
                "denominacion" => "CANTON EL CACAO ARRIBA - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB259X0SO",
                "ruta" => "259",
                "denominacion" => "SONSONATE-FRONTERA LA HACHADURA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB260A0SO",
                "ruta" => "260-A",
                "denominacion" => "SONSONATE-HACIENDA LOS LAGARTOS Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB260B0SO",
                "ruta" => "260-B",
                "denominacion" => "CUISNAHUAT  - SAN JULIAN - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB260X0SO",
                "ruta" => "260",
                "denominacion" => "SAN JULIAN-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB261X0SO",
                "ruta" => "261",
                "denominacion" => "SONSONATE-CTON. LA PERLA-TEOTEPEQUE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB263X0AH",
                "ruta" => "263",
                "denominacion" => "AHUACHAPAN - PUENTE EL JOBO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB264A0AH",
                "ruta" => "264-A",
                "denominacion" => "AHUACHAPAN-CTON. SAN RAFAEL Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB264X0AH",
                "ruta" => "264",
                "denominacion" => "TACUBA - CANTON LOMA DE LA GLORIA - AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB265X0LL",
                "ruta" => "265",
                "denominacion" => "CASERIO EL AGUACATE DE CANTON TACACHICO -QUEZALTEPEQUE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB266X0SA",
                "ruta" => "266",
                "denominacion" => "CHALCHUAPA-CANTON LAS CRUCES Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB267X0SA",
                "ruta" => "267",
                "denominacion" => "CTON. EL ARADO - CHALCHUAPA  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB268X0LL",
                "ruta" => "268",
                "denominacion" => "CANTON SANTA ROSA-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB270A0SO",
                "ruta" => "270-A",
                "denominacion" => "CTON. SAN ANTONIO-SACACOYO-CTON. ATEOS-ARMENIA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB270X0SO",
                "ruta" => "270",
                "denominacion" => "SAN JULIAN-HACIENDA LOS LAGARTOS-ARMENIA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "AB272X0SO",
                "ruta" => "272",
                "denominacion" => "SONSONATE-ISHUATAN Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB274X0SA",
                "ruta" => "274",
                "denominacion" => "CTON. SANTA ROSA SENCA - CHALCHUAPA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB276X0SA",
                "ruta" => "276",
                "denominacion" => "SANTA ANA-QUEZALTEPEQUE-APOPA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB277X0SA",
                "ruta" => "277",
                "denominacion" => "SANTA ANA-ATIQUIZAYA-SAN LORENZO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB278X0AH",
                "ruta" => "278",
                "denominacion" => "AHUACHAPAN-JUJUTLA-GUAYMANGO-SONSONATE Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB279A0SO",
                "ruta" => "279-A",
                "denominacion" => "HACIENDA SAN ISIDRO-CTON. LOS MANGOS-ARMENIA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB279B0SO",
                "ruta" => "279-B",
                "denominacion" => "HACIENDA LAS LAJAS-HACIENDA SAN ISIDRO-SAN SALVADOR Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB279X0SO",
                "ruta" => "279",
                "denominacion" => "HACIENDA SAN ISIDRO - ARMENIA  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB281A0SO",
                "ruta" => "281-A",
                "denominacion" => "SONSONATE-CASERIO BARRA CIEGA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.54
            ],
            [
                "codigo_ruta" => "AB281B0SO",
                "ruta" => "281-B",
                "denominacion" => "CASERIO COQUIAMITA (CANTON COQUIAMA) - SONSONATES Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB281D0SO",
                "ruta" => "281-D",
                "denominacion" => "SONSONATE-TEOTEPEQUE-TAPAHUASHUSHA-CTON. EL COROSAL (COOPERATIVA CHIQUILEQUITA) Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "AB281X0SO",
                "ruta" => "281",
                "denominacion" => "SONSONATE-CTON. SANTA MARIA MIZATA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB282X0SA",
                "ruta" => "282",
                "denominacion" => "SANTA ANA - SAN ANTONIO PAJONAL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB282X1SA",
                "ruta" => "282",
                "denominacion" => "SANTA ANA-SAN ANTONIO PAJONAL Y VICEVERSA (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.93
            ],
            [
                "codigo_ruta" => "AB283X0SA",
                "ruta" => "283",
                "denominacion" => "SANTA ANA - CANTON EL PASTE Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB284X0LL",
                "ruta" => "284",
                "denominacion" => "COL. SAN JOSE ( CTON. ZAPOTITAN ) - CTON. VERACRUZ - CIUDAD ARCE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB285X0SO",
                "ruta" => "285",
                "denominacion" => "BARRA DE SANTIAGO-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB286X0SO",
                "ruta" => "286",
                "denominacion" => "SONSONATE-SAN FRANCISCO MENENDEZ Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB287X0SO",
                "ruta" => "287",
                "denominacion" => "SONSONATE-LA LIBERTAD Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB288X0AH",
                "ruta" => "288",
                "denominacion" => "SAN FRANCISCO MENENDEZ - AHUACHAPAN  (VIA JUJUTLA) Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB289X0SA",
                "ruta" => "289",
                "denominacion" => "SANTA ANA - TEXISTEPEQUE-MASAHUAT-CTON. LLANO DE LA MAJADA  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB290B0AH",
                "ruta" => "290-B",
                "denominacion" => "EL ZAPOTE-CARA SUCIA-SAN FRANCISCO MENENDEZ Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB290X0AH",
                "ruta" => "290",
                "denominacion" => "GARITA PALMERA - SAN FRANCISCO MENENDEZ Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB292X0AH",
                "ruta" => "292",
                "denominacion" => "AHUACHAPAN-ATIQUIZAYA-RIO FRIO Y VIC",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB293B0AH",
                "ruta" => "293-B",
                "denominacion" => "CASERIO CALAPA - (CANTON EL TIGRE)  - AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB293X0AH",
                "ruta" => "293",
                "denominacion" => "CANTON LOS TOLES - AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB294X0SA",
                "ruta" => "294",
                "denominacion" => "SANTA ANA-CASERIO LOS ELIZONDOS Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB295X0CH",
                "ruta" => "295",
                "denominacion" => "CHALATENANGO-CANTON PETAPA Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB296X0CH",
                "ruta" => "296",
                "denominacion" => "CANTON LOS PRADOS-LA LAGUNA-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB297X0AH",
                "ruta" => "297",
                "denominacion" => "CASERIO EL BOTADERO ( CANTON EL ROBLE ) - AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB298X0US",
                "ruta" => "298",
                "denominacion" => "SAN DIONISIO - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB299X0SA",
                "ruta" => "299",
                "denominacion" => "SANTA ANA-CASERIO GUARNECIA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB300B0CH",
                "ruta" => "300-B",
                "denominacion" => "CANTON LLANO GRANDE  (CHALATENANGO)-CHALATENANGO  (CHALATENANGO) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB300C0CH",
                "ruta" => "300-C",
                "denominacion" => "COL. EL SOL-CHALATENANGO Y VIC",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB300X0CH",
                "ruta" => "300",
                "denominacion" => "REUBICACION SAN BARTOLO 2 -CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB301A0SM",
                "ruta" => "301-A",
                "denominacion" => "SAN MIGUEL-USULUTAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.24
            ],
            [
                "codigo_ruta" => "AB301X0SM",
                "ruta" => "301",
                "denominacion" => "SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.24
            ],
            [
                "codigo_ruta" => "AB301X1SM",
                "ruta" => "301",
                "denominacion" => "SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 4.63
            ],
            [
                "codigo_ruta" => "AB301X1SM",
                "ruta" => "301",
                "denominacion" => "SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 4.63
            ],
            [
                "codigo_ruta" => "AB301X1SM",
                "ruta" => "301",
                "denominacion" => "SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 4.63
            ],
            [
                "codigo_ruta" => "AB302A0US",
                "ruta" => "302-A",
                "denominacion" => "SAN JORGE-USULUTAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB302B0US",
                "ruta" => "302-B",
                "denominacion" => "EL TRANSITO-USULUTAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB302D0US",
                "ruta" => "302-D",
                "denominacion" => "CONCEPCION BATRES-USULUTAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB302X0US",
                "ruta" => "302",
                "denominacion" => "USULUTAN-ZACATECOLUCA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB302X1US",
                "ruta" => "302-1",
                "denominacion" => "USULUTAN-ZACATECOLUCA-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 3.00
            ],
            [
                "codigo_ruta" => "AB302X1US",
                "ruta" => "302-1",
                "denominacion" => "USULUTAN-ZACATECOLUCA-SAN SALVADOR Y VIC. (SERVICIO EXCLUSIVO)",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 3.00
            ],
            [
                "codigo_ruta" => "AB303A0US",
                "ruta" => "303-A",
                "denominacion" => "ALEGRIA - BERLIN - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.18
            ],
            [
                "codigo_ruta" => "AB303X0US",
                "ruta" => "303",
                "denominacion" => "BERLIN - MERCEDES UMAÑA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.24
            ],
            [
                "codigo_ruta" => "AB304X0UN",
                "ruta" => "304",
                "denominacion" => "LA UNION - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 3.19
            ],
            [
                "codigo_ruta" => "AB304X0UN",
                "ruta" => "304",
                "denominacion" => "LA UNION - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 3.19
            ],
            [
                "codigo_ruta" => "AB304X1UN",
                "ruta" => "304-X1",
                "denominacion" => "LA UNION - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB304X1UN",
                "ruta" => "304-X1",
                "denominacion" => "LA UNION - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB304X1UN",
                "ruta" => "304-X1",
                "denominacion" => "LA UNION - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB305X0MO",
                "ruta" => "305",
                "denominacion" => "SAN FRANCISCO GOTERA - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.92
            ],
            [
                "codigo_ruta" => "AB305X1MO",
                "ruta" => "305",
                "denominacion" => "SAN FRANCISCO GOTERA - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB306X0UN",
                "ruta" => "306",
                "denominacion" => "SANTA ROSA DE LIMA - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 3.19
            ],
            [
                "codigo_ruta" => "AB306X1UN",
                "ruta" => "306-1",
                "denominacion" => "SANTA ROSA DE LIMA - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB306X1UN",
                "ruta" => "306-1",
                "denominacion" => "SANTA ROSA DE LIMA - SAN MIGUEL - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (EXCLUSIVO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 5.55
            ],
            [
                "codigo_ruta" => "AB308X0SM",
                "ruta" => "308",
                "denominacion" => "NUEVA GUADALUPE - CHINAMECA - JUCUAPA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.17
            ],
            [
                "codigo_ruta" => "AB309X0US",
                "ruta" => "309",
                "denominacion" => "SANTIAGO DE MARIA - EL TRIUNFO - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB311X0US",
                "ruta" => "311",
                "denominacion" => "ESTANZUELAS - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB312X0US",
                "ruta" => "312",
                "denominacion" => "SANTA ELENA-USULUTAN-ZACATECOLUCA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB312XIUS",
                "ruta" => "312",
                "denominacion" => "SANTA ELENA- USULUTAN-ZACATECOLUCA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 2.25
            ],
            [
                "codigo_ruta" => "AB314X0US",
                "ruta" => "314",
                "denominacion" => "SAN FRANCISCO JAVIER-JIQUILISCO-SAN SALVADOR Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB315X0SM",
                "ruta" => "315",
                "denominacion" => "TIERRA BLANCA-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB316A0SM",
                "ruta" => "316-A",
                "denominacion" => "SAN GERARDO-CIUDAD BARRIOS-CHAPELTIQUE-SAN MIGUEL  Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.17
            ],
            [
                "codigo_ruta" => "AB316B0SM",
                "ruta" => "316-B",
                "denominacion" => "SAN ANTONIO EL MOSCO-CIUDAD BARRIOS-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB316C0SM",
                "ruta" => "316-C",
                "denominacion" => "CANTON SAN ANTONIO-SAN LUIS DE LA REINA-CIUDAD BARRIOS-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB316D0SM",
                "ruta" => "316-D",
                "denominacion" => "CANTON SAN PEDRO-CHAPELTIQUE-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB316X0SM",
                "ruta" => "316",
                "denominacion" => "CIUDAD BARRIOS-CHAPELTIQUE-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB317X0SM",
                "ruta" => "317",
                "denominacion" => "SAN MIGUEL - CHAPELTIQUE - CIUDAD BARRIOS - CAROLINA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.41
            ],
            [
                "codigo_ruta" => "AB318A0SM",
                "ruta" => "318-A",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-SESORI-SN LUIS DE LA REINA-SN GERARDO-NVO EDEN DE SN JUAN Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB318B0SM",
                "ruta" => "318-B",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-SESORI-SAN GERARDO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.17
            ],
            [
                "codigo_ruta" => "AB318X0SM",
                "ruta" => "318",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-POTOSI-SESORI Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB319A0SM",
                "ruta" => "319-A",
                "denominacion" => "EL TRANSITO-SAN RAFAEL DE ORIENTE-SAN JORGE-PLACITAS-CENTRO Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.92
            ],
            [
                "codigo_ruta" => "AB319X0SM",
                "ruta" => "319",
                "denominacion" => "SAN RAFAEL DE ORIENTE-SAN JORGE-PLACITAS-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB320A0UN",
                "ruta" => "320-A",
                "denominacion" => "INTIPUCA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB320B0SM",
                "ruta" => "320-B",
                "denominacion" => "SAN MIGUEL-CHIRILAGUA-EL CUCO -EL CARRIZAL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB320X0SM",
                "ruta" => "320",
                "denominacion" => " SAN MIGUEL - CHIRILAGUA - EL CUCO Y  VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB321X0UN",
                "ruta" => "321",
                "denominacion" => "EL COYOLITO-EL PICHE-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB322X0US",
                "ruta" => "322",
                "denominacion" => "SAN MIGUEL-BERLIN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB323X0US",
                "ruta" => "323",
                "denominacion" => "SANTIAGO DE MARIA -JUCUAPA - SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB324X0UN",
                "ruta" => "324",
                "denominacion" => "LA UNION - SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB325A0SM",
                "ruta" => "325-A",
                "denominacion" => "SAN MIGUEL-ULUAZAPA-CIRICUARIO-YUCUAIQUIN Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB325A1UN",
                "ruta" => "325-A",
                "denominacion" => "CANTON EL CARMEN-YUCUAIQUIN-ULUAZAPA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB325X0SM",
                "ruta" => "325",
                "denominacion" => "ULUAZAPA - SAN MIGUEL  Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB326A0SM",
                "ruta" => "326-A",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-PAPALONES Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB326C0SM",
                "ruta" => "326-C",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-GUATAJIAGUA-GUALABO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB326X0SM",
                "ruta" => "326",
                "denominacion" => "SAN MIGUEL-CHAPELTIQUE-GUATAJIAGUA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB327B0MO",
                "ruta" => "327-B",
                "denominacion" => "CANTON EL PEÑON-EL PITAL-SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB327X0MO",
                "ruta" => "327",
                "denominacion" => "CORINTO - SOCIEDAD - SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB328A0MO",
                "ruta" => "328-A",
                "denominacion" => "GOTERA-SOCIEDAD Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB328X0MO",
                "ruta" => "328",
                "denominacion" => "SAN MIGUEL-SAN FCO. GOTERA-OSICALA-PERQUIN Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB329X0CA",
                "ruta" => "329",
                "denominacion" => "SENSUNTEPEQUE-VILLA DOLORES-CANTON SAN CARLOS Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB330X0UN",
                "ruta" => "330",
                "denominacion" => "FRONTERA EL AMATILLO - SANTA ROSA DE LIMA - SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB331B1UN",
                "ruta" => "331-B",
                "denominacion" => "SAN MIGUEL -SAN ALEJO-CRIO. BARAHONA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.12
            ],
            [
                "codigo_ruta" => "AB331C0UN",
                "ruta" => "331-C",
                "denominacion" => "CRIO.LAS HUERTAS-COPALIO-SAN ALEJO-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB331X0UN",
                "ruta" => "331",
                "denominacion" => "BOLIVAR-SAN ALEJO-SAN MIGUEL Y VIC",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB332A0MO",
                "ruta" => "332-A",
                "denominacion" => "SAN MIGUEL-SAN FCO. GOTERA-SAN FERNANDO Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.77
            ],
            [
                "codigo_ruta" => "AB332B0MO",
                "ruta" => "332-B",
                "denominacion" => "SAN MIGUEL - GOTERA - PERQUIN - SABANETAS - FRONTERA CON HONDURAS Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB332C0MO",
                "ruta" => "332-C",
                "denominacion" => "SAN MIGUEL-SAN FCO. GOTERA-ARAMBALA-JOATECA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.77
            ],
            [
                "codigo_ruta" => "AB332D0MO",
                "ruta" => "332-D",
                "denominacion" => "JOCOAITIQUE-VILLA EL ROSARIO-GOTERA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.77
            ],
            [
                "codigo_ruta" => "AB332E0MO",
                "ruta" => "332-E",
                "denominacion" => "CANTON SAN DIEGO-TOROLA-PERQUIN-SAN FRANCISCO GOTERA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.77
            ],
            [
                "codigo_ruta" => "AB332F0MO",
                "ruta" => "332-F",
                "denominacion" => "FRONTERA PASA MONO-PERQUIN-SAN FCO. GOTERA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.55
            ],
            [
                "codigo_ruta" => "AB333A0SM",
                "ruta" => "333-A",
                "denominacion" => "SAN MIGUEL-JUCUAPA-SAN BUENAVENTURA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB333X0SM",
                "ruta" => "333",
                "denominacion" => "JUCUAPA - CHINAMECA -  SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB335X0US",
                "ruta" => "335",
                "denominacion" => "USULUTAN-SANTIAGO DE MARIA-JUCUAPA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB336X0UN",
                "ruta" => "336",
                "denominacion" => "LA UNION-GOASCORAN-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.81
            ],
            [
                "codigo_ruta" => "AB337A0MO",
                "ruta" => "337-A",
                "denominacion" => "GOTERA-LOLOTIQUILLO-CACAOPERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB337X0MO",
                "ruta" => "337",
                "denominacion" => "CACAOPERA-LOLOTIQUILLO-SAN FRANCISCO GOTERA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB338A0SM",
                "ruta" => "338-A",
                "denominacion" => "CANTON SAN LUIS-CHINAMECA-NUEVA GUADALUPE-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB338X0SM",
                "ruta" => "338",
                "denominacion" => "SAN MIGUEL-CHINAMECA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB339X0UN",
                "ruta" => "339",
                "denominacion" => "LA UNION-INTIPUCA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB340A0US",
                "ruta" => "340-A",
                "denominacion" => "HACIENDA DE JOCO-ESTANZUELAS-JUCUAPA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB340B0SM",
                "ruta" => "340-B",
                "denominacion" => "SAN MIGUEL-CHINAMECA-JUCUAPA-MERCEDES UMAÑA-ESTANZUELAS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB340X0US",
                "ruta" => "340",
                "denominacion" => "ESTANZUELAS-JUCUAPA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB341X0UN",
                "ruta" => "341",
                "denominacion" => "LA UNION-CANTON CERRO EL JIOTE Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB342A0UN",
                "ruta" => "342-A",
                "denominacion" => "SANTA ROSA-LOS HORCONES Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB342X0UN",
                "ruta" => "342",
                "denominacion" => "SANTA ROSA DE LIMA - PASAQUINA - LA UNION  Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB343X0UN",
                "ruta" => "343",
                "denominacion" => "SANTA ROSA DE LIMA-SAN MIGUEL-LA UNION Y VIC",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.44
            ],
            [
                "codigo_ruta" => "AB344X0UN",
                "ruta" => "344",
                "denominacion" => "SAN MIGUEL-LA UNION-NUEVA ESPARTA-POLOROS Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.44
            ],
            [
                "codigo_ruta" => "AB346D0UN",
                "ruta" => "346",
                "denominacion" => "FRONTERA EL AMATILLO - SANTA ROSA DE LIMA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC. (DIRECTO)",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "DIRECTO",
                "tarifa_autorizada" => 3.83
            ],
            [
                "codigo_ruta" => "AB346X0UN",
                "ruta" => "346",
                "denominacion" => "FRONTERA EL AMATILLO - SANTA ROSA DE LIMA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 3.19
            ],
            [
                "codigo_ruta" => "AB347X0US",
                "ruta" => "347",
                "denominacion" => "SAN AGUSTIN-JIQUILISCO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB348A0US",
                "ruta" => "348-A",
                "denominacion" => "USULUTAN-SANTIAGO DE MARIA-ALEGRIA-BERLIN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB348X0US",
                "ruta" => "348",
                "denominacion" => "BERLIN - MERCEDES UMAÑA - VILLA EL TRIUNFO - SANTIAGO DE MARIA - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.12
            ],
            [
                "codigo_ruta" => "AB349X0US",
                "ruta" => "349",
                "denominacion" => " VILLA EL TRIUNFO - SANTIAGO DE MARIA - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB350X0US",
                "ruta" => "350",
                "denominacion" => "CANTON EL LIMON - PUERTO PARADA - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.46
            ],
            [
                "codigo_ruta" => "AB351X0US",
                "ruta" => "351",
                "denominacion" => "USULUTAN-EL TRANSITO-EL ESPINO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB354X0US",
                "ruta" => "354",
                "denominacion" => "BERLIN-MERCEDES UMAÑA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.44
            ],
            [
                "codigo_ruta" => "AB355A0SM",
                "ruta" => "355-A",
                "denominacion" => "SAN MIGUEL-CANTON LOS LAURELES Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB355C0SM",
                "ruta" => "355-C",
                "denominacion" => "SAN MIGUEL-YUCUAIQUIN-CANTON SAN JUAN Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB355X0SM",
                "ruta" => "355",
                "denominacion" => "SAN MIGUEL-COMACARAN-YUCUAIQUIN Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB357A0US",
                "ruta" => "357-A",
                "denominacion" => "POTRERO DE JOCO-SANTIAGO DE MARIA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB357X0US",
                "ruta" => "357",
                "denominacion" => "USULUTAN-STGO DE MARIA-NVA GRANADA-LA PALOMILLA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB358A0US",
                "ruta" => "358-A",
                "denominacion" => "USULUTAN-CANTON CABAÑAS-EL JUTAL-JUCUARAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB358B0US",
                "ruta" => "358-B",
                "denominacion" => "JUCUARAN-SAMURIA-EL ESPINO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB358X0US",
                "ruta" => "358",
                "denominacion" => "USULUTAN-EL TRIUNFO-JUCUARAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB359A0US",
                "ruta" => "359-A",
                "denominacion" => "ESTANZUELAS-SANTIAGO DE MARIA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB359X0US",
                "ruta" => "359",
                "denominacion" => "CANTÓN EL POZON (CALIFORNIA) - SANTIAGO DE MARÍA - Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB362X0US",
                "ruta" => "362",
                "denominacion" => "USULUTAN-SANTIAGO DE MARIA-EL TRIUNFO-JUCUAPA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB363A0US",
                "ruta" => "363-A",
                "denominacion" => "PUERTO EL TRIUNFO-USULUTAN-EL TRANSITO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB363X0US",
                "ruta" => "363",
                "denominacion" => "SANTA ELENA - USULUTAN - JIQUILISCO - PUERTO EL TRIUNFO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB364A0UN",
                "ruta" => "364-A",
                "denominacion" => "CASERIO LOS RANCHOS-MINERAL LA LOLA-SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB365A0UN",
                "ruta" => "365-A",
                "denominacion" => "CRIO. LAS CUEVAS-CONCEPCION DE ORIENTE-EL SAUCE-STA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB365B0UN",
                "ruta" => "365-B",
                "denominacion" => "CTON.  EL RINCON-EL SAUCE-SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB365X0UN",
                "ruta" => "365",
                "denominacion" => "LA UNION-EL SAUCE-CONCEPCION DE ORIENTE Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB366X0US",
                "ruta" => "366",
                "denominacion" => "HACIENDA LA CARRERA-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB367A0SM",
                "ruta" => "367-A",
                "denominacion" => "SAN MIGUEL . LA ESTRECHURA-PUERTO VIEJO-LOS PAJARITOS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB367A1SM",
                "ruta" => "367-A",
                "denominacion" => "LA ESTECHURA - EL DELIRIO - SAN MIGUEL Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB367B0SM",
                "ruta" => "367-B",
                "denominacion" => "SAN MIGUEL-CANTON LA CEIBA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.66
            ],
            [
                "codigo_ruta" => "AB367X0SM",
                "ruta" => "367",
                "denominacion" => "SAN MIGUEL-CHILANGUERA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB368X0US",
                "ruta" => "368",
                "denominacion" => "JUCUAPA-SANTA ELENA-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB369B0SM",
                "ruta" => "369-B",
                "denominacion" => "SAN MIGUEL-EL TECOMATAL-CANTON EL PROGRESO Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.46
            ],
            [
                "codigo_ruta" => "AB369C0SM",
                "ruta" => "369-C",
                "denominacion" => "CASERIO EL CONSUELO-EL HAVILLAL-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB369X0SM",
                "ruta" => "369",
                "denominacion" => "SAN MIGUEL-EL HAVILLAL-EL TECOMATAL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.46
            ],
            [
                "codigo_ruta" => "AB370X0US",
                "ruta" => "370",
                "denominacion" => "USULUTAN-VILLA EL TRIUNFO-ESTANZUELAS Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB371A0US",
                "ruta" => "371-A",
                "denominacion" => "USULUTAN-EL TRANSITO-SAN JORGE-SAN JULIAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB371B0US",
                "ruta" => "371-B",
                "denominacion" => "USULUTAN -EL TRANSITO-SAN JORGE- LAS PLACITAS Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB371X0US",
                "ruta" => "371",
                "denominacion" => "USULUTAN- EL TRANSITO- SAN JORGE  Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB372X0US",
                "ruta" => "372",
                "denominacion" => "CNTON EL POZON-CALIFORNIA-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB373X0US",
                "ruta" => "373",
                "denominacion" => "USULUTAN-EL TRANSITO-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB374A0UN",
                "ruta" => "374-A",
                "denominacion" => "LISLIQUE-ANAMOROS-SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.31
            ],
            [
                "codigo_ruta" => "AB374X0UN",
                "ruta" => "374",
                "denominacion" => "LISLIQUE-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.31
            ],
            [
                "codigo_ruta" => "AB375A0UN",
                "ruta" => "375-A",
                "denominacion" => "LA UNION-CANTON YOLOGUAL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.49
            ],
            [
                "codigo_ruta" => "AB375B0UN",
                "ruta" => "375-B",
                "denominacion" => "LA UNION-CANTON EL FARO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB375X0UN",
                "ruta" => "375",
                "denominacion" => "AGUA ESCONDIDA - LA UNION  Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB377X0US",
                "ruta" => "377",
                "denominacion" => "PTO. EL TRIUNFO-USULUTAN-EL TRANSITO-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.81
            ],
            [
                "codigo_ruta" => "AB378A0US",
                "ruta" => "378-A",
                "denominacion" => "CEIBA DOBLADA-ISLA DE MENDEZ-SAN MARCOS LEMPA-JIQUILISCO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB382A0UN",
                "ruta" => "382-A",
                "denominacion" => "CANTON PIEDRA BLANCA-CONCHAGUA-LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB382B0UN",
                "ruta" => "382-B",
                "denominacion" => "CONCHAGUA - COLONIA BELEN - LA UNION  Y VIC",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "AB382X0UN",
                "ruta" => "382",
                "denominacion" => "LA UNION-CONCHAGUA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "AB383A0UN",
                "ruta" => "383-A",
                "denominacion" => "LA UNION-CASERIO EL CHORRO-CANTON LOS ANGELES Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB383X0UN",
                "ruta" => "383",
                "denominacion" => "EL TAMARINDO - EL EMBARCADERO - LAS TUNAS - LA UNION  Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB384A0SM",
                "ruta" => "384-A",
                "denominacion" => "SAN MIGUEL-OLOMEGA-EL ZAPOTAL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB384X0SM",
                "ruta" => "384",
                "denominacion" => "SAN MIGUEL-OLOMEGA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.88
            ],
            [
                "codigo_ruta" => "AB385X0UN",
                "ruta" => "385",
                "denominacion" => "EL TAMARINDO-INTIPUCA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB386X0MO",
                "ruta" => "386",
                "denominacion" => "SAN ISIDRO - SAN SIMON - OSICALA - GOTERA - SAN MIGUEL Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.77
            ],
            [
                "codigo_ruta" => "AB387X0MO",
                "ruta" => "387",
                "denominacion" => "OSICALA-SAN ISIDRO-CIUDAD BARRIOS Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB388X0SM",
                "ruta" => "388",
                "denominacion" => "EL PLATANAR-MONCAGUA-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB389A0SM",
                "ruta" => "389-A",
                "denominacion" => "SAN MIGUEL-SAN CARLOS-EL AMATE Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB389B0SM",
                "ruta" => "389-B",
                "denominacion" => "SAN MIGUEL-CANTON EL NIÑO-CASERIO LA CEIBA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB389X0SM",
                "ruta" => "389",
                "denominacion" => "SAN MIGUEL-CANTON LA PUERTA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB390A0UN",
                "ruta" => "390-A",
                "denominacion" => "CRIO UPIRE-MONTECA-POLOROS-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB390B0UN",
                "ruta" => "390-B",
                "denominacion" => "CASERIO LOS CARBONES - CONCEPCION DE ORIENTE - SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.51
            ],
            [
                "codigo_ruta" => "AB390X0UN",
                "ruta" => "390",
                "denominacion" => "MONTECA-POLOROS-NUEVA ESPARTA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB391A0UN",
                "ruta" => "391-A",
                "denominacion" => "CONCEPCION DE ORIENTE-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.91
            ],
            [
                "codigo_ruta" => "AB391B0UN",
                "ruta" => "391-B",
                "denominacion" => "BOQUIN-CANTON MALALAJA-SANTA ROSA DE LIMA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.70
            ],
            [
                "codigo_ruta" => "AB391C0UN",
                "ruta" => "391-C",
                "denominacion" => "CANTON GUALARES-EL SAUCE-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB391X0UN",
                "ruta" => "391",
                "denominacion" => "CANTON GUARIPE-SANTA ROSA-SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.54
            ],
            [
                "codigo_ruta" => "AB392X0SM",
                "ruta" => "392",
                "denominacion" => "SAN MIGUEL-BOLIVAR-SAN JOSE LA FUENTE Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB393A0UN",
                "ruta" => "393-A",
                "denominacion" => "SAN MIGUEL-SAN ALEJO-BOLIVAR-SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.31
            ],
            [
                "codigo_ruta" => "AB393B0UN",
                "ruta" => "393-B",
                "denominacion" => "SAN ALEJO  -BOLIVAR - SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB393X0UN",
                "ruta" => "393",
                "denominacion" => "SAN ALEJO - ( VIA MOGOTILLO )  - SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB394X0SM",
                "ruta" => "394",
                "denominacion" => "SAN MIGUEL-AGUA ZARCA-SAN JACINTO-SAN JUAN DE LA CRUZ Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB395A0SM",
                "ruta" => "395-A",
                "denominacion" => "SAN MIGUEL-ANCHICO-CANTON EL PASTOR-LAS LAJAS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB395B0SM",
                "ruta" => "395-B",
                "denominacion" => "SAN MIGUEL-SAN JERONIMO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB395X0SM",
                "ruta" => "395",
                "denominacion" => "SAN MIGUEL-ANCHICO-YAYANTIQUE-CENTENO. Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.81
            ],
            [
                "codigo_ruta" => "AB398X0US",
                "ruta" => "398",
                "denominacion" => "HDA. MECHOTIQUE - MERCEDES UMAÑA - SAN VICENTE Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB399X0MO",
                "ruta" => "399",
                "denominacion" => "OSICALA-SAN ISIDRO Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.96
            ],
            [
                "codigo_ruta" => "AB406X0AH",
                "ruta" => "406",
                "denominacion" => "PUENTE EL JOBO-AHUACHAPAN-SAN SALVADOR Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.10
            ],
            [
                "codigo_ruta" => "AB410A0MO",
                "ruta" => "410-A",
                "denominacion" => "GOTERA-SENSEMBRA-CANTON EL RODEO Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB410A1MO",
                "ruta" => "410-A",
                "denominacion" => "GOTERA-SENSEMBRA-CANTON EL LIMON-CANTON LA JOYA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB410X0MO",
                "ruta" => "410",
                "denominacion" => "GOTERA-GUATAJIAGUA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB411X0SV",
                "ruta" => "411",
                "denominacion" => "SAN ILDEFONSO - PANAMERICANA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB412X0SV",
                "ruta" => "412",
                "denominacion" => "SAN VICENTE-CANTON ACHICHILCO Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB413X0LP",
                "ruta" => "413",
                "denominacion" => "CANTON LAS HOJAS-COMALAPA -ZACATECOLUCA Y VIC. (VIA CALLE VIEJA)",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB414X0LP",
                "ruta" => "414",
                "denominacion" => "CANTON TAPALHUACA-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB417X0US",
                "ruta" => "417",
                "denominacion" => "USULUTAN - ZACATECOLUCA - SAN VICENTE Y VIC",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.34
            ],
            [
                "codigo_ruta" => "AB418X0UN",
                "ruta" => "418",
                "denominacion" => "CARIO PLAYITAS - LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.54
            ],
            [
                "codigo_ruta" => "AB420A0UN",
                "ruta" => "420-A",
                "denominacion" => "PIEDRAS BLANCAS- LA UNION-SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB420B0UN",
                "ruta" => "420-B",
                "denominacion" => "CANTON EL TABLON-PASAQUINA-SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB421A0UN",
                "ruta" => "421-A",
                "denominacion" => "LA UNION-CANTON LAS CHACHAS Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.94
            ],
            [
                "codigo_ruta" => "AB421B0UN",
                "ruta" => "421-B",
                "denominacion" => "LA UNION-CANTON SANTA CRUZ Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB421C0UN",
                "ruta" => "421-C",
                "denominacion" => "CANTON BOVADILLA-LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB421X0UN",
                "ruta" => "421",
                "denominacion" => "SAN ALEJO - VIA AGUA FRIA - LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB422X0UN",
                "ruta" => "422",
                "denominacion" => "LISLIQUE-EL TERRERO-GUAJINIQUIL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.15
            ],
            [
                "codigo_ruta" => "AB423X0CH",
                "ruta" => "423",
                "denominacion" => "LOS SITIOS ABAJO-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB426A0CU",
                "ruta" => "426-A",
                "denominacion" => "CANTON SAN FRANCISCO (SAN CRISTOBAL) - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB426X0CU",
                "ruta" => "426",
                "denominacion" => "CANTON SAN ANTONIO (CANDELARIA) - COJUTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB428X0SM",
                "ruta" => "428",
                "denominacion" => "CIUDAD BARRIOS - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.18
            ],
            [
                "codigo_ruta" => "AB429X0SO",
                "ruta" => "429",
                "denominacion" => "CTON. EL ZAPOTE-SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB430X0SO",
                "ruta" => "430",
                "denominacion" => "SONSONATE-SANTA CATARINA MASAHUAT Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB432X0SO",
                "ruta" => "432",
                "denominacion" => "CANTON LA ENCENADA - CALUCO - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB434X0SO",
                "ruta" => "434",
                "denominacion" => "CTON. ALEMAN - COL. MOLINA - SONSONATE  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB435X0SO",
                "ruta" => "435",
                "denominacion" => "SONSONATE-QUEZALTEPEQUE-APOPA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB436A0SO",
                "ruta" => "436-A",
                "denominacion" => "CTON. CUYAGUALO - IZALCO - SONSONATE  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB436X0SO",
                "ruta" => "436",
                "denominacion" => "SONSONATE-CTON. LOS TUNALMILES Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "AB438X0SO",
                "ruta" => "438",
                "denominacion" => "SONSONATE-ATEOS-JAYAQUE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB439X0SO",
                "ruta" => "439",
                "denominacion" => "SANTA ISABEL ISHUATAN- SONSONATE ( VIA SAN JULIAN ) Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB440X0SA",
                "ruta" => "440",
                "denominacion" => "METAPAN-CTON. SAN MIGUEL INGENIO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB441X0SA",
                "ruta" => "441",
                "denominacion" => "SANTA ANA-CASERIO LA ESTANCIA  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB442X0SM",
                "ruta" => "442",
                "denominacion" => "LOLOTIQUE - CHINAMECA - JUCUAPA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.18
            ],
            [
                "codigo_ruta" => "AB443X0SM",
                "ruta" => "443",
                "denominacion" => "NUEVO EDEN DE SAN JUAN-SAN GERARDO-EL TRIUNFO Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.18
            ],
            [
                "codigo_ruta" => "AB444X0SM",
                "ruta" => "444",
                "denominacion" => "EL TRIUNFO-SESORI-SAN LUIS DE LA REINA Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB445X0SM",
                "ruta" => "445",
                "denominacion" => "SAN MIGUEL-LOLOTIQUE Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB446X0UN",
                "ruta" => "446",
                "denominacion" => "LA UNION - INTIPUCA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 3.19
            ],
            [
                "codigo_ruta" => "AB447A0US",
                "ruta" => "447-A",
                "denominacion" => "SAN FRANCISCO JAVIER-JIQUILISCO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.48
            ],
            [
                "codigo_ruta" => "AB447X0US",
                "ruta" => "447",
                "denominacion" => "SAN FRANCISCO JAVIER-JIQUILISCO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB451X0SA",
                "ruta" => "451",
                "denominacion" => "CHALCHUAPA-CTON. LAS MERCEDES Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB452X0SA",
                "ruta" => "452",
                "denominacion" => "SANTA ANA-CANTON CASAS DE TEJAS-COMUNIDAD GARITA-BOCA DE LA MONTAÑA-CHILAMATES Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB453X0SA",
                "ruta" => "453",
                "denominacion" => "SANTA ANA-CTON. EL AMATILLO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.63
            ],
            [
                "codigo_ruta" => "AB454X0SA",
                "ruta" => "454",
                "denominacion" => "CHALCHUAPA-SAN JUAN CHIQUITO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB456A0AH",
                "ruta" => "456-A",
                "denominacion" => "ATIQUIZAYA-AUT. SANTA ANA-SAN SALVADOR Y VIC",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB456X0SA",
                "ruta" => "456",
                "denominacion" => "CHALCHUAPA-SAN SALVADOR Y VIC",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB457X0SA",
                "ruta" => "457",
                "denominacion" => "SANTA ANA - METAPAN-TERMINAL DE CHALATENANGO(CARRETERA LONGITUDINAL DEL NORTE) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.80
            ],
            [
                "codigo_ruta" => "AB463X0SA",
                "ruta" => "463",
                "denominacion" => "METAPAN-CITALA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.18
            ],
            [
                "codigo_ruta" => "AB467B0SA",
                "ruta" => "467-B",
                "denominacion" => "CHALCHUAPA-CTON. EL ZARAL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB467X0SA",
                "ruta" => "467",
                "denominacion" => "SANTA ANA-EL PORVENIR-CHALCHUAPA   Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB468X0SM",
                "ruta" => "468",
                "denominacion" => "SAN MIGUEL-CASERIO LA PELOTA Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB470X0SA",
                "ruta" => "470",
                "denominacion" => "METAPAN-MASAHUAT Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.67
            ],
            [
                "codigo_ruta" => "AB471A0UN",
                "ruta" => "471-A",
                "denominacion" => "CANTON LA QUESADILLA - LOMA LARGA - INTIPUCA - SAN MIGUEL Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB472X0AH",
                "ruta" => "472",
                "denominacion" => "AHUACHAPAN-CTON. TAHUAPA Y VIC",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB473X0UN",
                "ruta" => "473",
                "denominacion" => "LA UNION-CANTON EL PILON-MAQUIGUE-EL PORTILLO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB474X0UN",
                "ruta" => "474",
                "denominacion" => "LA UNION - EL PICHE - EL COYOLITO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.86
            ],
            [
                "codigo_ruta" => "AB475X0UN",
                "ruta" => "475",
                "denominacion" => "LA UNION-AGUA CALIENTE Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.94
            ],
            [
                "codigo_ruta" => "AB476X0UN",
                "ruta" => "476",
                "denominacion" => "CANTON EL ZAPOTE - CONCEPCION DE ORIENTE - EL SAUCE - SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB477X0UN",
                "ruta" => "477",
                "denominacion" => "CASERIO TROMPINA-SAN SEBASTIAN-SANTA ROSA DE LIMA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "AB478A0UN",
                "ruta" => "478-A",
                "denominacion" => "CANTON EL CHAHUITE-SAN JOSE LA FUENTE-BOLIVAR-SANTA ROSA  Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB478B0UN",
                "ruta" => "478-B",
                "denominacion" => "SAN JOSE -EL CHAG\\ITE-PASAQUINA-SANTA ROSA-BOLIVAR-SAN JOSE Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB478X0UN",
                "ruta" => "478",
                "denominacion" => "SAN JOSE LA FUENTE-BOLIVAR-SANTA ROSA-LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.24
            ],
            [
                "codigo_ruta" => "AB479X0US",
                "ruta" => "479",
                "denominacion" => "CANTON LA PALOMIA-NUEVA GRANADA-JUCUAPA-SAN MIGUEL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB481A0CA",
                "ruta" => "481-A",
                "denominacion" => " SENSUNTEPEQUE  CANTON SAN LORENZO Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB481X0CA",
                "ruta" => "481",
                "denominacion" => "SANTA MARTA - CIUDAD VICTORIA - SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB482X0CA",
                "ruta" => "482",
                "denominacion" => "ILOBASCO-TEJUTEPEQUE-CINQUERA-SUCHITOTO Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB483X0LL",
                "ruta" => "483",
                "denominacion" => "TAMANIQUE (TAMANIQUE) - 17º AV. SUR (SAN SALVADOR) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB485X0UN",
                "ruta" => "485",
                "denominacion" => "CASERIO MUNGUIA-CANTON GUERIPE-SANTA ROSA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.51
            ],
            [
                "codigo_ruta" => "AB486X0CA",
                "ruta" => "486",
                "denominacion" => "SENSUNTEPEQUE-CD. DOLORES-NVO. EDEN-LA SUNCUYA Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB487X0UN",
                "ruta" => "487",
                "denominacion" => "CANTON EL CACAO-LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB488X0US",
                "ruta" => "488",
                "denominacion" => "USULUTAN-OZATLAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB489A0CH",
                "ruta" => "489-A",
                "denominacion" => "CANTON POTRERO SULA-NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB489A1CH",
                "ruta" => "489-A",
                "denominacion" => "CANTON EL BADO (NUEVA CONCEPCION)-NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.01
            ],
            [
                "codigo_ruta" => "AB489X0CH",
                "ruta" => "489",
                "denominacion" => "NUEVA CONCEPCION - CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB490X0SO",
                "ruta" => "490",
                "denominacion" => "SONSONATE-CTON. EL SALAMO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB491A0UN",
                "ruta" => "491-A",
                "denominacion" => "SANTA ROSA DE LIMA-MONTECA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB491X0UN",
                "ruta" => "491",
                "denominacion" => "SANTA ROSA-ANAMOROS-POLOROS Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB495A0LP",
                "ruta" => "495-A",
                "denominacion" => "LA PUNTILLA, COSTA DEL SOL-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB495X0LP",
                "ruta" => "495",
                "denominacion" => "SAN SALVADOR-COSTA DEL SOL (LA BOCANA) Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB496X0SA",
                "ruta" => "496",
                "denominacion" => "SANTA ROSA GUACHIPILIN - METAPAN Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB498X0SA",
                "ruta" => "498",
                "denominacion" => "SAN CRISTOBAL DE LA FRONTERA-SAN SALVADOR Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.46
            ],
            [
                "codigo_ruta" => "AB499X0SV",
                "ruta" => "499",
                "denominacion" => "APASTEPEQUE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB500X0LP",
                "ruta" => "500",
                "denominacion" => "CANTON VERACRUZ (JERUSALEM) - COJUTEPEQUE Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB500X1LP",
                "ruta" => "500",
                "denominacion" => "CANTON CONCEPCION-MERCEDES LA CEIBA - COJUTEPEQUE Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB501A0SV",
                "ruta" => "501-A",
                "denominacion" => "NUEVO TEPETITAN - VERAPAZ - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.12
            ],
            [
                "codigo_ruta" => "AB501X0SV",
                "ruta" => "501",
                "denominacion" => "GUADALUPE - VERAPAZ - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.12
            ],
            [
                "codigo_ruta" => "AB502X0CU",
                "ruta" => "502",
                "denominacion" => "COJUTEPEQUE-TENANCINGO Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "AB504X0AH",
                "ruta" => "504",
                "denominacion" => "AHUACHAPAN-CTON. RIO FRIO-LA COYOTERA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB505X0LP",
                "ruta" => "505",
                "denominacion" => "ZACATECOLUCA-SAN JUAN TEPEZONTES Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB506X0SM",
                "ruta" => "506",
                "denominacion" => "SAN MIGUEL-CTON. NOMBRE DE JESUS-SAN ANTONIO CHAVEZ Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "AB507A0CA",
                "ruta" => "507-A",
                "denominacion" => "CERRON GRANDE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB507A1CH",
                "ruta" => "507-A",
                "denominacion" => "SAN ANTONIO DE LA CRUZ (CHALATENANGO)-ILOBASCO (CABAÑAS) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB507C0CA",
                "ruta" => "507-C",
                "denominacion" => "ILOBASCO-NOMBRE DE JESUS Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.91
            ],
            [
                "codigo_ruta" => "AB507E0CA",
                "ruta" => "507-E",
                "denominacion" => "ILOBASCO (ILOBASCO)-PEÑA BLANCA (ILOBASCO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB507X0CH",
                "ruta" => "507",
                "denominacion" => "POTRERIOS-ILOBASCO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.04
            ],
            [
                "codigo_ruta" => "AB508A0CH",
                "ruta" => "508-A",
                "denominacion" => "SAN ANTONIO LOS RANCHOS - CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB508X0CH",
                "ruta" => "508",
                "denominacion" => "ARCATAO - CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.77
            ],
            [
                "codigo_ruta" => "AB509A0CH",
                "ruta" => "509-A",
                "denominacion" => "LA PALMA - CANTON MIRAMUNDO-LOS PLANES Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.75
            ],
            [
                "codigo_ruta" => "AB509X0CH",
                "ruta" => "509",
                "denominacion" => "SAN IGNACIO-SANTA ROSA-RIO CHIQUITO-LAS PILAS-EL CENTRO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.52
            ],
            [
                "codigo_ruta" => "AB510A0CU",
                "ruta" => "510-A",
                "denominacion" => "SAN RAMON - CARRETERA PANAMERICANA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB510X0CU",
                "ruta" => "510",
                "denominacion" => "SAN RAMON - COJUTEPEQUE  Y  VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.22
            ],
            [
                "codigo_ruta" => "AB511X0SV",
                "ruta" => "511",
                "denominacion" => "TECOLUCA - SAN VICENTE - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB512X0LP",
                "ruta" => "512",
                "denominacion" => "SANTA MARIA OSTUMA - ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB513A0SV",
                "ruta" => "513-A",
                "denominacion" => "TECOLUCA-ZACATECOLUCA-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB514X0LP",
                "ruta" => "514",
                "denominacion" => "PARAISO DE OSORIO - SAN EMIGDIO - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.82
            ],
            [
                "codigo_ruta" => "AB515A0CU",
                "ruta" => "515-A",
                "denominacion" => "CANTON SOLEDAD (MONTE SAN JUAN) - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.40
            ],
            [
                "codigo_ruta" => "AB515X0CU",
                "ruta" => "515",
                "denominacion" => "CARRETERA A ILOBASCO DSVIO, CHEPE ABARCA - SAN RAFAEL CEDROS - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB515X1CU",
                "ruta" => "515",
                "denominacion" => "CANTON EL CARMEN - CANDELARIA -COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.30
            ],
            [
                "codigo_ruta" => "AB516X0CU",
                "ruta" => "516",
                "denominacion" => "CANTON  CUJUAPA - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "AB517A0CU",
                "ruta" => "517-A",
                "denominacion" => "CANTON SAN ANTONIO-CANTON EL CARMEN-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB517X0CU",
                "ruta" => "517",
                "denominacion" => "CANTON SAN ANTONIO-CANDELARIA-COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.39
            ],
            [
                "codigo_ruta" => "AB518X0CA",
                "ruta" => "518",
                "denominacion" => "JUTIAPA - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB519X0SA",
                "ruta" => "519",
                "denominacion" => "SAN JUAN LAS MINAS-METAPAN Y VIC",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.54
            ],
            [
                "codigo_ruta" => "AB521A0LP",
                "ruta" => "521-A",
                "denominacion" => "SAN ANTONIO MASAHUAT-SAN PEDRO MASAHUAT- ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB521X0LP",
                "ruta" => "521",
                "denominacion" => "SAN ANTONIO MASAHUAT-ROSARIO DE LA PAZ Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.47
            ],
            [
                "codigo_ruta" => "AB522X0CU",
                "ruta" => "522",
                "denominacion" => "CANTON BUENA VISTA- BOULEVARD DEL EJÉRCITO NACIONAL- AVENIDA EL MATAZANO (S.S) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB523X0SM",
                "ruta" => "523",
                "denominacion" => "SAN ANTONIO EL MOSCO-CIUDAD BARRIOS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB524X0CU",
                "ruta" => "524",
                "denominacion" => "CANTON TECOLUCO (SAN PEDRO PERULAPAN) - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB525X0UN",
                "ruta" => "525",
                "denominacion" => "CANTON EL TAMARINDO - CASERIO VALLE NUEVO -  HATO NUEVO . LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB526X0UN",
                "ruta" => "526",
                "denominacion" => "LA UNION-CANTON BENAVIDES Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "AB527X0SA",
                "ruta" => "527",
                "denominacion" => "MONTE VERDE - SANTA ANA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.53
            ],
            [
                "codigo_ruta" => "AB528X0UN",
                "ruta" => "528",
                "denominacion" => "SANTA ROSA DE LIMA-EL AMATILLO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.40
            ],
            [
                "codigo_ruta" => "AB529X0CA",
                "ruta" => "529",
                "denominacion" => "SENSUNTEPEQUE-ILOBASCO Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB530X0CA",
                "ruta" => "530",
                "denominacion" => "ILOBASCO (ILOBASCO) - SAN VICENTE (SAN VICENTE) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB531X0CA",
                "ruta" => "531",
                "denominacion" => "SENSUNTEPEQUE-VILLA DOLORES Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB533X0CU",
                "ruta" => "533",
                "denominacion" => "COLONIA LAS MERCEDES (SAN RAFAEL CEDROS) - TERMINAL  PLAZA AMANECER (SOYAPANGO) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB537X0UN",
                "ruta" => "537",
                "denominacion" => "SANTA ROSA-LOS CAMOTES-CANTON VALLE NUEVO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.81
            ],
            [
                "codigo_ruta" => "AB539X0CH",
                "ruta" => "539",
                "denominacion" => "CANTON SAN JOSE LAS MESITAS - CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "AB540X0LL",
                "ruta" => "540",
                "denominacion" => "PUERTO DE LA LIBERTAD-ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB541A0LL",
                "ruta" => "541-A",
                "denominacion" => "QUEZALTEPEQUE-DESVIO SAN JUAN OPICO-LAS MORAS Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB542A0CH",
                "ruta" => "542-A",
                "denominacion" => "SAN LUIS DEL CARMEN - CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB542C0CH",
                "ruta" => "542-C",
                "denominacion" => "CARRIZAL-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.17
            ],
            [
                "codigo_ruta" => "AB542D0CH",
                "ruta" => "542-D",
                "denominacion" => "CHALATENANGO  (CHALATENANGO)-SAN MIGUEL DE MERCEDES (CHALATENANGO) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB542E0CH",
                "ruta" => "542-E",
                "denominacion" => "CHALATENANGO-CANTON OJOS DE AGUA Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.30
            ],
            [
                "codigo_ruta" => "AB542X0CH",
                "ruta" => "542",
                "denominacion" => "CANCASQUE-POTONICO-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB577A0CU",
                "ruta" => "577-A",
                "denominacion" => "CANTON OJO DE AGUA - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB600X0CA",
                "ruta" => "600",
                "denominacion" => "JUTIAPA  - ILOBASCO Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB601X0CA",
                "ruta" => "601",
                "denominacion" => "CTON. SAN FCO. DEL MONTE (ILOBASCO)-ILOBASCO (ILOBASCO) Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB602X0CA",
                "ruta" => "602",
                "denominacion" => "CANTON SAN JOSE CALERA-CANTON LAS HUERTAS-ILOBASCO Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.85
            ],
            [
                "codigo_ruta" => "AB604X0CA",
                "ruta" => "604",
                "denominacion" => "CANTON CUYANTEPEQUE-EL ZAPOTE-POZUELAS-SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB615X0CH",
                "ruta" => "615",
                "denominacion" => "CTON. GUACHIPILIN-COMALAPA-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB616X0CH",
                "ruta" => "616",
                "denominacion" => "NUEVA CONCEPCION-CANTON SUNAPA-EL MATAZANO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB617X0CH",
                "ruta" => "617",
                "denominacion" => "CTON. PALO GALAN-STA ROSA GUACHIPILIN- N. CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.18
            ],
            [
                "codigo_ruta" => "AB619X0CH",
                "ruta" => "619",
                "denominacion" => "CANTON SANTA ROSA(AGUA CALIENTE)-NUEVA CONCEPCION (NVA.CONCEPCION ) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB622X0CH",
                "ruta" => "622",
                "denominacion" => "COLONIA LAS BRISAS-NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "AB624X0CH",
                "ruta" => "624",
                "denominacion" => "CTON UPATORO - CHALATENANGO - CAS.LA SIERPE - PLAN DE LAS MESAS Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB625X0CH",
                "ruta" => "625",
                "denominacion" => "NUEVA CONCEPCION-SANTA ROSA GUACHIPILIN-METAPAN Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 2.04
            ],
            [
                "codigo_ruta" => "AB626X0CH",
                "ruta" => "626",
                "denominacion" => "TEJUTLA (TEJUTLA) - CHALATENANGO (CHALATENANGO) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB628X0CH",
                "ruta" => "628",
                "denominacion" => "CHALATENANGO (CHALATENANGO)-SANTA RITA (SANTA RITA) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB630X0CU",
                "ruta" => "630",
                "denominacion" => "CANTON SAN ANTONIO ( SAN CRISTOBAL ) . COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB632X0CH",
                "ruta" => "632",
                "denominacion" => "CANTON LAGUNA SECA- NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "AB633X0CH",
                "ruta" => "633",
                "denominacion" => "CANTON SANTA RITA  CIMARRON -AGUA CALIENTE - NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.25
            ],
            [
                "codigo_ruta" => "AB633X0CU",
                "ruta" => "633",
                "denominacion" => "CANTON COPAPAYO - SUCHITOTO Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB634X0CH",
                "ruta" => "634",
                "denominacion" => "CASERIO LAS AMACAS-TEPEAGUA-(CANTON SANTA ROSA)-NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.75
            ],
            [
                "codigo_ruta" => "AB635X0CH",
                "ruta" => "635",
                "denominacion" => "CANTON CHILAMATE- NUEVA CONCEPCION Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.75
            ],
            [
                "codigo_ruta" => "AB636X0CH",
                "ruta" => "636",
                "denominacion" => "CASERIO ZAMORA - CANTON POTRERO SULA - NUEVA CONCEPCIÓN Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB637X0CU",
                "ruta" => "637",
                "denominacion" => "CASERIO MARTIN GARCIA - EL CARRIZAL - COJUTEPEQUE Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "AB639X0CH",
                "ruta" => "639",
                "denominacion" => "CASERIO PLAZUELA - HACIENDA VIEJA(NOMBRE DE JESUS) - CHALATENANGO  VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.50
            ],
            [
                "codigo_ruta" => "AB647X0LL",
                "ruta" => "647",
                "denominacion" => "CANTON EL LIMON - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB663X0LP",
                "ruta" => "663",
                "denominacion" => "CANTON SAN FELIPE (SAN LUIS LA HERRADURA)-ZACATECOLUCA(ZACATECOLUCA)Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB664X0LL",
                "ruta" => "664",
                "denominacion" => "CASERIO LOS PILASTRONES (ZAPOTITAN) CANTON LA REFORMA-CIUDAD ARCE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "AB674X0LL",
                "ruta" => "674",
                "denominacion" => "TAMANIQUE (VIA CUMBRE) - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB675X0SV",
                "ruta" => "675",
                "denominacion" => "CTON. SAN FRANCISCO-SAN ESTEBAN CATARINA-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "AB677X0SV",
                "ruta" => "677",
                "denominacion" => "COMUNIDAD GUAJOYO-ZACATECOLUCA Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "AB679X0SV",
                "ruta" => "679",
                "denominacion" => "SAN VICENTE - CANTON LAS CANOAS  Y  VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.45
            ],
            [
                "codigo_ruta" => "AB680X0SV",
                "ruta" => "680",
                "denominacion" => "CANTON SAN FRANCISCO-AGUA AGRIA-VERAPAZ-SAN VICENTE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB700X0UN",
                "ruta" => "700",
                "denominacion" => "CANTON MALALAJA-EL SAUCE-SANTA ROSA Y VIC",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.39
            ],
            [
                "codigo_ruta" => "AB707X0UN",
                "ruta" => "707",
                "denominacion" => "CANTON EL JICARO-LA UNION Y VIC",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "AB726X0MO",
                "ruta" => "726",
                "denominacion" => "CANTON SUNSULACA - SAN FRANCISCO GOTERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB727X0MO",
                "ruta" => "727",
                "denominacion" => "SAN FRANCISCO GOTERA-GUALINDO ARRIBA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB728X0MO",
                "ruta" => "728",
                "denominacion" => "CORINTO-AGUA BLANCA-ANAMOROS Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.67
            ],
            [
                "codigo_ruta" => "AB729X0MO",
                "ruta" => "729",
                "denominacion" => "CORINTO-CACAOPERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.08
            ],
            [
                "codigo_ruta" => "AB733X0MO",
                "ruta" => "733",
                "denominacion" => "CANTON LOS LOPEZ - COLONIA GRACIAS A DIOS - COL. MORAZAN GOTERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB734X0MO",
                "ruta" => "734",
                "denominacion" => "SAN FRANCISCO GOTERA-YAMABAL-SAN JUAN DE LA CRUZ Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "AB737X0MO",
                "ruta" => "737",
                "denominacion" => "CANTON JOYA EL MATAZANO-CANTON PIEDRA PARADA - CHILANGA - SAN FRANCISCO GOTERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.97
            ],
            [
                "codigo_ruta" => "AB738X0MO",
                "ruta" => "738",
                "denominacion" => "JOCORO-CANTON GUACHIPILIN Y VIC",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB750X0SM",
                "ruta" => "750",
                "denominacion" => "CANTON JUAN YANES  - CASERIO LAS CASITA - SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB751X0SM",
                "ruta" => "751",
                "denominacion" => "SANTA BARBARA-TANGOLONA-MONCAGUA-SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB753X0SM",
                "ruta" => "753",
                "denominacion" => "SAN MIGUEL-CANTON LAS DELICIAS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.60
            ],
            [
                "codigo_ruta" => "AB756X0SM",
                "ruta" => "756",
                "denominacion" => "CASERIO LAS PALANCAS - SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "AB776X0US",
                "ruta" => "776",
                "denominacion" => "CASERIO EL MORA- CANTON LAS POZAS - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.29
            ],
            [
                "codigo_ruta" => "AB781X0US",
                "ruta" => "781",
                "denominacion" => "CANTON EL TECOMATAL-EL CONDADILLO-MERCEDES UMAÑA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB782X0US",
                "ruta" => "782",
                "denominacion" => "EL TRIUNFO-NUEVA GRANADA-CANTON LA PALOMILLA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "AB784X0US",
                "ruta" => "784",
                "denominacion" => "CANTON CERRO EL NANZAL - EL OJUSTE -CENTRO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB785X0US",
                "ruta" => "785",
                "denominacion" => "CANTON ANCHILA-HACIENDA NUEVA-EL TRANSITO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.45
            ],
            [
                "codigo_ruta" => "AB786X0US",
                "ruta" => "786",
                "denominacion" => "CTON. EL UJUSHTE-CENTRO-USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB787X0US",
                "ruta" => "787",
                "denominacion" => "BERLIN-CANTON LOMA ALTA-CANTON LAS DELICIAS Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.20
            ],
            [
                "codigo_ruta" => "AB788X0US",
                "ruta" => "788",
                "denominacion" => "USULUTAN-CENTRO-CANTON EL CERRITO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "AB789X0US",
                "ruta" => "789",
                "denominacion" => "CASERIO LLANO DEL CHILAMATE ABAJO - JUCUAPA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "AB790X0US",
                "ruta" => "790",
                "denominacion" => "JUCUAPA - CASERIO EL CHILAMATE ARRIBA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "AB800X0SO",
                "ruta" => "800",
                "denominacion" => "SANTA ISABEL - ISHUATAN -  SAN  JULIAN Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "AB802X0SA",
                "ruta" => "802",
                "denominacion" => "METAPAN-CTON. LA JOYA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.70
            ],
            [
                "codigo_ruta" => "AB806X0SA",
                "ruta" => "806",
                "denominacion" => "CHALCHUAPA-LOT.SANTA MARTA-TALCHIPEGUA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.41
            ],
            [
                "codigo_ruta" => "AB811X0SA",
                "ruta" => "811",
                "denominacion" => "CASERIO LAS ALMOHADAS (MASAHUAT)-DESVIO CARRETERA CA-12 (METAPAN) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR AUTOBUS",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.90
            ],
            [
                "codigo_ruta" => "MB000A1LP",
                "ruta" => "0-A",
                "denominacion" => "SAN SALVADOR-OLOCUILTA-CUYULTITAN Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "MB000A2LP",
                "ruta" => "0-A",
                "denominacion" => "COLONIA MONTELIMAR-SAN  SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "MB000A3LP",
                "ruta" => "0-A",
                "denominacion" => "ZONAS FRANCAS MIRAMAR  E INTERNACIONAL-SAN  SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "MB001LL0",
                "ruta" => "1-LL0",
                "denominacion" => "COL. LA SABANA - PLAZA MERLIOT - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001LL1",
                "ruta" => "1-LL1",
                "denominacion" => "COL. LA SABANA - VIA SHELL - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0AH",
                "ruta" => "1",
                "denominacion" => "AHUACHAPAN-COOPERATIVA SAN RAYMUNDO   Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0CH",
                "ruta" => "1",
                "denominacion" => "DESVIO DE AMAYO - TEJUTLA",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0CU",
                "ruta" => "1",
                "denominacion" => "COJUTEPEQUE (CUSCATLAN)-CANTON ANIMAS (SAN VICENTE) Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB001X0MO",
                "ruta" => "1",
                "denominacion" => "CASERIO LOS ROMERO-COL. MORAZAN-CENTRO-CTON. BARBA ROJA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0SA",
                "ruta" => "1",
                "denominacion" => "COL. LAMATEPEC-COL. SANTA MARIA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0SV",
                "ruta" => "1",
                "denominacion" => "SAN SEBASTIAN-STO. DOMINGO-COJUTEPEQUE Y VIC.",
                "id_departamento" => "San Vicente",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB001X0UN",
                "ruta" => "1",
                "denominacion" => "CASERIO PUNTA JOCOTE-COL. SANTA ROSA-LA UNION Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X0US",
                "ruta" => "1",
                "denominacion" => "RESD.LAS VERANERAS-CENTRO-COL. PARRAS Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X1CA",
                "ruta" => "1",
                "denominacion" => "SAN ISIDRO -  SENSUNTEPEQUE  Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB001X2CA",
                "ruta" => "1",
                "denominacion" => "DESVIO CERRO EL TORO Y CALLE GUISCOYOL-CANTON LOS LLANITOS-COLONIA LAS BRISAS Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X3CA",
                "ruta" => "1",
                "denominacion" => "GUACOTECTI-SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X4CA",
                "ruta" => "1",
                "denominacion" => "COLONIA QUINTEROS - HOSPITAL Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X5CA",
                "ruta" => "1",
                "denominacion" => "COLONIA  EL MILAGRO, CEMENTERIO-COLONIA CALIFORNIA Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X7CA",
                "ruta" => "1",
                "denominacion" => "CASERIO SANTA LUCIA - SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "MB001X8CA",
                "ruta" => "1",
                "denominacion" => "CASERIO EL CUCHINQUE - VALLE ENCANTADO-SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB001X9CA",
                "ruta" => "1",
                "denominacion" => "VICTORIA - SENSUNTEPEQUE Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB002X0AH",
                "ruta" => "2",
                "denominacion" => "AHUACHAPAN-TURIN-CTON. MONTAÑITA-BARRIANCONA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0CA",
                "ruta" => "2",
                "denominacion" => "CANTON SAN MATIAS- SAN LORENZO- SENSUNTEPEQUE  Y VIC.",
                "id_departamento" => "Cabañas",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0CH",
                "ruta" => "2",
                "denominacion" => "CANTON EL SALITRE-LA REINA (CHALATENANGO) Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0LL",
                "ruta" => "2",
                "denominacion" => "CANTON EL ESPINO (ANTIGUO CUSCATLAN) - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0MO",
                "ruta" => "2",
                "denominacion" => "COL. SANTA BRIGIDA-CENTRO-CANTON SAN JOSE Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0SA",
                "ruta" => "2",
                "denominacion" => "COL. LAS COCINAS - METROCENTRO ( 6º AV. SUR ) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0SM",
                "ruta" => "2",
                "denominacion" => "PRADOS DE SAN MIGUEL - SANTA EMILIA - CENTRO - CHAPARRASTIQUE Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0SO",
                "ruta" => "2",
                "denominacion" => "COL. LA PONDEROSA - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0UN",
                "ruta" => "2",
                "denominacion" => "COL. SANTA MARIA NO. 2-CENTRO-TURICENTRO MORENO-CTON LA CHORRERA Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB002X0US",
                "ruta" => "2",
                "denominacion" => "CANTON EL TRILLO - COL. EL PARAISO - USULUTAN.Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0",
                "ruta" => "3",
                "denominacion" => "COL. SIERRA MORENA (SOYAPANGO)- 1ª C. PTE. - 23° AV. NTE. (S.S) Y VIC.-",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0AH",
                "ruta" => "3",
                "denominacion" => "AHUACHAPAN-CTON. SANTA ROSA ACACALCO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0LL",
                "ruta" => "3",
                "denominacion" => "EL POLIEDRO (LOURDES COLON)-UNICENTRO-CIUDAD MUJER-ARMENIA  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB003X0LP",
                "ruta" => "3",
                "denominacion" => "COL. EL MANUNE-ZACATECOLUCA Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0SA",
                "ruta" => "3",
                "denominacion" => "COL. COPINOLITO-COL.GUERRA-CENTRO-COL. SAN IGNACIO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0SM",
                "ruta" => "3",
                "denominacion" => "COL. VIA SATELITE-HOSPITAL - CENTRO COL. LAS UNIDAS - PRADOS Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0SO",
                "ruta" => "3",
                "denominacion" => "COL. EL CARMEN-CENTRO Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0UN",
                "ruta" => "3",
                "denominacion" => "EL COYOLITO- LA QUESADILLA- SALALAGUA- LOS CONEJOS- EL PICHE-LOS CORTEZ- EL AMATILLO Y VIC.",
                "id_departamento" => "La Unión",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X0US",
                "ruta" => "3",
                "denominacion" => "CANTON LA PREZA - TERMINAL ( USULUTAN )  Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X1LL",
                "ruta" => "3",
                "denominacion" => "RESIDENCIAL CAMPOS VERDES (LOURDES COLON)-UNICENTRO (LOURDES COLON) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X1LP",
                "ruta" => "3",
                "denominacion" => "COLONIA SAN CARLOS-LOTIFICACION SAN RAFAEL (ZACATECOLUCA) Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X2LL",
                "ruta" => "3",
                "denominacion" => "POLIEDRO(LOURDES COLON) -UNICENTRO- VILLA LOURDES - CAMPOS VDES 2 Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB003X3LL",
                "ruta" => "3",
                "denominacion" => "URB NUEVO LOURDES (LOURDES COLON)-UNICENTRO-URB. LAS MORAS (LOURDES COLON) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004A0",
                "ruta" => "4-A",
                "denominacion" => "COL. LAS COLINAS (CIUDAD  DELGADO)-1ª CALLE PTE Y 23 AV. NTE (S.S.) Y VIC",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004T0",
                "ruta" => "4-T",
                "denominacion" => "COL. GUARDADO ( CDAD. DELGADO ) TNAL DE OCCIDENTE ( SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0",
                "ruta" => "4",
                "denominacion" => "COL.LAS COLINAS(CIUDAD DELGADO)-TERMINAL DE OCCIDENTE(SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0AH",
                "ruta" => "4",
                "denominacion" => "CASERIO LOS BUENOS - CANTON LOS MAGUEYES - AHUACHAPAN",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0LL",
                "ruta" => "4",
                "denominacion" => "LAS MORITAS - COBANAL - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB004X0LP",
                "ruta" => "4",
                "denominacion" => "CANTON LA PALMA CRUZADILLA - HOSPITAL ZACATECOLUCA - Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0SA",
                "ruta" => "4",
                "denominacion" => "COL. SAN JOSE-CENTRO-COL. AVILES Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0SM",
                "ruta" => "4",
                "denominacion" => "CIUDAD TOLEDO-MOLINO-CENTRO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0SO",
                "ruta" => "4",
                "denominacion" => "CANTON TALCOMUNCA (IZALCO) - SONSONATE Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X0US",
                "ruta" => "4",
                "denominacion" => "CA-2 REDONDEL BY PASS-(CANTON LA PRESA)-CENTRO-DESVIO EL OBRAJUELO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB004X1LL",
                "ruta" => "4",
                "denominacion" => "RESIDENCIAL LOS CHORROS-NUEVA SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB005X0",
                "ruta" => "5",
                "denominacion" => "COL. LA CIMA - 8 AV.SUR A NIVEL DEL  PARQUEO DE LA IGLESIA DEL ROSARIO (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0AH",
                "ruta" => "5",
                "denominacion" => "COL. LAS PALMERAS-AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0LP",
                "ruta" => "5",
                "denominacion" => "COL. ESPERANZA-CTRO.-HOSPITAL-COL. ANABELLA- PENITENTE AUTOPISTA A S.S. HACIENDA SAN RAFAEL Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0SA",
                "ruta" => "5",
                "denominacion" => "COLONIA CEL (CANTON NATIVIDAD) - CENTRO - COL. PANADES Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0SM",
                "ruta" => "5",
                "denominacion" => "COL. LA PRESITA-CENTRO-COL. SAN FRANCISCO-CIUDAD TOLEDO Y VIC",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0SO",
                "ruta" => "5",
                "denominacion" => "CASERIO EL FLOR - SONSONATE  Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB005X0US",
                "ruta" => "5",
                "denominacion" => "CANTON LA CRUZ  -BUENA VISTA - CENTRO - SANTA CLARA Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB006A0",
                "ruta" => "6-A",
                "denominacion" => "MTE.CMLO(CUSC)PQUE.CDLARIA.(S.S)LIRIOS D.NTE(CUSC)PQUE.CDLARIA.(S.S)ANI. Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "MB006CF0",
                "ruta" => "6-CF",
                "denominacion" => "CDAD FTRA (CUSCATANCINGO)-ALDA J.P. II Y DIANAL UNIVERSIT.(SN SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "MB006VH0",
                "ruta" => "6-V",
                "denominacion" => "COL.V.HMSA.(CCTNGO)-ALDA J.P.II Y DNAL.UNIVERSIT.(SN SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.27
            ],
            [
                "codigo_ruta" => "MB006X0AH",
                "ruta" => "6",
                "denominacion" => "AHUACHAPAN-ASENTAMIENTO NUEVO AMANECER Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB006X0SA",
                "ruta" => "6",
                "denominacion" => "COL. LOMAS DEL TECANA-COL. SAN MAURICIO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB006X0SM",
                "ruta" => "6",
                "denominacion" => "COL. MILAGRO DE LA PAZ-CENTRO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB006X0SO",
                "ruta" => "6",
                "denominacion" => "SONSONATE-JUJUTLA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB006X0US",
                "ruta" => "6",
                "denominacion" => "CA-2 REDONDEL BY PASS(CTON LA PRESA)-CENTRO-DESVIO EL OBRAJUELO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007A0",
                "ruta" => "7-A",
                "denominacion" => "RTO. LOS SANTOS III (SOYAPANGO)- 33° AV. NTE. -ALAM. JP II (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0AH",
                "ruta" => "7",
                "denominacion" => "CTON.   EL BARRO-AHUACHAPAN-CLUB CAMPESTRE Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0AH",
                "ruta" => "7",
                "denominacion" => "CTON.   EL BARRO-AHUACHAPAN-CLUB CAMPESTRE Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0CH",
                "ruta" => "7",
                "denominacion" => "CIUDAD TOTOLCO-CHALATENANGO Y VIC.",
                "id_departamento" => "Chalatenango",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0LL",
                "ruta" => "7",
                "denominacion" => "QUEZALTEPEQUE-CANTON MACANCE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0SA",
                "ruta" => "7",
                "denominacion" => "COL. SAN CARLOS-COL. RIO ZARCO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0SM",
                "ruta" => "7",
                "denominacion" => "CANTON TRINIDAD - HATO NUEVO - CENTRO SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB007X0SO",
                "ruta" => "7",
                "denominacion" => "SONSONATE-CASERIO EL CEGA Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X0AH",
                "ruta" => "8",
                "denominacion" => "AHUACHAPAN-COL. EL ESPINO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X0SA",
                "ruta" => "8",
                "denominacion" => "COL. ALTOS DEL PALMAR (IGLESIA CALEB)-UNICO-COL. ESMERALDA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X0SM",
                "ruta" => "8",
                "denominacion" => "COL. SANTA MARIA  - CENTRO - COL. CARRILLO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X0SO",
                "ruta" => "8",
                "denominacion" => "LOTF.  SAN ANTONIO-MERCADO EL ANGEL Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X0US",
                "ruta" => "8",
                "denominacion" => "LOTIF. CORDOVA - INSTITUTO - LOS PILOTOS - CTON EL OJUSTE Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X1SA",
                "ruta" => "8",
                "denominacion" => "COL. ALTOS DEL PALMAR (IGLESIA CALEB)-SAN MIGUELITO-SAN LORENZO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB008X2SA",
                "ruta" => "8",
                "denominacion" => "COL. ALTOS DEL PALMAR (IGLESIA CALEB)-CENTRO-RESID. EL MOLINO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB009A0",
                "ruta" => "9-A",
                "denominacion" => "COL. CIUDAD CREDISA - AMATEPEC (SOYAPANGO) - 4 C. PTE Y 25 AV. SUR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB009X0AH",
                "ruta" => "9",
                "denominacion" => "AHUACHAPAN-COL. EL CARMEN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB009X0SA",
                "ruta" => "9",
                "denominacion" => "COL. SAN LUIS - EL BAMBU - CENTRO-URB. EL TREBOL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB009X0US",
                "ruta" => "9",
                "denominacion" => "LOTIF. EL AMATE  -COL. PUERTA DEL SOL - GIMNASIO MPAL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB010X0AH",
                "ruta" => "10",
                "denominacion" => "AHUACHAPAN-TAHUAPA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB010X0LL",
                "ruta" => "10",
                "denominacion" => "QUEZALTEPEQUE-DESVIO DE OPICO Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB010X0SA",
                "ruta" => "10",
                "denominacion" => "COL. SANTA EDUVIGES - COL. 5 DE MARZO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011B0",
                "ruta" => "11-B",
                "denominacion" => "COL.RETANA-KM 16 1/2  AUT.COMALAPA (SANTO TOMAS)-ALAMEDA JUAN PABLO II Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011C0",
                "ruta" => "11-C",
                "denominacion" => "COLONIA ESCALANTE (SAN MARCOS) - METROCENTRO-AVENIDA LOS ANDES (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011K0",
                "ruta" => "11-K",
                "denominacion" => "REDONDEL INTEGRADO-APOPA-COL. LA PAZ(CUSCATANCINGO)-49° AV. NORTE( BOULEVARD LOS HEROES S.S)Y VIC",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB011X0",
                "ruta" => "11",
                "denominacion" => "COL 10 DE OCTUBRE (SAN MARCOS)-33 AV. NORTE Y BLVD. TUTUNICHAPA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011X0AH",
                "ruta" => "11",
                "denominacion" => "AHUACHAPAN-FRONTERA LAS CHINAMAS PUENTE EL JOBO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011X0LL",
                "ruta" => "11",
                "denominacion" => " HACIENDA TEPEAGUA-PLAYA LAS FLORES-PUERTO DE LA LIBERTAD Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011X0SM",
                "ruta" => "11",
                "denominacion" => "COL. PALO BLANCO-CENTRO-EL SITIO Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB011X0US",
                "ruta" => "11",
                "denominacion" => "CANTON JOCOTE DULCE - (OZATLAN ) - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB012X0AH",
                "ruta" => "12",
                "denominacion" => "AHUACHAPAN-DESVIO EL ROBLE-CASERIO EL BOTADERO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB012X0LL",
                "ruta" => "12",
                "denominacion" => "INTER.CA-2 Y CA-4(PT LL)-PYA EL CONCHALION-BOCANA SN BLAS-DESVIO PYA MAJAHUAL-BOCANA MAJAHUAL Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB012X0SA",
                "ruta" => "12",
                "denominacion" => "COL.  NUEVA SAN JUAN-CENTRO-COL. EL PROGRESO Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB012X0SS",
                "ruta" => "12",
                "denominacion" => "PLANES DE RENDEROS - 8 CALLE ORIENTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB012X0US",
                "ruta" => "12",
                "denominacion" => " DESVIO DE SANTIAGO DE MARIA - CENTRO  -EL TRANSITO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB012X1SS",
                "ruta" => "12",
                "denominacion" => "MIL CUMBRES (PANCHIMALCO) - 8 CALLE ORIENTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "MB012X2SS",
                "ruta" => "12",
                "denominacion" => "CANTON LOS PALONES (PANCHIMALCO) - 8 CALLE ORIENTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "MB012X3SS",
                "ruta" => "12",
                "denominacion" => "CANTÓN EL GUAYABO (PANCHIMALCO) - 8 CALLE ORITNE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.36
            ],
            [
                "codigo_ruta" => "MB013X0AH",
                "ruta" => "13",
                "denominacion" => "AHUACHAPAN-COMUNIDAD REGALO DE DIOS Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB013X0LL",
                "ruta" => "13",
                "denominacion" => "PUERTO DE LA LIBERTAD-COL. EL MORRAL Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB013X0SA",
                "ruta" => "13",
                "denominacion" => "COL. BUENA VISTA-CENTRO-COL. PAMPE-COL. LOS OLIVOS Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB013X0SM",
                "ruta" => "13",
                "denominacion" => "COL. AURORA-CENTRO-CIUDAD REAL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB013X0US",
                "ruta" => "13",
                "denominacion" => "DESVIO STGO.-CENTRO-CARRETERA A SAN MIGUEL-EREGUAYQUIN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB014X0AH",
                "ruta" => "14",
                "denominacion" => "AHUACHAPAN-CTON. LA COYOTERA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB014X0LL",
                "ruta" => "14",
                "denominacion" => "CANTON BOTONCILLAL-AV. BADEN POWELL-SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB014X0US",
                "ruta" => "14",
                "denominacion" => "SANTIAGO DE MARIA - VILLA EL TRIUNFO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB015X0AH",
                "ruta" => "15",
                "denominacion" => "TACUBA - AHUACHAPAN  Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB015X0US",
                "ruta" => "15",
                "denominacion" => "CANTON TIERRA BLANCA - JIQUILISCO Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB015X1LL",
                "ruta" => "15",
                "denominacion" => "HDA.ZAPOTITAN(CDAD.ARCE)AV.BADEN POWEL,STA.TECLA (NVA.SN.SALVADOR) Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.75
            ],
            [
                "codigo_ruta" => "MB016X0",
                "ruta" => "16",
                "denominacion" => "URBANIZACIÓN MELARA-3 CALLE PONIENTE Y 11 AVENIDA NORTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB016X0SA",
                "ruta" => "16",
                "denominacion" => "CANTON EL PANAL - CENTRO ( METAPAN) - COL. TRINIDAD Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB016X0SM",
                "ruta" => "16",
                "denominacion" => "CHINAMECA - SAN MIGUEL Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "MB017A0AH",
                "ruta" => "17-A",
                "denominacion" => "COL. DIVINA PROVIDENCIA-CENTRO-COL. MARIA AUXILIADORA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB017A0SA",
                "ruta" => "17-A",
                "denominacion" => "CASERIO EL RONCO ( CANTON TECOMAPA ) - CENTRO ( METAPAN ) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB017A0SS",
                "ruta" => "17-A",
                "denominacion" => "CANTON  AZACUALPA - PANCHIMALCO  Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "MB017A1SS",
                "ruta" => "17-A",
                "denominacion" => " CANTON LOS TRONCONES - PANCHIMALCO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.59
            ],
            [
                "codigo_ruta" => "MB017B0SA",
                "ruta" => "17-B",
                "denominacion" => "CASERIO LAS CONCHAS ( CTON. TECOMAPA ) - CENTRO ( METAPAN ) Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB017B0SS",
                "ruta" => "17-B",
                "denominacion" => "PANCHIMALCO - PLANES DE RENDEROS - SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB017C0SA",
                "ruta" => "17-C",
                "denominacion" => "CASERIO  LA BARRA ( CTON. TECOMAPA ) - CENTRO (METAPAN)  Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB017X0AH",
                "ruta" => "17",
                "denominacion" => "LOTF. SANTA ELENA-CENTRO-COL. SANTA ROSA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB017X0SS",
                "ruta" => "17",
                "denominacion" => "CANTON PALO GRANDE-ROSARIO DE MORA-8ª CALLE ORIENTE (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.52
            ],
            [
                "codigo_ruta" => "MB018X0AH",
                "ruta" => "18",
                "denominacion" => "COL. LOS CLAVELES-CENTRO-COL. VICTORIAS Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB018X0SA",
                "ruta" => "18",
                "denominacion" => "DESVIO A SAN SEBASTIAN SALITRILLO-SAN SEBASTIAN SALITRILLO-CHALCHUAPA Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "MB019X0",
                "ruta" => "19",
                "denominacion" => "COL.EL CHARCON-CDAD.DELGADO - ALAMEDA JUAN PABLO II Y DGNAL UNIVERSITARIA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB019X0AH",
                "ruta" => "19",
                "denominacion" => "COL. EL PROGRESO-COL. IVU-CENTRO-COL. MAGAÑA Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB019X0SA",
                "ruta" => "19",
                "denominacion" => "COL. TRINIDAD-TERMINAL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "MB019X0US",
                "ruta" => "19",
                "denominacion" => "SAN FRANCISCO JAVIER-JIQUILISCO-HOSPITAL Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB020X0",
                "ruta" => "20",
                "denominacion" => "COL.STA.ROSA(CUSCATANCINGO) - 5º AV. NORTE (SN.SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB020X0AH",
                "ruta" => "20",
                "denominacion" => "APANECA - ATACO - AHUACHAPAN Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.38
            ],
            [
                "codigo_ruta" => "MB020X0SA",
                "ruta" => "20",
                "denominacion" => "COL. EL ANGEL-TERMINAL MUNICIPAL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB021X0AH",
                "ruta" => "21",
                "denominacion" => "AHUACHAPAN-CASERIO LAS VIÑAS Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB021X0SA",
                "ruta" => "21",
                "denominacion" => "CTON. LAS FLORES-TERMINAL Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB021X0SS",
                "ruta" => "21",
                "denominacion" => "SANTIAGO TEXACUANGOS-(CARRETERA ANTIGUA)-SANTO TOMAS-SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB022X0SA",
                "ruta" => "22",
                "denominacion" => "CASERIO SAN DIEGO-METAPAN Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB023A0",
                "ruta" => "23-A",
                "denominacion" => "CTON.LOS LLANITOS(AYUTUX)ALAMEDA J.P.II Y DGNAL. UNIVERSITARIA.(S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB023E0",
                "ruta" => "23-E",
                "denominacion" => "COLONIA SAN MIGUEL(MEJICANOS)-ALAMEDA J.P.II-DIAGONAL UNIVERSITARIA(S.S) Y VIC.(SERV.EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "MB023E0",
                "ruta" => "23-E",
                "denominacion" => "COLONIA SAN MIGUEL(MEJICANOS)-ALAMEDA J.P.II-DIAGONAL UNIVERSITARIA(S.S) Y VIC.(SERV.EXCLUSIVO)",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 0.35
            ],
            [
                "codigo_ruta" => "MB023X0",
                "ruta" => "23",
                "denominacion" => "COL.SN.MIGUEL-  MEJICANOS - ALAMEDA J.P.II - 6ª. CALLE OTE. Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB023X0SA",
                "ruta" => "23",
                "denominacion" => "CTON. SANTA RITA-METAPAN Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB024A0",
                "ruta" => "24-A",
                "denominacion" => "COL.FLORENCIA (CUSCATANCINGO) -5º AV. NTE.  (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB024X0",
                "ruta" => "24",
                "denominacion" => "COL. STA. MARGARITA (CUSCATANCINGO)-9 C.PTE.(SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB024X0SA",
                "ruta" => "24",
                "denominacion" => "COMUNIDAD LAS BRISAS-CENTRO-CTON. EL CAPULIN Y VIC.",
                "id_departamento" => "Santa Ana",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB025X0AH",
                "ruta" => "25",
                "denominacion" => "CASERIO LOS RANCHOS-MERCADO Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB026X0",
                "ruta" => "26",
                "denominacion" => "PROLONGACION 75°AV NTE-COLONIA SANTA LEONOR-CALLE BARRUNDIA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X1",
                "ruta" => "29",
                "denominacion" => "RTO. VALLE NUEVO (ILOPANGO)-2 AVENIDA NORTE Y 3A  CALLE ORIENTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X2",
                "ruta" => "29",
                "denominacion" => "COL. CIMAS DE SAN BARTOLO (ILOPANGO )- METROCENTRO (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X3",
                "ruta" => "29",
                "denominacion" => "REPARTO LAS CAÑAS (ILOPANGO)-METROCENTRO (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X4",
                "ruta" => "29",
                "denominacion" => "COL. ALTA VISTA (ILOPANGO)-METROCENTRO (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X5",
                "ruta" => "29",
                "denominacion" => "SAN FELIPE (ILOPANGO)-METROCENTRO (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X6",
                "ruta" => "29",
                "denominacion" => "RESIDENCIAL VISTA AL LAGO-SOYAPANGO-CENTRO-HOSPITALES-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB029X7",
                "ruta" => "29",
                "denominacion" => "COM.LAS DELICIAS-CARR.DE ORO-ALTA VISTA-SN.BARTOLO-METROCENTRO Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB030A0",
                "ruta" => "30-A",
                "denominacion" => "C.AL VOLCAN QTA. STA. EDUVIGES (MEJICANOS) 2 C.OTE.Y 12 AV.S (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB032X0",
                "ruta" => "32",
                "denominacion" => "COL.MONTREAL - MEJICANOS-PARQUE.INFANTIL ( S.S. ) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB033A1",
                "ruta" => "33-A",
                "denominacion" => "COL.ALTOS DEL ESCORIAL(MEJICANOS)-C.GDO.BARRIOS- 9° AV.SUR Y 4° C. PTE (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB033A2",
                "ruta" => "33-A",
                "denominacion" => "CTON.GUADALUPE(MEJICANOS)-1.C.PTE.Y AV.CASTRO MORAN (MEJICANOS) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB033B0",
                "ruta" => "33-B",
                "denominacion" => "CTON.SAN ROQUE(MEJICANOS)- C.GDO.BARRIOS - 9° AV.SUR Y 4° C. PTE (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB035X0",
                "ruta" => "35",
                "denominacion" => "COL.CIMA IV- 8ª CALLE ORIENTE-AV. CUSCATLAN Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB038A0",
                "ruta" => "38-A",
                "denominacion" => "COL.SN.JOSE LAS FLORES(TONACA)-5 C.OTE.Y 6 AV. NTE. (SN.SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB038B1",
                "ruta" => "38-B",
                "denominacion" => "COL.SN.ANDRES(APOPA)-5 C.OTE.Y 6 AV.NTE.(SN.SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB038C0",
                "ruta" => "38-C",
                "denominacion" => "RTO.VALLE VERDE(APOPA)-5 C.OTE.Y 6 AV. NTE.(SN.SALV) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB038D0",
                "ruta" => "38-D",
                "denominacion" => "RPT.MADRE TIERRA- COL.CHINTUC (APOPA) - 5° C. OTE Y 2° AV. NTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB038E0",
                "ruta" => "38-E",
                "denominacion" => "COL VALLE DEL SOL(APOPA)-5º C. OTE. - 2° AV. NTE (S.S.) Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB038F0",
                "ruta" => "38-F",
                "denominacion" => "RTO.LOS ANGELES(APOPA)AVENIDA LOS ANDES(METROCENTRO,SN.SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB039X0",
                "ruta" => "39",
                "denominacion" => "HUIZUCAR - MERCADO CENTRAL (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "MB041A0",
                "ruta" => "41-A",
                "denominacion" => "RPTO.SAN JOSE (SOYAPANGO) - 1° C. PTE. - 9° AV. NORTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB041B0",
                "ruta" => "41-B",
                "denominacion" => "COL. BOSQUES DEL RIO(SOYAPANGO)- 1° C. OTE. - 9° AV. NTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB041D0",
                "ruta" => "41-D",
                "denominacion" => "COL.GUAYACAN (SOYAPANGO) - 1° C. PTE. - 9° AV. NTE (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB041E0",
                "ruta" => "41-E",
                "denominacion" => "MONTES DE SN.BARTOLO IV (SOYAPANGO) - 1º C. PTE. - 9° AV. NTE (S.S.)   Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB041F0",
                "ruta" => "41-F",
                "denominacion" => "MONTES DE SAN BARTOLO V (SOYAPANGO)- 1° C. OTE - 9° AV. NTE (S.S.) Y  VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB041G0",
                "ruta" => "41-G",
                "denominacion" => "URB. PRADOS DE VENECIA (SOYAPANGO) - 1° C.OTE. - 9° AV. NTE  (S.S)Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB042A0",
                "ruta" => "42-A",
                "denominacion" => "PAS.INDEP. Y 16ª AV.NTE.(S.S)- PJE. AMAPOLAS-7ª.AV.NTE.-URB. BRIZAS DE ZARAGOZA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB042B0",
                "ruta" => "42-B",
                "denominacion" => "COLONIA SAN JOSE (SANTA TECLA) - 12 AVENIDA SUR (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB042B1",
                "ruta" => "42-B",
                "denominacion" => "COLONIA SAN JOSE - VIA SHELL - 12 AVENIDA SUR (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB042C0",
                "ruta" => "42-C",
                "denominacion" => "PAS.INDEPEN.16.AV.NTE.(S.S)COL.LA SABANA POLIDEPORTIVO(STA TECLA) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB043X0",
                "ruta" => "43",
                "denominacion" => "COL. LOS ALPES (CIUDAD DELGADO) - 1ª C. PTE. - 9ª AV. NTE (S.S.)  Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB044X0",
                "ruta" => "44",
                "denominacion" => "COL.STSIMA.TRINIDAD(AYUTUXTE)BLVD.ORDEN MALTA-STA.ELENA(ANT.CCTLAN) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB045A0",
                "ruta" => "45-A",
                "denominacion" => "2.C.OTE.Y 3.AV.NTE.(APOPA)EL AMATE CTON.LAS CABAÑITAS(CDAD.DGDO) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB045B0",
                "ruta" => "45-B",
                "denominacion" => "VALLE DEL SOL (APOPA) - CALLE SISIMILES (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.37
            ],
            [
                "codigo_ruta" => "MB046B0",
                "ruta" => "46-B",
                "denominacion" => "SAN RAMON -  C.LAS BRISAS (MEJICANOS) - 9° AV. NTE. - JP II (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB046C0",
                "ruta" => "46-C",
                "denominacion" => "SAN RAMON (MEJICANOS) - 11ª AV. SUR - 4ª C. PTE.  (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB048X0",
                "ruta" => "48",
                "denominacion" => "RTO. STA. MARTA - 10 CALLE OTE - MERCADO CENTRAL Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB052X1",
                "ruta" => "52",
                "denominacion" => "22 AV.NTE.Y RELOJ DE FLORES (S.S.) - CTON.EL CARMEN (S.S.) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB052X2",
                "ruta" => "52",
                "denominacion" => "22ª AVE NORTE (S.S.)-REDONDEL ARTIGA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB052X3",
                "ruta" => "52",
                "denominacion" => "22ª AVE NORTE (S.S.)-COMUNIDAD FESIARA Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB053A0",
                "ruta" => "53-A",
                "denominacion" => "RESIDENCIAL SAN PEDRO-ZACAMIL-HOSPITAL BLOOM-CENTRO DE GOBIERNO-Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB053C0",
                "ruta" => "53-C",
                "denominacion" => "RESIDENCIAL SAN PEDRO - C. SAN CARLOS ( MEJICANOS ) - 5ª C. PTE.- 9ª AV. NTE (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB053X0",
                "ruta" => "53",
                "denominacion" => "RESIDENCIAL SAN PEDRO-(MEJICANOS)-C. RUBEN DARIO-17ª AV. SUR (S.S) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB090B0SM",
                "ruta" => "90-B",
                "denominacion" => "COL. CIUDAD PACIFICA - CENTRO - LA PRADERA - PAPALON Y VIC.",
                "id_departamento" => "San Miguel",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB100A0LL",
                "ruta" => "100-A",
                "denominacion" => "CIUDAD ARCE  - SAN SALVADOR (VIA REFORMA)  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB100X0LL",
                "ruta" => "100",
                "denominacion" => "CIUDAD ARCE - SAN SALVADOR  Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB101B0",
                "ruta" => "101-B",
                "denominacion" => "ALPES SUIZOS - SANTA TECLA - 11ª AV. SUR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB101D0",
                "ruta" => "101-D",
                "denominacion" => "COLONIA SAN JOSE - CUMBRES DE SANTA TECLA - 11 AV. NORTE Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.31
            ],
            [
                "codigo_ruta" => "MB102A1LL",
                "ruta" => "102-A",
                "denominacion" => "BOCANA P. EL ZONTE-CL PPAL DE CTON LA LIMA-EL SUNZAL- PTO. DE LA LIBERTAD-S.S. Y VIC. (SERV. EXCLUS)",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "EXCLUSIVO",
                "tarifa_autorizada" => 1.50
            ],
            [
                "codigo_ruta" => "MB102A1LL",
                "ruta" => "102-A",
                "denominacion" => "BOCANA P. EL ZONTE-CL PPAL DE CTON LA LIMA-EL SUNZAL- PTO. DE LA LIBERTAD-S.S. Y VIC. (SERV. EXCLUS)",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.50
            ],
            [
                "codigo_ruta" => "MB108X0LL",
                "ruta" => "108",
                "denominacion" => "SAN JUAN OPICO-SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.76
            ],
            [
                "codigo_ruta" => "MB109X0LL",
                "ruta" => "109",
                "denominacion" => "QUEZALTEPEQUE - APOPA - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.47
            ],
            [
                "codigo_ruta" => "MB113X0CU",
                "ruta" => "113",
                "denominacion" => "COLONIA JARDINES DE LAS PAVAS (COJUTEPEQUE) - TERMINAL  PLAZA AMANECER Y VIC.",
                "id_departamento" => "Cuscatlán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.43
            ],
            [
                "codigo_ruta" => "MB115X0",
                "ruta" => "115",
                "denominacion" => "TONACATEPEQUE - DISTRITO ITALIA - APOPA - SAN SALVADOR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.46
            ],
            [
                "codigo_ruta" => "MB138A0LP",
                "ruta" => "138-A",
                "denominacion" => "SN.J.TALPA - AUTOPISTA  COMALAPA - OLOCUILTA - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB138X0LP",
                "ruta" => "138",
                "denominacion" => "RESIDENCIAL SANTA ISABEL - AEROPUERTO - SAN SALVADOR  Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.74
            ],
            [
                "codigo_ruta" => "MB138X1LP",
                "ruta" => "138",
                "denominacion" => "HDA. SANTA CLARA - SAN LUIS TALPA - AEROPUERTO - SAN SALVADOR Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB140X0",
                "ruta" => "140",
                "denominacion" => "SAN MARTIN-SOYAPANGO-8ª AVENIDA SUR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB140X1",
                "ruta" => "140-1",
                "denominacion" => "SAN MARTIN-LOS ALMENDROS I Y II SOYAPANGO-8ª AV. SUR (SAN SALVADOR) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB140X2",
                "ruta" => "140-2",
                "denominacion" => "SAN MARTIN - SOYAPANGO -8ª AV. SUR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB140X4",
                "ruta" => "140-4",
                "denominacion" => "COLONIA SANTA ELENA-SAN MARTIN-8ª AV. SUR Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.32
            ],
            [
                "codigo_ruta" => "MB140X7",
                "ruta" => "140-7",
                "denominacion" => "SAN MARTIN - CARRETERA DE ORO - SOYAPANGO - REDONDEL SCHAFIK HANDALL (MEJICANOS) Y VIC.",
                "id_departamento" => "San Salvador",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.65
            ],
            [
                "codigo_ruta" => "MB168X0LL",
                "ruta" => "168",
                "denominacion" => "QUEZALTEPEQUE - SANTA TECLA Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.56
            ],
            [
                "codigo_ruta" => "MB252X0SO",
                "ruta" => "252",
                "denominacion" => "SONSONATE-ACAJUTLA-Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB329X0MO",
                "ruta" => "329",
                "denominacion" => "PERQUIN - OSCICALA -SAN FRANCISCO GOTERA Y VIC.",
                "id_departamento" => "Morazán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 1.00
            ],
            [
                "codigo_ruta" => "MB400X0LP",
                "ruta" => "400",
                "denominacion" => "COL. EL PEDREGAL - CTON. LAS HOJAS - CRIO ASTORIAS - AEROPUERTO INTER. Y VIC.",
                "id_departamento" => "La Paz",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERDEPARTAMENTAL",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.61
            ],
            [
                "codigo_ruta" => "MB646X0LL",
                "ruta" => "646",
                "denominacion" => "URB. SAN FRANCISCO - PARADA AGUA CALIENTE Y VIC.",
                "id_departamento" => "La Libertad",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB775X0US",
                "ruta" => "775",
                "denominacion" => "CANTON LAS TRANCAS - OJO DE AGUA - USULUTAN Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB777X0US",
                "ruta" => "777",
                "denominacion" => "CANTON SAN FRANCISCO - SANTA MARIA - USULUTAN  Y VIC.",
                "id_departamento" => "Usulután",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB800X0SO",
                "ruta" => "800",
                "denominacion" => "SANTA ISABEL ISHUATAN-SAN JULIAN Y VIC.",
                "id_departamento" => "Sonsonate",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.50
            ],
            [
                "codigo_ruta" => "MB809X0AH",
                "ruta" => "809",
                "denominacion" => "CASERIO POZO 4 - AHUACHAPAN ( MERCADO ) Y VIC.",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "URBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ],
            [
                "codigo_ruta" => "MB815X0AH",
                "ruta" => "815",
                "denominacion" => "COL. LAS DELICIAS 1 DE CANTON EL BARRO - AHUACHAPAN ( MERCADO NO.2 ) Y VIC",
                "id_departamento" => "Ahuachapán",
                "id_tipo_vehiculo_ruta" => "POR MICROBUSES",
                "id_tipo_servicio_ruta" => "INTERURBANO",
                "id_clase_servicio_ruta" => "ORDINARIO",
                "tarifa_autorizada" => 0.25
            ]
        ];

        foreach ($data as $value) {
            $departamento = Departamento::firstOrCreate(
                ['nombre' => $value['id_departamento']]
            );

            $tipoVehiculo = TiposVehiculosRutas::firstOrCreate(
                ['tipo' => $value['id_tipo_vehiculo_ruta']]
            );

            $tipoServicio = TiposServiciosRutas::firstOrCreate(
                ['subtipo' => $value['id_tipo_servicio_ruta']]
            );

            $claseServicio = ClasesServiciosRutas::firstOrCreate(
                ['clase' => $value['id_clase_servicio_ruta']]
            );

            RutasTransporte::create([
                'id_departamento' => $departamento->id,
                'id_tipo_vehiculo_ruta' => $tipoVehiculo->id,
                'id_tipo_servicio_ruta' => $tipoServicio->id,
                'id_clase_servicio_ruta' => $claseServicio->id,
                'codigo_ruta' => $value['codigo_ruta'],
                'ruta' => $value['ruta'],
                'denominacion' => $value['denominacion'],
                'tarifa_autorizada' => $value['tarifa_autorizada']
            ]);
        }
    }
}
