<?php

namespace Mariachis;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,AuthorizableContract,CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    // Datos que se Pueden llenar
    protected $fillable = ['nombre','apellido','email','usuario','password','direccion'];

    // Si el campo en Editar Password no esta vacio entonces vamos a Cambiar la Password
    public function setPasswordAttribute($valor)
    {
        if(!empty($valor))
        {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

}
