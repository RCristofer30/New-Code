<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoComprobante extends Model
{
    use HasFactory;
    protected $table="tipo_comprobante";
    
    protected $fillable = [
        'codigo',
        'nombre',
        'activo',
    ];
}
