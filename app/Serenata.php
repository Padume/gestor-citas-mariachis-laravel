<?php

namespace Mariachis;

use Illuminate\Database\Eloquent\Model;

class Serenata extends Model
{
    protected $table = 'serenatas';

    // Datos que se Pueden llenar
    protected $fillable = ['direccionSerenata','horaSerenata','fechaSerenata','valorSerenata','ObservacionSerenata','estadoSerenata','departeDe','dedicadoPara','motivoSerenata'];
}
