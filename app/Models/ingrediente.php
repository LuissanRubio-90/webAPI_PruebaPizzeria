<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'producto_id',
        'n_ingrediente',
        'precio'
    ];
}
