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

        $segundos = 1000000;
        $minutos = 90;
        $horas = 90;
        $dt = Carbon::now();
        
        $users = User::all();
        foreach($users as $user){
            $num=range(1,235);
            shuffle($num);
            for ($i=0; $i<rand(3,15); $i++) {      
                $tweet= Tweet::where('id', $num[$i])->first(); 
                $fecha = Carbon::parse($tweet->fecha)->addSeconds(rand(0, $segundos))->addMinutes(rand(0, $minutos))->addHours(rand(0, $horas));
                
                if($fecha->isFuture()){
                    $fecha = Carbon::now();
                }
                DB::table('tweet_user_rt')->insert([     
                    'id_tweet' => $num[$i],
                    'id_user' => $user->id,
                    'fecha_creacion' => $fecha
                ]);  
            }  
        }

    }
    
}
