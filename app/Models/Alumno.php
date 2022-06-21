<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $fillable = ['Nombre','Apellido_P', 'Apellido_M', 'Fecha_Nacimiento', 'Telefono', 'Matricula', 'Correo_Eletronico','Curp','NSS'];
}
