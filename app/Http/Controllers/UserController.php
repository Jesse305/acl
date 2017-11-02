<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function duplicate($cpf)
	{
		return User::where('cpf', $cpf)->count();
	}

    public function registrar(Request $r)
    {

    	if($this->duplicate($r->cpf)){

    		return redirect()
    		->back()
    		->withInput()
    		->with('alerta', ['tipo' => 'danger', 'msg' => 'Já existe um usuário de mesmo CPF.']);

    	}else{

    		$user = new User([
    			'name' => $r->name,
    			'cpf' => $r->cpf,
    			'email' => $r->email,
    			'password' => bcrypt($r->password),
    			'admin' => 0,
    		]);

    		$user->save();

    		return redirect() 
    		->route('index')
    		->withInput()
    		->with('alerta', ['tipo' => 'success', 'msg' => 'Usuário cadastrado com sucesso.']);

    	}
    }
}
