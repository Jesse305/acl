<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function autenticar(Request $r)
    {
    	if(Auth::attempt(['cpf' => $r->cpf, 'password' => $r->password])){

    		return redirect()
            ->route('home');
    	}else{

    		return redirect()
    		->back()
    		->withInput()
    		->with('alerta', [
    			'tipo' => 'warning',
    			'msg' => 'Usuário ou senha incorretos.',
    		]);
    	}
    }
}
