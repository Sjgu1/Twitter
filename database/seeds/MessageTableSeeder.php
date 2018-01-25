<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Conversation;
use App\Message;
use App\User;
use Faker\Factory as Faker;
class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dias = 1;
        $segundos = 86400;
        DB::table('messages')->delete();
        sleep(2);
        Carbon::setLocale('es');
        
        $conversaciones = Conversation::all();
        

        foreach($conversaciones as $conversacion){
            $faker = Faker::create();


            for ($i=0; $i<rand(2,3); $i++) { 
                $mensaje = new Message([
                    'mensaje'=> $faker->emoji . $faker->emoji . $faker->emoji
                ]);
        
                $mensaje->conversacion()->associate($conversacion);
                $user = User::where('id', $conversacion->usuario1->id)->first();
                $mensaje->usuario()->associate($user);
                $mensaje->save();
                
                $mensaje = new Message([
                    'mensaje'=> $faker->emoji . $faker->emoji . $faker->emoji
                ]);
        
                $mensaje->conversacion()->associate($conversacion);
                $user = User::where('id', $conversacion->usuario2->id)->first();
                $mensaje->usuario()->associate($user);
                $mensaje->save();
        }
        

    }
      
    }
}
