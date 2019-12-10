<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class producto extends Model
{

    protected $fillable = ['nombre', 'precio_venta', 'precio_compra','stock','descripcion',];
    //public $table= "productos";
   // public $guarded =[];
}
