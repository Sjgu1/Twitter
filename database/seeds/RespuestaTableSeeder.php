<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Tweet;


class RespuestaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tweets = Tweet::all();
        foreach($tweets as $tweet){
            $num=range(1,Tweet::all()->count());           
            shuffle($num);
            $max = rand(0,2);
            $last = count($num)-1;


            for ($i = 0; $i < $max; $i++) {               
                    //$valor = rand(0, $last );
                    $tweet->respuestas()->save( Tweet::find($num[$i]) );
                
            }
        }

    }
    
}
