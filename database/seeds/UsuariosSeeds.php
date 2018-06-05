<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email','=','admin@mail.com')->count()){
            $usuario = User::where('email','=','admin@mail.com')->first();
            $usuario->name = "Cristiano Borges";
            $usuario->email = "admin@mail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }else{
            $usuario = new User();
            $usuario->name = "Cristiano Borges";
            $usuario->email = "admin@mail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }

        
    }
}
