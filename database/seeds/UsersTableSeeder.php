<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Carbon::setLocale('es');

        DB::table('users')->delete();
        sleep(2);
        DB::table('users')->insert([     
            'name' => 'andre',
            'email' => 'andre@gmail.com', 
            'username' => 'andrevega', 
            'password' => bcrypt('123456'), 
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Official_Portrait_of_President_Donald_Trump.jpg/220px-Official_Portrait_of_President_Donald_Trump.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'sergio',
            'email' => 'sergio@gmail.com', 
            'username' => 'sjgu1',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/4/49/Elon_Musk_2015.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'pepe',
            'email' => 'pepe@gmail.com',
            'username' => 'pp78', 
            'password' => bcrypt('123456') ,
            'avatar' =>'http://segundoenfoque.com/wp-content/uploads/2017/12/oprah-winfrey-alerta-a-sus-fans-de-que-estn-usando-su-nombre-para-estafar-1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'bea',
            'email' => 'bea@gmail.com', 
            'username' => 'bap17',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://pbs.twimg.com/profile_images/2959799296/8adc8e7914393f0716a18e133e217dd9_400x400.jpeg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'alex',
            'email' => 'alex@gmail.com',
            'username' => 'alex_', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2017/08/homer-simpson.jpeg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'jorge',
            'email' => 'jorge@gmail.com', 
            'username' => 'j0rg3',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE5NTU2MzE2NTU1MjgxOTMx/florence-welch-20883057-1-402.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'tomas',
            'email' => 'tomas@gmail.com', 
            'username' => 'tommy',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.thesun.co.uk/wp-content/uploads/2017/06/nintchdbpict000333735414.jpg?strip=all&w=727' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'alicia',
            'email' => 'alicia@gmail.com',
            'username' => 'aliali', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.diariochaco.com/sites/diariochaco.com/files/nota_foto_tapa/2017/11/10/13/sdf-13_0.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'ana',
            'email' => 'ana@gmail.com', 
            'username' => 'ann95',
            'password' => bcrypt('123456'),
            'avatar' =>'https://o.aolcdn.com/images/dims3/GLOB/crop/3000x1500+0+105/resize/630x315!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2F8912508d99c7c568d4a161676eb5934%2F205583145%2F16765016.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'monica',
            'email' => 'monica@gmail.com',
            'username' => 'moni79', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://ksassets.timeincuk.net/wp/uploads/sites/55/2016/11/161116_BrunoMars_Press2-2.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'john',
            'email' => 'john@gmail.com',
            'username' => 'johny', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://stuki-druki.com/aforizms/Yoko_Ono02.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'raquel',
            'email' => 'raquel@gmail.com', 
            'username' => 'rachel',
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.movieweb.com/img.news.tops/NEGVQBKfnCD8KK_2_a/Beetlejuice-Movie-Facts-Trivia-List.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'ross',
            'email' => 'ross@gmail.com', 
            'username' => 'ross123',
            'password' => bcrypt('123456'),
            'avatar' =>'https://loscaprichosradio.files.wordpress.com/2014/09/nymphomaniac_lars_von_trier.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'noelia',
            'email' => 'noe@gmail.com', 
            'username' => 'noe',
            'password' => bcrypt('123456'),
            'avatar' =>'https://pbs.twimg.com/profile_images/826712998429458432/EOXWrevI.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'hector',
            'email' => 'hector@gmail.com',
            'username' => 'hgf95', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.diariochaco.com/sites/diariochaco.com/files/nota_foto_tapa/2017/12/20/9/meryl_streep_1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'joe',
            'email' => 'joe@gmail.com',
            'username' => 'joejonas', 
            'password' => bcrypt('123456') ,
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Harvey_Weinstein_2011_Shankbone.JPG/1200px-Harvey_Weinstein_2011_Shankbone.JPG' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'luis',
            'email' => 'luis@gmail.com',
            'username' => 'luispa',
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.crhoy.net/imagenes/2017/10/lupita1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'adrian',
            'email' => 'adrian@gmail.com',
            'username' => 'adri',
            'password' => bcrypt('123456'),
            'avatar' =>'http://media.rumbacaracas.com/uploads/events/2017/10/18/will-smith-9542165-1-402.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'alvaro',
            'email' => 'alvaro@gmail.com',
            'username' => 'titan',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/gta-myths/images/a/ab/Kim-Jong-Un-2016.jpg/revision/latest?cb=20171009130147',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'jaume',
            'email' => 'jaume@gmail.com', 
            'username' => 'locoxs',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/7/78/Ivanka_Trump_Berlin_April_2017.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'omar',
            'email' => 'omar@gmail.com', 
            'username' => 'omo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.thesun.co.uk/wp-content/uploads/2017/08/darren-aronofsky-640x640x80.jpg?strip=all&quality=100&w=640&h=459&crop=1' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'ramon',
            'email' => 'ramon@gmail.com',
            'username' => 'ramongh',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTIwNjA4NjM0MTk2MDM1MDg0/cloud-atlas-portraits---2012-toronto-international-film-festival.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'andrea',
            'email' => 'andrea@gmail.com', 
            'username' => 'andrea95',
            'password' => bcrypt('123456'),
            'avatar' =>'https://images-na.ssl-images-amazon.com/images/M/MV5BMTU1Mjc1MjkzNV5BMl5BanBnXkFtZTgwOTc1NDQ1ODE@._V1_UX214_CR0,0,214,317_AL_.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'david',
            'email' => 'david@gmail.com', 
            'username' => 'huevo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://fashionista.com/.image/t_share/MTI1NjQ5Mzk5NTA5NDU3Mzc0/anna-hathaway-croppedjpg.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'manolo',
            'email' => 'manolo@gmail.com',
            'username' => 'lolo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg5ODI4MTEw/barack-obama-12782369-1-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'marcos',
            'email' => 'marcos@gmail.com',
            'username' => 'polo', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Michelle_Obama_2013_official_portrait.jpg/1200px-Michelle_Obama_2013_official_portrait.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'michael',
            'email' => 'michael@gmail.com', 
            'username' => 'michel',
            'password' => bcrypt('123456'),
            'avatar' =>'http://ghk.h-cdn.co/assets/17/32/980x490/landscape-1502298247-ellen-degeneres-good-housekeeping-cover-3.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'cristiano',
            'email' => 'cristiano@gmail.com', 
            'username' => 'cr7',
            'password' => bcrypt('123456'),
            'avatar' =>'https://pbs.twimg.com/profile_images/924321078716928002/KCjE3zCE.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'maria',
            'email' => 'maria@gmail.com', 
            'username' => 'mariaG',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg2ODEzNDU0/jimmy-fallon-11818465-1-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'yolanda',
            'email' => 'yolanda@gmail.com',
            'username' => 'yolan',
            'password' => bcrypt('123456'),
            'avatar' =>'https://static.vix.com/es/sites/default/files/styles/large/public/btg/curiosidades.batanga.com/files/35-grandes-frases-de-Albert-Einstein.jpg?itok=_Y4hxQAE' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'belen',
            'email' => 'belen@gmail.com',
            'username' => 'belen16', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/8/8e/4a.jpg/revision/latest/scale-to-width-down/310?cb=20100826182731' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'jose',
            'email' => 'jose@gmail.com', 
            'username' => 'jose67',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southparkla/images/d/d8/Stanley.png/revision/latest?cb=20170918032429&path-prefix=es',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'julio',
            'email' => 'julio@gmail.com',
            'username' => 'hulio', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southparkla/images/c/c9/Eric.png/revision/latest?cb=20170911050150&path-prefix=es',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'larry',
            'email' => 'larry@gmail.com',
            'username' => 'larryRider', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette3.wikia.nocookie.net/southpark/images/9/95/Kyle-broflovski.png/revision/latest?cb=20170725131924' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'erik',
            'email' => 'erik@gmail.com', 
            'username' => 'erikson',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/b/b7/Firkle.png/revision/latest?cb=20140715201423' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'laura',
            'email' => 'laura@gmail.com',
            'username' => 'lautr',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/3/38/JeromeChef.png/revision/latest?cb=20160402120214' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'blanca',
            'email' => 'blanca@gmail.com',
            'username' => 'white',
            'password' => bcrypt('123456'),
            'avatar' =>'http://1.bp.blogspot.com/-X5UB5PEVNT4/VSyTJL_6fOI/AAAAAAAAKxk/ADXJUEzn18k/s1600/Rick%2BSanchez%2Bsociopata.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'neus',
            'email' => 'neus@gmail.com',
            'username' => 'neuspa', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://fotografias.lasexta.com/clipping/cmsimages02/2016/10/25/8D85834D-AE45-4FF3-BE75-3FFB6FB2C278/58.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'victor',
            'email' => 'victor@gmail.com',
            'username' => 'vicbarça',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/0/06/Sofia_Coppola_Cannes_2013.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'mario',
            'email' => 'mario@gmail.com', 
            'username' => 'ludo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE5NTU2MzE2MzA4MTQ1Njc1/charles-manson-9397912-2-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'daniel',
            'email' => 'daniel@gmail.com',
            'username' => 'dani95', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://sm.ign.com/ign_es/screenshot/default/harry-front_by72.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'tom',
            'email' => 'tom@gmail.com', 
            'username' => 'tomtom',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/en/4/4e/Elijah_Wood_as_Frodo_Baggins.png' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'joan',
            'email' => 'joan@gmail.com', 
            'username' => 'joanico',
            'password' => bcrypt('123456'),
            'avatar' =>'https://i2-prod.mirror.co.uk/incoming/article9764833.ece/ALTERNATES/s615/Super-Bowl-LI-New-England-Patriots-v-Atlanta-Falcons.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'lucia',
            'email' => 'lucia@gmail.com', 
            'username' => 'luciaZpl',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/George-W-Bush.jpeg/220px-George-W-Bush.jpeg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'eva',
            'email' => 'eva@gmail.com', 
            'username' => 'evi',
            'password' => bcrypt('123456'),
            'avatar' =>'http://estaticos04.elmundo.es/blogs/elmundo/sinnoticiasdedior/imagenes_posts/2013/05/27/52035_540x750.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'alberto',
            'email' => 'alberto@gmail.com',
            'username' => 'albertiko',
            'password' => bcrypt('123456'),
            'avatar' =>'https://qbitacora.files.wordpress.com/2010/08/zapatero.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'borja',
            'email' => 'borja@gmail.com',
            'username' => 'borjita', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://cronicadexalapa.com/wp-content/uploads/2017/09/it1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'claudia',
            'email' => 'claudia@gmail.com',
            'username' => 'clauperez',
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.arteamigo.com/2017/manu_cabanas/fotos/7.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'camila',
            'email' => 'camila@gmail.com', 
            'username' => 'cam2000',
            'password' => bcrypt('123456'),
            'avatar' =>'http://23.253.41.33/imagesPosts/11_Genesis_P-O_(circa_2000s)_465_465_int.jpg',
            'created_at' => Carbon::now('Europe/Madrid')]);
        DB::table('users')->insert([     
            'name' => 'fran',
            'email' => 'fran@gmail.com', 
            'username' => 'franchu',
            'password' => bcrypt('123456'),
            'avatar' =>'http://comedycentral.mtvnimages.com/press_images/southpark/Wendy2.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid')]);

    }
    
}
