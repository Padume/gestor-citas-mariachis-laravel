<?php

namespace Mariachis\Http\Controllers;

use Illuminate\Http\Request;
use Mariachis\Http\Requests;
use Mariachis\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use \Mariachis\Serenata;
use \Mariachis\Clientes;

class ReportesController extends Controller
{

    public function index()
    {
        Excel::load('public/excel/Mariachi.xlsx',function($archivo)
        {
            // Leemos todas las filas
            $resultados = $archivo->get();

            foreach ($resultados as $key => $value)
            {   
                // Validar Si el archivo Existe para no hacer insert Vacio
                Serenata::create(
                [
                    // Empaquetamos los Datos  y los envamos al Insert
                    'direccionSerenata' => $value->direccion,
                    'horaSerenata' => "10:00:00",
                    'fechaSerenata' => "2015-10-17",
                    'valorSerenata' => $value->valor,
                    'departeDe' => $value->de,
                    'dedicadoPara' => $value->para,
                    'motivoSerenata' => $value->motivo,
                    'ObservacionSerenata' => $value->observacion,
                    'estadoSerenata' => "Terminado"

                    // Poner Llaver Foraneaa
                ]);

                Clientes::create(
                [
                    // Empaquetamos los Datos  y los envamos al Insert
                    'nombreCliente' => $value->contratante,
                    // Pendiente Cambiar tipo Int BD
                    'telefonoCliente' => $value->telefono,
                    'direccionCliente' => $value->direccion
                ]);
            }


        })->get();

        return view('reportes/subirArchivo');   
    }

    public function create()
    {
        Excel::create('Reporte', function($excel) 
        {   
            $excel ->sheet('Sheetname',function($sheet)
            {
                $datos = Serenata::all();

                //Configurando Datos
                $sheet->fromArray($datos);
            });

        })->download('xls');
    }


    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
