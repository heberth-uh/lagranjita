<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    //Accesors
    public function getNombreAttribute($value) {
        return ucwords(strtolower($value));
    }
    public function getApellidoPaternoAttribute($value) {
        return ucwords(strtolower($value));
    }
    public function getApellidoMaternoAttribute($value) {
        return ucwords(strtolower($value));
    }
}
