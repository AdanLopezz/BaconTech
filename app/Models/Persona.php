<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use softDeletes;
    protected $table = 'personas';

    protected $primaryKey = 'id_persona';

    protected $fillable = ['nombre','apellido_paterno','apellido_materno','correo','telefono','id_direccion'];
    use HasFactory;
}
