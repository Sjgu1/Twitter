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
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Nadie te puede hacer sentir inferior sin tu consentimiento.-Eleanor Roosevelt.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/kartandtinki1_photo-wallpapers_02.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'sergio',
            'email' => 'sergio@gmail.com', 
            'username' => 'sjgu1',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/4/49/Elon_Musk_2015.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Estudia el pasado si quieres predecir el futuro.-Confucio.',
            'fondo'=> 'https://images7.alphacoders.com/411/thumb-1920-411820.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'pepe',
            'email' => 'pepe@gmail.com',
            'username' => 'pp78', 
            'password' => bcrypt('123456') ,
            'avatar' =>'http://segundoenfoque.com/wp-content/uploads/2017/12/oprah-winfrey-alerta-a-sus-fans-de-que-estn-usando-su-nombre-para-estafar-1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Donde hay educación no hay distinción de clases.-Confucio.',
            'fondo'=> 'https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'bea',
            'email' => 'bea@gmail.com', 
            'username' => 'bap17',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://pbs.twimg.com/profile_images/2959799296/8adc8e7914393f0716a18e133e217dd9_400x400.jpeg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Cada cosa tiene su belleza, pero no todos pueden verla.-Confucio.',
            'fondo'=>  'https://www.planwallpaper.com/static/images/wallpapers-7020-7277-hd-wallpapers.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'alex',
            'email' => 'alex@gmail.com',
            'username' => 'alex_', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2017/08/homer-simpson.jpeg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La libertad está en ser dueños de nuestra propia vida.-Platón.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/6903949-full-hd-wallpapers-27699.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'jorge',
            'email' => 'jorge@gmail.com', 
            'username' => 'j0rg3',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE5NTU2MzE2NTU1MjgxOTMx/florence-welch-20883057-1-402.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Debemos dejar ir la vida que habíamos planeado para tener la vida que nos espera – Joseph Campbell.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Wallpaper_1080p_68.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'tomas',
            'email' => 'tomas@gmail.com', 
            'username' => 'tommy',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.thesun.co.uk/wp-content/uploads/2017/06/nintchdbpict000333735414.jpg?strip=all&w=727' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Sé feliz mientras estás viviendo, porque estás muerto hace tiempo – Proverbio escocés.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/wallpaper-full-hd-3d.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'alicia',
            'email' => 'alicia@gmail.com',
            'username' => 'aliali', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.diariochaco.com/sites/diariochaco.com/files/nota_foto_tapa/2017/11/10/13/sdf-13_0.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Amarse a uno mismo es el comienzo de un romance de por vida – Oscar Wilde.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Galaxy-Wallpaper-Space-Full-HD.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'ana',
            'email' => 'ana@gmail.com', 
            'username' => 'ann95',
            'password' => bcrypt('123456'),
            'avatar' =>'https://o.aolcdn.com/images/dims3/GLOB/crop/3000x1500+0+105/resize/630x315!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2F8912508d99c7c568d4a161676eb5934%2F205583145%2F16765016.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La incertidumbre es la única certeza que existe, y saber vivir con inseguridad es la única seguridad – John Allen Paulos.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/full_hd_wallpapers_45_21.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'monica',
            'email' => 'monica@gmail.com',
            'username' => 'moni79', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://ksassets.timeincuk.net/wp/uploads/sites/55/2016/11/161116_BrunoMars_Press2-2.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-He descubierto que si amas la vida, la vida te amará de vuelta – Arthur Rubinstein.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/ComputerDesktopWallpapersCollection540_047_inxQEjv.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'john',
            'email' => 'john@gmail.com',
            'username' => 'johny', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://stuki-druki.com/aforizms/Yoko_Ono02.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-No juzgues cada día por lo que cosechas, sino por las semillas que plantas – Robert Louis Stevenson.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/city-under-construction-1080p-full-hd-wallpaper.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'raquel',
            'email' => 'raquel@gmail.com', 
            'username' => 'rachel',
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.movieweb.com/img.news.tops/NEGVQBKfnCD8KK_2_a/Beetlejuice-Movie-Facts-Trivia-List.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Siempre me gusta mirar el lado optimista de la vida, pero soy lo suficientemente realista como para saber que la vida es un asunto complejo.-Walt Disney.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/1424006.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'ross',
            'email' => 'ross@gmail.com', 
            'username' => 'ross123',
            'password' => bcrypt('123456'),
            'avatar' =>'https://loscaprichosradio.files.wordpress.com/2014/09/nymphomaniac_lars_von_trier.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Cuanto más elogies y celebres tu vida, más hay en la vida para celebrar.-Oprah Winfrey.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/1379596.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'noelia',
            'email' => 'noe@gmail.com', 
            'username' => 'noe',
            'password' => bcrypt('123456'),
            'avatar' =>'https://pbs.twimg.com/profile_images/826712998429458432/EOXWrevI.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Por muy difícil que parezca la vida, siempre hay algo que puedes hacer y tener éxito.-Stephen Hawking.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/bicycle-1280x720_GJH2U2u.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'hector',
            'email' => 'hector@gmail.com',
            'username' => 'hgf95', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.diariochaco.com/sites/diariochaco.com/files/nota_foto_tapa/2017/12/20/9/meryl_streep_1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Mi misión en la vida no es meramente sobrevivir, sino prosperar, y hacerlo con pasión, compasión, humor y estilo.-Maya Angelou.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/beach-resorts-wallpaper-hd1.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'joe',
            'email' => 'joe@gmail.com',
            'username' => 'joejonas', 
            'password' => bcrypt('123456') ,
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Harvey_Weinstein_2011_Shankbone.JPG/1200px-Harvey_Weinstein_2011_Shankbone.JPG' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Toda la vida es picos y valles. No dejes que los picos lleguen demasiado alto y los valles demasiado bajo.-John Wooden.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/3d-wallpaper-hd.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'luis',
            'email' => 'luis@gmail.com',
            'username' => 'luispa',
            'password' => bcrypt('123456'),
            'avatar' =>'https://cdn.crhoy.net/imagenes/2017/10/lupita1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Si la vida fuera predecible dejaría de ser vida y sería sin sabor.-Eleanor Roosevelt.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/a601cb579cc9a289bc51cd41d8bcf478_large.jpeg'
            ]);
        DB::table('users')->insert([     
            'name' => 'adrian',
            'email' => 'adrian@gmail.com',
            'username' => 'adri',
            'password' => bcrypt('123456'),
            'avatar' =>'http://media.rumbacaracas.com/uploads/events/2017/10/18/will-smith-9542165-1-402.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Un hombre que se atreve a perder una hora de su tiempo no ha descubierto el valor de la vida.-Charles Darwin.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/hd_wallpapers_forbackground_2015_ITWlK4F.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'alvaro',
            'email' => 'alvaro@gmail.com',
            'username' => 'titan',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/gta-myths/images/a/ab/Kim-Jong-Un-2016.jpg/revision/latest?cb=20171009130147',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> 'No me apetece poner descripción',
            'fondo'=> 'https://www.planwallpaper.com/static/images/fall-leaves-images-hd-wallpaper-1080p1.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'jaume',
            'email' => 'jaume@gmail.com', 
            'username' => 'locoxs',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/7/78/Ivanka_Trump_Berlin_April_2017.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Sólo estás aquí para una breve visita. No te apures, no te preocupes. Y asegúrate de oler las flores a lo largo del camino.-Walter Hagen.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/City_Wallpaper_1080p_9.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'omar',
            'email' => 'omar@gmail.com', 
            'username' => 'omo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.thesun.co.uk/wp-content/uploads/2017/08/darren-aronofsky-640x640x80.jpg?strip=all&quality=100&w=640&h=459&crop=1' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '–La vida es como montar en bicicleta. Para mantener el equilibrio debes seguir adelante.-Albert Einstein.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/1080p-Wallpapers.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'ramon',
            'email' => 'ramon@gmail.com',
            'username' => 'ramongh',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTIwNjA4NjM0MTk2MDM1MDg0/cloud-atlas-portraits---2012-toronto-international-film-festival.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida es una aventura atrevida o nada en absoluto.-Helen Keller.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/_downloadfiles_wallpapers_1920_1080_colors_explosion_wallpaper_abstract_3d_45.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'andrea',
            'email' => 'andrea@gmail.com', 
            'username' => 'andrea95',
            'password' => bcrypt('123456'),
            'avatar' =>'https://images-na.ssl-images-amazon.com/images/M/MV5BMTU1Mjc1MjkzNV5BMl5BanBnXkFtZTgwOTc1NDQ1ODE@._V1_UX214_CR0,0,214,317_AL_.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La mayor aventura que puedes tener es vivir la vida de tus sueños.-Oprah Winfrey.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/6999064-indian-beach-wallpaper_XEK3Udy.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'david',
            'email' => 'david@gmail.com', 
            'username' => 'huevo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://fashionista.com/.image/t_share/MTI1NjQ5Mzk5NTA5NDU3Mzc0/anna-hathaway-croppedjpg.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Toda vida es un experimento. Cuantos más experimentos haces, mejor.-Ralph Waldo Emerson.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Seamless-Polygon-Backgrounds-Vol2-full.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'manolo',
            'email' => 'manolo@gmail.com',
            'username' => 'lolo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg5ODI4MTEw/barack-obama-12782369-1-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Hay tres constantes en la vida… cambio, opciones y principios.-Stephen Covey.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/colorful-triangles-background.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'marcos',
            'email' => 'marcos@gmail.com',
            'username' => 'polo', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Michelle_Obama_2013_official_portrait.jpg/1200px-Michelle_Obama_2013_official_portrait.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Hay más en la vida que incrementar su velocidad.-Mahatma Gandhi.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/6944150-abstract-colors-wallpaper.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'michael',
            'email' => 'michael@gmail.com', 
            'username' => 'michel',
            'password' => bcrypt('123456'),
            'avatar' =>'http://ghk.h-cdn.co/assets/17/32/980x490/landscape-1502298247-ellen-degeneres-good-housekeeping-cover-3.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La única discapacidad en la vida es una mala actitud.-Scott Hamilton.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/ZhGEqAP.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'cristiano',
            'email' => 'cristiano@gmail.com', 
            'username' => 'cr7',
            'password' => bcrypt('123456'),
            'avatar' =>'https://pbs.twimg.com/profile_images/924321078716928002/KCjE3zCE.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida es 10% lo que te ocurre y 90% cómo respondes a ello.-Lou Holtz.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Live-Wallpaper-1.jpeg'
            ]);
        DB::table('users')->insert([     
            'name' => 'maria',
            'email' => 'maria@gmail.com', 
            'username' => 'mariaG',
            'password' => bcrypt('123456') ,
            'avatar' =>'https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzg2ODEzNDU0/jimmy-fallon-11818465-1-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-El día más grande de nuestra vida es cuando tomamos responsabilidad total por nuestras actitudes. Es el día en que realmente crecemos.-John C. Maxwell.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Wallpaper-HD-10.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'yolanda',
            'email' => 'yolanda@gmail.com',
            'username' => 'yolan',
            'password' => bcrypt('123456'),
            'avatar' =>'https://static.vix.com/es/sites/default/files/styles/large/public/btg/curiosidades.batanga.com/files/35-grandes-frases-de-Albert-Einstein.jpg?itok=_Y4hxQAE' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida es inherentemente arriesgada. Solo hay un riesgo mayor que deberías evitar, y es el riesgo de no hacer nada.-Denis Waitley.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/blue-abstract-glass-balls.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'belen',
            'email' => 'belen@gmail.com',
            'username' => 'belen16', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/8/8e/4a.jpg/revision/latest/scale-to-width-down/310?cb=20100826182731' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La salud es el regalo más grande, la satisfacción de la mayor riqueza, la fidelidad de la mejor relación.-Buda.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/555837.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'jose',
            'email' => 'jose@gmail.com', 
            'username' => 'jose67',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southparkla/images/d/d8/Stanley.png/revision/latest?cb=20170918032429&path-prefix=es',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La buena vida es inspirada por amor y guiada por el conocimiento.-Bertrand Russell.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/HD-Wallpapers1.jpeg'
            ]);
        DB::table('users')->insert([     
            'name' => 'julio',
            'email' => 'julio@gmail.com',
            'username' => 'hulio', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southparkla/images/c/c9/Eric.png/revision/latest?cb=20170911050150&path-prefix=es',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-El propósito de nuestra vida es ser feliz.-Dalai Lama.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/Technology-Wallpaper-14.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'larry',
            'email' => 'larry@gmail.com',
            'username' => 'larryRider', 
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette3.wikia.nocookie.net/southpark/images/9/95/Kyle-broflovski.png/revision/latest?cb=20170725131924' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La cosa más importante de la vida es disfrutarla, ser feliz, es todo lo que importa.-Audrey Hepburn.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/11-sea-beach-sand-wallpaper_sf9i1b6.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'erik',
            'email' => 'erik@gmail.com', 
            'username' => 'erikson',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/b/b7/Firkle.png/revision/latest?cb=20140715201423' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Solo vives una vez, pero si lo haces bien, una vez es suficiente.-Mae West.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/kartandtinki1_photo-wallpapers_02.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'laura',
            'email' => 'laura@gmail.com',
            'username' => 'lautr',
            'password' => bcrypt('123456'),
            'avatar' =>'https://vignette.wikia.nocookie.net/southpark/images/3/38/JeromeChef.png/revision/latest?cb=20160402120214' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Al final, no cuentan los años de tu vida. Cuenta la vida en tu años.-Abraham Lincoln.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/black_hd_wallpaper_black_hd_wallpaper.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'blanca',
            'email' => 'blanca@gmail.com',
            'username' => 'white',
            'password' => bcrypt('123456'),
            'avatar' =>'http://1.bp.blogspot.com/-X5UB5PEVNT4/VSyTJL_6fOI/AAAAAAAAKxk/ADXJUEzn18k/s1600/Rick%2BSanchez%2Bsociopata.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-No recordamos días, recordamos momentos.-Cesare Pavese.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/6944150-abstract-colors-wallpaper.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'neus',
            'email' => 'neus@gmail.com',
            'username' => 'neuspa', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://fotografias.lasexta.com/clipping/cmsimages02/2016/10/25/8D85834D-AE45-4FF3-BE75-3FFB6FB2C278/58.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida es realmente simple, pero insistimos en hacerla complicada.-Confucio.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/wallpaper-11628192.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'victor',
            'email' => 'victor@gmail.com',
            'username' => 'vicbarça',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/0/06/Sofia_Coppola_Cannes_2013.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida no es un problema a ser resuelto, sino una realidad a ser experimentada.-Soren Kierkegaard.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/i-should-buy-a-boat.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'mario',
            'email' => 'mario@gmail.com', 
            'username' => 'ludo',
            'password' => bcrypt('123456'),
            'avatar' =>'https://www.biography.com/.image/t_share/MTE5NTU2MzE2MzA4MTQ1Njc1/charles-manson-9397912-2-402.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-El trabajo te da significado y propósito y la vida esta vacía sin el.-Stephen Hawking.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/2022725-wallpaper_625864_Iz6NK8G.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'daniel',
            'email' => 'daniel@gmail.com',
            'username' => 'dani95', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://sm.ign.com/ign_es/screenshot/default/harry-front_by72.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Cada minuto que estas cabreado pierdes sesenta segundos de felicidad.-Ralph Waldo Emerson.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/79438-blue-world-map.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'tom',
            'email' => 'tom@gmail.com', 
            'username' => 'tomtom',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/en/4/4e/Elijah_Wood_as_Frodo_Baggins.png' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La libertad está en ser dueños de nuestra propia vida.-Platón.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/303836.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'joan',
            'email' => 'joan@gmail.com', 
            'username' => 'joanico',
            'password' => bcrypt('123456'),
            'avatar' =>'https://i2-prod.mirror.co.uk/incoming/article9764833.ece/ALTERNATES/s615/Super-Bowl-LI-New-England-Patriots-v-Atlanta-Falcons.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La pregunta real no es si la vida existe antes de la muerte. La pregunta real es si estas vivo antes de la muerte.-Osho.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/abstract_wallpaper_xVBXbWX.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'lucia',
            'email' => 'lucia@gmail.com', 
            'username' => 'luciaZpl',
            'password' => bcrypt('123456'),
            'avatar' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/George-W-Bush.jpeg/220px-George-W-Bush.jpeg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-A veces podemos pasarnos años sin vivir en absoluto, y de pronto toda nuestra vida se concentra en un solo instante.-Oscar Wilde.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/fire_fist_vs_water_fist-wallpaper-1920x1080.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'eva',
            'email' => 'eva@gmail.com', 
            'username' => 'evi',
            'password' => bcrypt('123456'),
            'avatar' =>'http://estaticos04.elmundo.es/blogs/elmundo/sinnoticiasdedior/imagenes_posts/2013/05/27/52035_540x750.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-Al igual que el coraje pone en peligro la vida, el miedo la protege.-Leonardo da Vinci.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/black-and-blue-cubes-wallpaper1.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'alberto',
            'email' => 'alberto@gmail.com',
            'username' => 'albertiko',
            'password' => bcrypt('123456'),
            'avatar' =>'https://qbitacora.files.wordpress.com/2010/08/zapatero.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '-La vida es agradable. La muerte es pacífica. Es la transición la que es problemática.-Isaac Asimov.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/city_of_love-wallpaper-5120x3200.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'borja',
            'email' => 'borja@gmail.com',
            'username' => 'borjita', 
            'password' => bcrypt('123456'),
            'avatar' =>'http://cronicadexalapa.com/wp-content/uploads/2017/09/it1.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> 'Vive como si fueras a morir mañana, aprende como si fueras a vivir para siempre.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/b807c2282ab0a491bd5c5c1051c6d312_k4PiHxO.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'claudia',
            'email' => 'claudia@gmail.com',
            'username' => 'clauperez',
            'password' => bcrypt('123456'),
            'avatar' =>'http://www.arteamigo.com/2017/manu_cabanas/fotos/7.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> 'La vida es lo que pasa mientras estas ocupado haciendo otros planes.',
            'fondo'=> 'https://www.planwallpaper.com/static/images/wallpapers-7020-7277-hd-wallpapers.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'camila',
            'email' => 'camila@gmail.com', 
            'username' => 'cam2000',
            'password' => bcrypt('123456'),
            'avatar' =>'http://23.253.41.33/imagesPosts/11_Genesis_P-O_(circa_2000s)_465_465_int.jpg',
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> '–La vida no trata de encontrarse a uno mismo, sino de crearse a uno mismo.-GeorgeBernard Shaw.',
            'fondo'=> 'https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg'
            ]);
        DB::table('users')->insert([     
            'name' => 'fran',
            'email' => 'fran@gmail.com', 
            'username' => 'franchu',
            'password' => bcrypt('123456'),
            'avatar' =>'http://comedycentral.mtvnimages.com/press_images/southpark/Wendy2.jpg' ,
            'created_at' => Carbon::now('Europe/Madrid'),
            'descripcion'=> 'El destino de los hombres no está hecho de momentos felices, toda la vida los tiene, sino de épocas felices.',
            'fondo'=> 'https://images7.alphacoders.com/411/thumb-1920-411820.jpg'
            ]);

    }
    
}
