<?php

use Illuminate\Database\Seeder;
use App\Papel;

class PapelSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Papel::where('nome','=','admin')->count()){
        	$admin = Papel::create([
        			'nome'=>'admin',
        			'descricao'=>'Administrador do sistema'
        		]);
        }
        if(!Papel::where('nome','=','gerente')->count()){
        	$admin = Papel::create([
        			'nome'=>'gerente',
        			'descricao'=>'Gerente do sistema'
        		]);
        }

        if(!Papel::where('nome','=','vendedor')->count()){
        	$admin = Papel::create([
        			'nome'=>'vendedor',
        			'descricao'=>'Equipe de vendas'
        		]);
        }
    }
}
