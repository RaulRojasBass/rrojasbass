<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $casts = [
        'estatus',
    ];
    
    protected $dates = [
        'f_nacimiento',
    ];
    
    protected $fillable = [
        'c_empleado',
        'nombre',
        'a_pat',
        'a_mat',
        'edad',
        'f_nacimiento',
        'genero',
        's_base',
        'estatus',
    ];

    protected static function booted()
    {
        static::creating(function ($empleado) {
            $fechaNacimiento = date('Ymd', strtotime($empleado->f_nacimiento));
            $inicialNombre = strtoupper(substr($empleado->nombre, 0, 1));
            $inicialApellidoPaterno = strtoupper(substr($empleado->a_pat, 0, 1));
            $inicialApellidoMaterno = strtoupper(substr($empleado->a_mat, 0, 1));
            $empleado->c_empleado = $fechaNacimiento . $inicialNombre . $inicialApellidoPaterno . $inicialApellidoMaterno;
        });
    }
}
