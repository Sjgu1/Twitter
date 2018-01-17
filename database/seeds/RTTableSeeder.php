<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use App\Tweet;


class RTTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweet_user_rt')->delete();
        sleep(2);

        $segundos = 100;
        $minutos = 90;
        $horas = 24;
        $dt = Carbon::now();
        
        $contador = 0;
        $users = User::all();
        foreach($users as $user){
            $num=range(1,Tweet::all()->count());           
            shuffle($num);
            $max = rand(1,5);
            $last = count($num)-1;


            for ($i = 0; $i < $max; $i++) {

                if (count($num))
                {
                    $contador++;
                    $valor = rand(0, $last );
                    $user->retweets()->attach( $num[ $valor ] );

                    $tweet= Tweet::where('id', $num[$valor])->first(); 

                    $fecha = Carbon::parse($tweet->fecha)->addSeconds(rand(0, $segundos))->addMinutes(rand(0, $minutos))->addHours(rand(0, $horas));

                    if($fecha->isFuture()){
                        $fecha = Carbon::parse($tweet->fecha)->addSeconds(rand(0, $segundos))->addMinutes(rand(0, $minutos))->addHours(rand(0, 2));
                    } 

                    if($fecha->isFuture()){
                        $fecha = Carbon::now();
                    } 
                    DB::table('tweet_user_rt')->where('id', $contador)->update(['created_at'=> $fecha]);    
                }
            }
        }
    }
    
}
