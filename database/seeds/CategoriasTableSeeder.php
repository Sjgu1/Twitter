<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Tweet;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('categorias')->delete();
        sleep(2);

        $categoria = new Categoria([
            'name' =>  "Política"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Cine"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Actualidad"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Animales"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Informática"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Historia"
        ]);
        $categoria->save();

        $categoria = new Categoria([
            'name' =>  "Religión"
        ]);
        $categoria->save();

    
        

    }
    
}
