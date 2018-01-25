<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Conversation;
use App\User;
use App\Message;
use Faker\Factory as Faker;

class UsersConversationsTableSeeder extends Seeder
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
        DB::table('conversations')->delete();
        sleep(2);
        Carbon::setLocale('es');
        //andre-sergio

        /*
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
        ]);
        $mensaje = new Message([
            'mensaje'=> 'hey que pasa bro'
        ]);
        
        $user = User::where('email', 'andre@gmail.com')->first();
        $user2 = User::where('email', 'sergio@gmail.com')->first();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save();
        $mensaje->conversacion()->associate($conver);
        $mensaje->usuario()->associate($user);
        $mensaje->save();
        

        //sergio-bea
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $user2 = User::where('email', 'bea@gmail.com')->first();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save();

        //andre-mario
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
        ]);
        $mensaje = new Message([
            'mensaje'=> 'hey que pasa'
        ]);
        $mensaje2 = new Message([
            'mensaje'=> 'hola'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $user2 = User::where('email', 'mario@gmail.com')->first();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save();
        $mensaje->conversacion()->associate($conver);
        $mensaje->usuario()->associate($user);
        $mensaje->save();
        $mensaje2->conversacion()->associate($conver);
        $mensaje2->usuario()->associate($user2);
        $mensaje2->save();

        //sergio-raquel
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $user2 = User::where('email', 'raquel@gmail.com')->first();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save(); */
        
        $faker = Faker::create();
        $users = User::all();
        $origen = 1;
        foreach($users as $user){
            $num=range($origen,User::all()->count());
            shuffle($num);
            if($origen <=  User::all()->count()-4)
            for ($i=0; $i<rand(2,3); $i++) { 
                $user2= User::where('id', $num[$i])->first();

                    //sergio-bea
                    $conver = new Conversation([
                        'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
                    ]);
                    $conver->usuario1()->associate($user);
                    $conver->usuario2()->associate($user2);
                    $conver->save();
                
            }  
            $origen++;
        }

  
        
    }
}
