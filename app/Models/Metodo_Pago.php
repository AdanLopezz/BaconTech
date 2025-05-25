<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Metodo_Pago extends Model
{
    use SoftDeletes;

    protected $table = 'metodos_pagos';

    protected $primaryKey = 'id_metodo_pago';
    protected $fillable = ['descripcion'];

    use HasFactory;
}
