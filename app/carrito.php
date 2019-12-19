<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class carrito extends Model
{
  public $table= "carrito";
  public $guarded = [""];
  public $fillable = ['user_id','activo' ];

  public function productos(){
    return $this.belongsToMany("App/producto", "carrito_producto", "carrito_id", "producto_id");
  }


}
