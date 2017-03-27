<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index (){
        return view('users.index', ['users'=>User::all()]);
    }

    public function show (User $user){
      return view('users.show', ['users'=>$user]);
    }

    public function create (){
      return view ('users.create');
    }

    public function store (){
      $usuario = new \App\User;
      $usuario->name = request('name');
      $usuario->email = request('email');
      $usuario->password = request('password');
      $usuario.save();

      return redirect('/');
    }
}
