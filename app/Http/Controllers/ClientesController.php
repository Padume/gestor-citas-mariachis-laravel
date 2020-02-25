<?php

namespace Mariachis\Http\Controllers;
use \Mariachis\Clientes;
use Session;

use Illuminate\Http\Request;
use Mariachis\Http\Requests;
use Mariachis\Http\Controllers\Controller;
use Mariachis\Http\Requests\ClientesRequest;

class ClientesController extends Controller
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
                $cliente =  Clientes::paginate(5);
                return view('clientes/tablaFiltrada' , compact('cliente'));
            }
            else
            {   
                // Busca
                $cliente = Clientes::where('telefonoCliente', 'Like', '%'. $datoBuscar . '%')
                                   ->orWhere('nombreCliente', 'Like', '%'. $datoBuscar . '%')
                                   ->paginate(5);
                return view('clientes/tablaFiltrada' , compact('cliente'));
            }
        }

        else
        {
            // El Metodo por Defecto es Consultar Usuario
            $cliente =  Clientes::paginate(5);
            return view('clientes/consultarClientes' , compact('cliente'));
        }
    }

    public function filtroClientes(Request $request)
    {
        // El Metodo por Defecto es Consultar Usuario
        $datoBuscar = $request['datoBuscar'];
        
        if(empty($datoBuscar))
        {
            // El Metodo por Defecto es Consultar Usuario
            $cliente =  Clientes::paginate(5);
            return view('clientes/modalFiltrada' , compact('cliente'));
        }
        
        else
        {   
            // Busca
            $cliente = Clientes::where('telefonoCliente', 'Like', '%'. $datoBuscar . '%')
                                   ->orWhere('nombreCliente', 'Like', '%'. $datoBuscar . '%')
                                   ->paginate(5);
            return view('clientes/modalFiltrada' , compact('cliente'));
        }
    }


    public function create()
    {
        return view('clientes/crearClientes');
    }

    public function store(ClientesRequest $request)
    {
        // Llamamos el Modelo
        Clientes::create(
        [
            // Empaquetamos los Datos  y los envamos al Insert
            'nombreCliente' => $request['nombreCliente'],
            'telefonoCliente' => $request['telefonoCliente'],
            'direccionCliente' => $request['direccionCliente']
        ]);

        // Enviado Mensaje de Dato Creado
        Session::flash('message-datoCreado', 'Cliente Creado');
        return view('clientes/crearClientes');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $cliente = Clientes::find($id);
        return view('clientes/editarClientes' , ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Clientes::find($id);
        $cliente -> fill( $request -> all() );
        $cliente -> save();

        Session::flash('message-datoCreado', 'Cliente Actualizado');
        
        // El Metodo por Defecto es Consultar Usuario
        $cliente =  Clientes::paginate(5);
        return view('clientes/consultarClientes' , compact('cliente'));
    }

    public function destroy($id)
    {
        $clientes = Clientes::destroy($id);

        Session::flash('message-datoCreado', 'Cliente Eliminado');
        
        // El Metodo por Defecto es Consultar Usuario
        $cliente =  Clientes::paginate(5);
        return view('clientes/consultarClientes' , compact('cliente'));
    }
}
