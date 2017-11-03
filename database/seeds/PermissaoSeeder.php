<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissao::insert([
        	['tipo' => 'listar'],
        	['tipo' => 'detalhar'],
        	['tipo' => 'editar'],
        	['tipo' => 'deletar'],
        ]);
    }
}
