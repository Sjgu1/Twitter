<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TweetsTableSeeder::class);
        $this->call(SeguidoresTableSeeder::class);
        $this->call(RTTableSeeder::class);
        $this->call(LikeTableSeeder::class);
        $this->call(RespuestaTableSeeder::class);  
        $this->call(CategoriasTableSeeder::class);
        $this->call(TweetCategoriasTableSeeder::class);
        $this->call(UsersConversationsTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(ListasTableSeeder::class);
        $this->call(MiembrosTableSeeder::class);


    }
}
