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
            'username' => 'andrevega', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'sergio',
            'email' => 'sergio@gmail.com', 
            'username' => 'sjgu1',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'pepe',
            'email' => 'pepe@gmail.com',
            'username' => 'pp78', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'bea',
            'email' => 'bea@gmail.com', 
            'username' => 'bap17',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alex',
            'email' => 'alex@gmail.com',
            'username' => 'alex_', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jorge',
            'email' => 'jorge@gmail.com', 
            'username' => 'j0rg3',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'tomas',
            'email' => 'tomas@gmail.com', 
            'username' => 'tommy',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alicia',
            'email' => 'alicia@gmail.com',
            'username' => 'aliali', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ana',
            'email' => 'ana@gmail.com', 
            'username' => 'ann95',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'monica',
            'email' => 'monica@gmail.com',
            'username' => 'moni79', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'john',
            'email' => 'john@gmail.com',
            'username' => 'johny', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'raquel',
            'email' => 'raquel@gmail.com', 
            'username' => 'rachel',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ross',
            'email' => 'ross@gmail.com', 
            'username' => 'ross123',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'noelia',
            'email' => 'noe@gmail.com', 
            'username' => 'noe',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'hector',
            'email' => 'hector@gmail.com',
            'username' => 'hgf95', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'joe',
            'email' => 'joe@gmail.com',
            'username' => 'joejonas', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'luis',
            'email' => 'luis@gmail.com',
            'username' => 'luispa',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'adrian',
            'email' => 'adrian@gmail.com',
            'username' => 'adri',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alvaro',
            'email' => 'alvaro@gmail.com',
            'username' => 'titan',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jaume',
            'email' => 'jaume@gmail.com', 
            'username' => 'locoxs',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'omar',
            'email' => 'omar@gmail.com', 
            'username' => 'omo',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'ramon',
            'email' => 'ramon@gmail.com',
            'username' => 'ramongh',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'andrea',
            'email' => 'andrea@gmail.com', 
            'username' => 'andrea95',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'david',
            'email' => 'david@gmail.com', 
            'username' => 'huevo',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'manolo',
            'email' => 'manolo@gmail.com',
            'username' => 'lolo',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'marcos',
            'email' => 'marcos@gmail.com',
            'username' => 'polo', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'michael',
            'email' => 'michael@gmail.com', 
            'username' => 'michel',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'cristiano',
            'email' => 'cristiano@gmail.com', 
            'username' => 'cr7',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'maria',
            'email' => 'maria@gmail.com', 
            'username' => 'mariaG',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'yolanda',
            'email' => 'yolanda@gmail.com',
            'username' => 'yolan',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'belen',
            'email' => 'belen@gmail.com',
            'username' => 'belen16', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'jose',
            'email' => 'jose@gmail.com', 
            'username' => 'jose67',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'julio',
            'email' => 'julio@gmail.com',
            'username' => 'hulio', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'larry',
            'email' => 'larry@gmail.com',
            'username' => 'larryRider', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'erik',
            'email' => 'erik@gmail.com', 
            'username' => 'erikson',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'laura',
            'email' => 'laura@gmail.com',
            'username' => 'lautr',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'blanca',
            'email' => 'blanca@gmail.com',
            'username' => 'white',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'neus',
            'email' => 'neus@gmail.com',
            'username' => 'neuspa', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'victor',
            'email' => 'victor@gmail.com',
            'username' => 'vicbarça',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'mario',
            'email' => 'mario@gmail.com', 
            'username' => 'ludo',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'daniel',
            'email' => 'daniel@gmail.com',
            'username' => 'dani95', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'tom',
            'email' => 'tom@gmail.com', 
            'username' => 'tomtom',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'joan',
            'email' => 'joan@gmail.com', 
            'username' => 'joanico',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'lucia',
            'email' => 'lucia@gmail.com', 
            'username' => 'luciaZpl',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'eva',
            'email' => 'eva@gmail.com', 
            'username' => 'evi',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'alberto',
            'email' => 'alberto@gmail.com',
            'username' => 'albertiko',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'borja',
            'email' => 'borja@gmail.com',
            'username' => 'borjita', 
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'claudia',
            'email' => 'claudia@gmail.com',
            'username' => 'clauperez',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'camila',
            'email' => 'camila@gmail.com', 
            'username' => 'cam2000',
            'password' => bcrypt('123456') ]);
        DB::table('users')->insert([     
            'name' => 'fran',
            'email' => 'fran@gmail.com', 
            'username' => 'franchu',
            'password' => bcrypt('123456') ]);

    }
    
}
