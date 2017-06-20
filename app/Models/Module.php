<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{

  use SoftDeletes;
    
  protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
  protected $fillable = [
                                
      'nombre_sede',
      'descripcion_sede',
      'ubicacion_sede',
      'estatus_sede',     
      
      ];

}