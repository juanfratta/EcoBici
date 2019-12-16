<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class editProfileController extends Controller
{
    public function editar(Request $request){

      $usuario = User::all();


      $usuario->name = $request['name'];
      $usuario->email = $request['email'];
      $usuario->password = $request['password']

      $usuario->save();

      return redirect('/');
    }
}
