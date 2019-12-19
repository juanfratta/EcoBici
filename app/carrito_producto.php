<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito_producto extends Model
{
  public $table= "carrito_producto";
  public $guarded = [""];
  public $fillable = ['carrito_id', 'producto_id', 'cantidad'];

  public function productos(){
    return $this->belongsToMany('App\producto');
  }

}
