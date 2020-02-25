<?php

namespace Mariachis;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    // Datos que se Pueden llenar
    protected $fillable = ['nombreCliente','telefonoCliente','direccionCliente'];
}
