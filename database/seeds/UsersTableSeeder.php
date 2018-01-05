<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        sleep(2);
        DB::table('users')->insert([     
            'name' => 'andre',
            'email' => 'andre@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'sergio',
            'email' => 'sergio@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'pepe',
            'email' => 'pepe@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'bea',
            'email' => 'bea@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alex',
            'email' => 'alex@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jorge',
            'email' => 'jorge@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'tomas',
            'email' => 'tomas@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alicia',
            'email' => 'alicia@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ana',
            'email' => 'ana@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'monica',
            'email' => 'monica@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'john',
            'email' => 'john@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'raquel',
            'email' => 'raquel@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ross',
            'email' => 'ross@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'noe',
            'email' => 'noe@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'hector',
            'email' => 'hector@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'joe',
            'email' => 'joe@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'luis',
            'email' => 'luis@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'adrian',
            'email' => 'adrian@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alvaro',
            'email' => 'alvaro@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jaume',
            'email' => 'jaume@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'omar',
            'email' => 'omar@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ramon',
            'email' => 'ramon@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'andrea',
            'email' => 'andrea@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'david',
            'email' => 'david@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'manolo',
            'email' => 'manolo@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'marcos',
            'email' => 'marcos@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'michael',
            'email' => 'michael@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'cristiano',
            'email' => 'cristiano@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'maria',
            'email' => 'maria@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'yolanda',
            'email' => 'yolanda@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'belen',
            'email' => 'belen@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jose',
            'email' => 'jose@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'julio',
            'email' => 'julio@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'larry',
            'email' => 'larry@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'erik',
            'email' => 'erik@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'laura',
            'email' => 'laura@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'blanca',
            'email' => 'blanca@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'neus',
            'email' => 'neus@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'victor',
            'email' => 'victor@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'mario',
            'email' => 'mario@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'daniel',
            'email' => 'daniel@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'tom',
            'email' => 'tom@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'joan',
            'email' => 'joan@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'lucia',
            'email' => 'lucia@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'eva',
            'email' => 'eva@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alberto',
            'email' => 'alberto@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'borja',
            'email' => 'borja@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'claudia',
            'email' => 'claudia@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'camila',
            'email' => 'camila@gmail.com', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'fran',
            'email' => 'fran@gmail.com', 
            'password' => bcrypt('123456') ]);

    }
    
}
