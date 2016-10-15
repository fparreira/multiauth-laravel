<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AnuncianteController extends Controller
{


    public function index(){
        return view('anunciante.index');
    }

    public function login(Request $request){

//        dd($request->all());

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];

//        dd(Auth::guard('anunciante')->attempt($credentials));

        if (Auth::guard('anunciante')->attempt($credentials)){
            return redirect('anunciante/home');
        }else{
            return redirect('anunciante')->withInput();
        }


    }

    public function home(){
        return view('anunciante.auth.home');
    }

    public function eventos(){
        return view('anunciante.auth.eventos');
    }



    public function logout(){
        Auth::guard('anunciante')->logout();

        return redirect('anunciante');
    }


}
