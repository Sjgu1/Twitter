<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Lista;

class MiembrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach($users as $user){
            $num=range(1,Lista::all()->count());
            $num2=range(1,Lista::all()->count());
            shuffle($num);
            shuffle($num2);
            
            for ($i=0; $i<rand(2,3); $i++) { 

                    $lista = Lista::where('id',$num[$i])->first();
                    $lista2 = Lista::where('id',$num2[$i]);
                    $lista->miembros()->attach($user);

                    $lista->suscritos()->attach($user);

                
            }  
            
        }
    }
}
