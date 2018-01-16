<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Conversation;
use App\User;

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
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $user2 = User::where('email', 'sergio@gmail.com')->first();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save();
        
    }
}
