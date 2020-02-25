<?php

namespace Mariachis\Http\Controllers;
use \Mariachis\Serenata;
use Session;

use Illuminate\Http\Request;
use Mariachis\Http\Requests;
use Mariachis\Http\Controllers\Controller;
use Mariachis\Http\Requests\SerenatasRequest;

class SerenatasController extends Controller
{

    public function index(Request $request)
    {   
         if( $request -> ajax() )
         {
            // El Metodo por Defecto es Consultar Usuario
            $datoBuscar = $request['datoBuscar'];
            if(empty($datoBuscar))
            {
                // El Metodo por Defecto es Consultar Usuario
                $serenata =  Serenata::paginate(10);
                return view('serenatas/tablaFiltrada' , compact('serenata'));
            }
            else
            {   
                // Busca
                $serenata = Serenata::where('direccionSerenata', 'Like', '%'. $datoBuscar . '%')
                                   ->orWhere('valorSerenata', 'Like', '%'. $datoBuscar . '%')
                                   ->paginate(10);
                return view('serenatas/tablaFiltrada' , compact('serenata'));
            }
        }

        else
        {
             // El Metodo por Defecto es Consultar Usuario
            $serenata =  Serenata::paginate(10);
            return view('serenatas/consultarSerenatas' , compact('serenata'));
        }

    }

    public function create()
    {
        return view('serenatas/crearSerenatas');
    }

    public function mostrarMapa()
    {
        return view('serenatas/mapa');
    }

    public function store(SerenatasRequest $request)
    {
        // Llamamos el Modelo
        Serenata::create(
        [
            // Empaquetamos los Datos  y los envamos al Insert
            'direccionSerenata' => $request['direccionSerenata'],
            'horaSerenata' => $request['horaSerenata'],
            'fechaSerenata' => $request['fechaSerenata'],
            'valorSerenata' => $request['valorSerenata'],
            'departeDe' => $request['departeDe'],
            'dedicadoPara' => $request['dedicadoPara'],
            'motivoSerenata' => $request['motivoSerenata'],
            'ObservacionSerenata' => $request['ObservacionSerenata'],
            'estadoSerenata' => "En Proceso"
        ]);

        // Enviado Mensaje de Dato Creado
        Session::flash('message-datoCreado', 'Serenata Creada');
        return view('serenatas/crearSerenatas');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $serenata = Serenata::find($id);
        return view('serenatas/editarSerenatas' , ['serenata' => $serenata]);
    }

    public function update(Request $request, $id)
    {
        $serenata = Serenata::find($id);
        $serenata -> fill( $request -> all() );
        $serenata -> save();

        Session::flash('message-datoCreado', 'Serenata Actualizado');
        
        // El Metodo por Defecto es Consultar Usuario
        $serenata =  Serenata::paginate(10);
        return view('serenatas/consultarSerenatas' , compact('serenata'));
    }

    public function destroy($id)
    {
        $serenatas = Serenata::destroy($id);

        Session::flash('message-datoCreado', 'Usuario Eliminado');
        
         // El Metodo por Defecto es Consultar Usuario
        $serenata =  Serenata::paginate(10);
        return view('serenatas/consultarSerenatas' , compact('serenata'));
    }
}
