<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class RegisterController extends Controller
{
  
    public function show(){
        if(Auth::check()){
            return redirect('/home'); // linea que si esta autenticado se vaya a la vista home practicamente al index
        }
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('seccess', 'Account created successfully');//linea que lleva a la pagina que quiera que se muestre despues de registrarse
        
    }
}
