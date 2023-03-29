<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Requests\LoginRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Requests;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //

    public function show(){
    if(Auth::check()){
        return redirect('/'); // linea que si esta autenticado se vaya a la vista home practicamente al index
    }


    return view('auth.login');
    }
    
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials))
        {
            return redirect()->to('/login')->withErrors('Username and/or password is incorrec'); //mensaje de error
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
   }

public function authenticated(Request $request, $user){
    return redirect('/');
}

} 