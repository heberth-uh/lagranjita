<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    //Accesor
    public function getdescripcionPreviewAttribute(){
        if(strlen($this->descripcion)>60){
            $value = substr($this->descripcion, 0, 60) . '...';
        } else {
            $value = $this->descripcion;
        }

        return ucfirst( $value );
    }

    
    public function getnombreAttribute($value) {
        return ucwords(strtolower($value));
    }
}
