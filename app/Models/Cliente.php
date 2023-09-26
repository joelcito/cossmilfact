<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombres',
        'ap_paterno',
        'ap_materno',
        'cedula',
        'nit',
        'razon_social',
        'correo',
        'estado',
        'deleted_at',
    ];
    
}
