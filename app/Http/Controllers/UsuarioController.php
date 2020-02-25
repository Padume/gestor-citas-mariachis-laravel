<?php

namespace Mariachis\Http\Controllers;
use \Mariachis\User;
use \Mariachis\Serenata;
use Session;
use Illuminate\Http\Request;
use Mariachis\Http\Requests;
use Mariachis\Http\Requests\UsuarioRequest;
use Mariachis\Http\Controllers\Controller;

class UsuarioController extends Controller
{

    public function index()
    {         
        // El Metodo por Defecto es Consultar Usuario
        $users =  User::paginate(6);
        return view('usuario/consultarUsuario' , compact('users'));
    }

    public function admin()
    {   
         // El Metodo por Defecto es Consultar Usuario
        $serenata =  Serenata::paginate(5);
        return view('perfil' , compact('serenata'));

        // return view('perfil');
    }

    public function create()
    {
        return view('usuario/crearUsuario');
    }

    // Creando el Insert de los Usuarios
    public function store(UsuarioRequest $request)
    {   
        // Llamamos el Modelo
        User::create(
        [
            // Empaquetamos los Datos  y los envamos al Insert
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'usuario' => $request['usuario'],
            'password' => $request['password'],
            'direccion' => $request['direccion']
        ]);

        // Enviado Mensaje de Dato Creado
        Session::flash('message-datoCreado', 'Usuario Creado');
        return view('usuario/crearUsuario');


    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario/editarUsuario' , ['user' => $user]);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user -> fill( $request -> all() );
        $user -> save();

        Session::flash('message-datoCreado', 'Usuario Actualizado');
        
        // Regresando a los Usuarios Consultados
        $users =  User::paginate(6);
        return view('usuario/consultarUsuario' , compact('users'));
    }

    public function destroy($id)
    {
        $user = User::destroy($id);

        Session::flash('message-datoCreado', 'Usuario Eliminado');
        
        // Regresando a los Usuarios Consultados
        $users =  User::paginate(6);
        return view('usuario/consultarUsuario' , compact('users'));
    }
}
