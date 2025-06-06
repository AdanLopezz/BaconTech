<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use softDeletes;
    protected $table = 'clientes';

    protected $primaryKey = 'id_cliente';

    protected $fillable = ['id_persona'];

    use HasFactory;
}
