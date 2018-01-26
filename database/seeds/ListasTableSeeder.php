<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Lista;
use Faker\Factory as Faker;

class ListasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listas')->delete();
        /*$lista = new Lista([
            'nombre'=>'prueba',
            'descripcion'=>'lista de prueba'
        ]);
        $lista2 = new Lista([
            'nombre'=>'lista2',
            'descripcion'=>'lista de prueba'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $user2 = User::where('email', 'mario@gmail.com')->first();
        $user3 = User::where('email', 'sergio@gmail.com')->first();
        $lista->usuario()->associate($user);
        $lista->save();
        $lista->miembros()->attach($user2);
        $lista->suscritos()->attach($user2);
        $lista2->usuario()->associate($user);
        $lista2->save();

        //2
        $lista = new Lista([
            'nombre'=>'pruebaSER',
            'descripcion'=>'lista de sergio'
        ]);
        $lista2 = new Lista([
            'nombre'=>'listaSer',
            'descripcion'=>'lista de sergio'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $user2 = User::where('email', 'mario@gmail.com')->first();
        $lista->usuario()->associate($user);
        $lista->save();
        $lista->miembros()->attach($user2);
        $lista2->usuario()->associate($user);
        $lista2->save();*/
        
        $users = User::all();
        foreach($users as $user){
            $faker = Faker::create();
            $num=range(1,User::all()->count());
            shuffle($num);
            
            for ($i=0; $i<rand(2,3); $i++) { 

                    $lista = new Lista([
                        'nombre'=>$faker->word,
                        'descripcion'=>$faker->word . ' ' . $faker->word
                    ]);
                    $lista->usuario()->associate($user);
                    $lista->save();
                
            }  
            
        }
    }
}
