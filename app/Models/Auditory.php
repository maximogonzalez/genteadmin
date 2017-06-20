<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditory extends Model
{

  protected $dates = ['created_at', 'updated_at', 'deleted_at'];
  
  public function getCreatedAtAttribute($value)
  {
    return date('d-m-Y H:i:s', strtotime($value));
  }
  
  public function getUpdatedAtAttribute($value)
  {
    return date('d-m-Y H:i:s', strtotime($value));
  }
  
  protected $fillable =
  [
    'name,
     accion,
     modelo,
     id_modelo,
     valor_anterior,
     valor_nuevo,
     ip,
     nombre_maquina,
     realizado_por_usuario'
  ];
   
 
  
}