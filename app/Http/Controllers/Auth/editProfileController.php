<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;



class editProfileController extends Controller
{
  
    public function editar(Request $request){

      $user = User::find(\Auth::user()->id);

      $archivo = $request->avatar;
      $rutaImagen = $archivo->store('public');
      $imagen = basename($rutaImagen);

      $user->name = $request->name;
      $user->email = $request->email;
      $user->avatar = $imagen;

      $user->save();

      return redirect('/');
    }
}
