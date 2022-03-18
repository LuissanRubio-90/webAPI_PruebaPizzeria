<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingrediente_predeterminado extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'id',
        'producto_id',
        'n_ingrediente_p',
        'precio'
    ];
}
