<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permissao;
use Auth;

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
    // fim registrar
    public function listar()
    {

        if(Auth::user()->can('listar')){

            return view('user.users', [
                'usuarios' => User::all(),
            ]);
        }else{

            return redirect()
            ->back()
            ->with('alerta', [
                'tipo' => 'warning',
                'msg' => 'Permissão de exclusão negada.',
            ]);
        }
    }

    public function deletar(User $usuario)
    {
        if(Auth::user()->can('deletar')){

            if($usuario->delete()){

                $usuario->permissoes()->detach();

                return redirect()
                ->back()
                ->with('alerta', [
                    'tipo' => 'success',
                    'msg' => 'Usuário excluído com sucesso.',
                ]);
            }
        }else{

            return redirect()
            ->back()
            ->with('alerta', [
                'tipo' => 'warning',
                'msg' => 'Permissão de exclusão negada.',
            ]);
        }
    }

    public function detalhes($id)
    {
        return view('user.user', [
            'usuario' => User::findOrFail($id),
            'permissaos' => Permissao::all(),
        ]);
    }

    public function atribuiPermissoes(Request $r, User $usuario)
    {
        if($usuario->permissoes()->sync($r->permissaos)){

            return redirect()
            ->back()
            ->with('alerta', [
                'tipo' => 'success',
                'msg' => 'Permissões Atualizadas com sucesso!'
            ]);
        }
    }
}
