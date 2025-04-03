<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Compra extends Model
{
    use SoftDeletes;
    protected $table = 'compras';
    protected $primaryKey = 'id_compra';
    protected $fillable = ['id_cliente','fecha','total_compra','id_metodo_pago'];
    use HasFactory;
}
