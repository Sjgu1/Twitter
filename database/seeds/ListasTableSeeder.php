<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Lista;

class ListasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->delete();
        $lista = new Lista([
            'nombre'=>'prueba',
            'descripcion'=>'lista de prueba'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $lista->usuario()->associate($user);
        $lista->save();
    }
}
