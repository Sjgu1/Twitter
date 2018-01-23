<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Tweet;
use App\Categoria;


class TweetCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweet_categorias')->delete();
        sleep(2);
        
        $contador = 0;
        $categorias = Categoria::all();
        $num=range(1,Tweet::all()->count());           
        shuffle($num);
        $contador = 0;
        foreach($categorias as $categoria){
            $categoria->tweets()->attach( $num[ $contador ] );
            $contador++;
            $categoria->tweets()->attach( $num[ $contador ] );
            $contador++;

        }

    }
    
}
