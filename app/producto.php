<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['nombre', 'precio_venta', 'precio_compra','stock','descripcion',];
    //public $table= "productos";
   // public $guarded =[];

   public $table= "productos";
   public $guarded =[];
   
}
