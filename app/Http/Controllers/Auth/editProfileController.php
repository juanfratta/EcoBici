<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class editProfileController extends Controller
{
    public function editar(Request $request){

      $user = User::find(\Auth::user()->id);

      $user->name = $request->name;
      $user->email = $request->email;

      $user->save();

      return redirect('/');
    }
}
