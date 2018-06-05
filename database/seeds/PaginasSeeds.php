<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first();        	
        }else{
        	$paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Título da Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.3779917104055!2d-51.20109487601565!3d-30.058877288505993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b9f1b70b6078880!2sCol%C3%A9gio+Rainha+do+Brasil!5e0!3m2!1spt-BR!2sbr!4v1472235569460" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Pagina Sobre criada com sucesso!";

        $existe = Pagina::where('tipo','=','contato')->count();

        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();          
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->email = "guilherme27set@gmail.com";
        
        $paginaContato->tipo = "contato";
        $paginaContato->save();
        echo "Pagina Contato criada com sucesso!";




    }
}
