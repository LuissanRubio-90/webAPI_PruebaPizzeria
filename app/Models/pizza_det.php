<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizza_det extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'cod_pizza',
        'n_pizza',
        'precio_s',
        'predeterminado'
    ];
}
