<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['nombre', 'precio','stock','descripcion','imagen'];
    //public $table= "productos";
   // public $guarded =[];

   public $table= "productos";
   public $guarded =[];

   public function carritos(){
     return $this.belongsToMany("App/carrito", "carrito_producto", "producto_id", "carrito_id" );
   }


 }
