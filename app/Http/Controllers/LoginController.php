<?php

namespace Mariachis\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Mariachis\Http\Requests;
use Mariachis\Http\Requests\LoginRequest;
use Mariachis\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Constructor
    public function __construct() 
    {
    }


    public function index()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {   
        // Obtenemos la Informacion de los Input
        if(Auth::attempt(['usuario' => $request['usuario'] , 'password' => $request['password']]))
        {   
            return Redirect::to('admin');
        }

        else
        {
            Session::flash('message-error', 'Datos Incorrecto');
            return Redirect::to('Login');
        }

        
    }


    public function logout()
    {
        //Auth::logout();
        return Redirect::to('Login');
    }


}
