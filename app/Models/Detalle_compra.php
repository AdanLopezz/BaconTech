<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_compra extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'detalle_compras';

    protected $primaryKey = 'id_detalle';

    protected $fillable = ['id_compra','id_producto','cantidad','subtotal'];

}
