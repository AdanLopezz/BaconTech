<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direccion extends Model
{
    use softDeletes;

    protected $table = 'direcciones';

    protected $primaryKey = 'id_direccion';

    protected $fillable = ['calle','estado','codigo_postal'];
    use HasFactory;
}
