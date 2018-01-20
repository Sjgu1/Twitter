<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Tweet;
use App\User;
use Faker\Factory as Faker;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dias = 5;
        $segundos = 86400;

        //$dias = 1;

        DB::table('tweets')->delete();
        sleep(2);
        Carbon::setLocale('es');

        //USUARIO: andre
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'On behalf of the American people, THANK YOU to our incredible law enforcement officers. As President of the United States - I will fight for you, and I will never, ever let you down. Now, more than ever, we must support the men and women in blue! '
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'We are fighting for our farmers, for our country, and for our GREAT AMERICAN FLAG. We want our flag respected - and we want our NATIONAL ANTHEM respected also!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'In every decision we make, we are honoring America’s PROUD FARMING LEGACY. Years of crushing taxes, crippling regs, & corrupt politics left our communities hurting, our economy stagnant, & millions of hardworking Americans COMPLETELY FORGOTTEN. But they are not forgotten ANYMORE!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'We have been working every day to DELIVER for America’s Farmers just as they work every day to deliver FOR US. #AFBF18'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'African American unemployment is the lowest ever recorded in our country. The Hispanic unemployment rate dropped a full point in the last year and is close to the lowest in recorded history. Dems did nothing for you but get your vote!  #NeverForget  @foxandfriends'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '...Clinton in the WH, doubling down on Barack Obama’s failed policies, washes away any doubts that America made the right choice. This was truly a change election — and the changes Trump is bringing are far-reaching & necessary.” Thank you Michael Goodwin!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'The Stock Market has been creating tremendous benefits for our country in the form of not only Record Setting Stock Prices, but present and future Jobs, Jobs, Jobs. Seven TRILLION dollars of value created since our big election win!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'The Fake News Awards, those going to the most corrupt & biased of the Mainstream Media, will be presented to the losers on Wednesday, January 17th, rather than this coming Monday. The interest in, and importance of, these awards is far greater than anyone could have anticipated!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Jake Tapper of Fake News CNN just got destroyed in his interview with Stephen Miller of the Trump Administration. Watch the hatred and unfairness of this CNN flunky!'
        ]);
        $user = User::where('email', 'andre@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //USUARIO: SERGIO
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '"To all the little girls watching...never doubt that you are valuable and powerful & deserving of every chance & opportunity in the world."'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Families across America had to start 2018 worried that their kids wouldn’t have health care. Failing to act now shows the true face of Republicans & their donor-driven immoral agenda. You control the Senate agenda @SenateMajLdr. Enough is enough.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Time to bring CHIP to the Senate floor as promised. This alleged extension until March doesn’t cut it as states freeze enrollment & send out letters warning that coverage will end. This is frightening to parents & wreaks havoc for states.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'The Iranian people, especially the young, are protesting for the freedom and future they deserve. I hope their government responds peacefully and supports their hopes.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Retweet if you agree it’s totally crazy to suggest that the FBI — having helped sink Hillary’s campaign by revealing that she was under investigation while concealing that Trump was being investigated — has secretly been anti-Trump all along.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Thank you to everyone who has donated to Onward Together in our first year -- we’re only able to support these great groups because of you. Let’s do even more in 2018. Onward!'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'And with the help of @collectivepac, 23 African-American candidates have been elected to local, state, and federal offices since August 2016.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'More than 400 students and leaders met last month at the @votolatino Power Summit to share resources and tools for national advocacy.'
        ]);
        $user = User::where('email', 'sergio@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //USUARIO: PEPE
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'The more we are rooted in Christ, the more we rediscover interior peace, even in the midst of daily challenges.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'A joyful soul is like healthy soil in which life can thrive and produce good fruit.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Let us share the joy of our Christian brothers and sisters of the East who are celebrating Christmas today.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Like the Magi, believers are led by faith to seek God in the most hidden places, knowing that the Lord waits for them there.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'God walks along the dusty paths of our lives and responds to our longing for love and happiness by calling us to joy.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'God became a child to be closer to the men and women of every time, and to show us His infinite tenderness.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'In the name of Jesus, with our witness, we can prove that peace is possible.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Let us nurture the seeds of peace as they grow and let us transform our cities into workshops of peace.'
        ]);
        $user = User::where('email', 'pepe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        
        //USUARIO: BEA

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Manuel Cortés en Málaga no os lo podéis perder'
        ]);
        $user = User::where('email', 'bea@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Una vez más puedo DEMOSTRAR que hay personajillos que MIENTEN y faltan a la verdad con tal de desprestigiarme a toda costa #seteveelplumero'
        ]);
        $user = User::where('email', 'bea@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mañana en la gala de @ghoficial comienza la recta final y también comienza la Navidad allí estaré'
        ]);
        $user = User::where('email', 'bea@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mañana a partir de las 20h en Canarias podréis ver el anuncio que grabe para @flamencanarias y la web de @diariodeavisos @miramecanarias'
        ]);
        $user = User::where('email', 'bea@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: Alex
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Nou èxit al V Curs de Capacitació per a lEnsenyament en Valencià i Llengües Estrangeres.'
        ]);
        $user = User::where('email', 'alex@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Enguany commemorem el centenari del naixement de Francesc #FerrerPastor, un homenot del nostre país, lexicògraf i autor dun dels diccionaris més venuts a casa nostra. La Plataforma per la Llengua preparem una #auca per explicar al jovent el seu llegat.'
        ]);
        $user = User::where('email', 'alex@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#memòriahistòrica Iniciem un Club de lectura sobre Literatura Catalana i camps de concentració. 1a sessió #27gener Dia Internacional en Memòria de les Víctimes de lHolocaust. Llegim debatem, aprenem!'
        ]);
        $user = User::where('email', 'alex@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //USUARIO: Jorge

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '¡Trabaja en la Universidad de Alicante! Nueva convocatoria de plazas de profesorado en: #derecho #arquitectura #enfermería #biotecnología #filología #lengua... https://s.ua.es/uSLy  #empleo #docencia #UA'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Work in progress!Suerte,  ánimo y fuerza 💪💪💪'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mucho ánimo a todos los que estáis de exámenes! 🍀  @UA_Universidad'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Son nuestra ventana al mundo. Hoy hemos dado la bienvenida al 2018 junto a los medios de comunicación en la @SedeAlicante_UA y deseado lo mejor en este nuevo año que comenzamos.'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#Felizmartes. #TalDíaComoHoy Simone de Beauvoir cumpliría 110 años. Es un gran día para recordar una de sus frases'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'La UA desarrolla un sistema autónomo para potabilizar agua con energía solar https://s.ua.es/u3fU '
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: Tommy
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '🇪🇸 España se sitúa como el 2° país más visitado del mundo con más de 82 millones de turistas internacionales. España es 🌞🏖️🏕️🏰🎢🛍️🎭🎨🎉🏍️🎣⚽🏀🎾🎶🎤🎬📚🔝🍤🍷💞... Es SEGURA. '
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '¿Sabes que está siendo víctima de explotación sexual? ¡No te calles! Puedes aportar información de manera confidencial ante agentes especializados #ContraLaTrata #ColaboraciónCiudadana'
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#QuéHacerEnUnAtentado Sigue estas pautas, podrían salvarte la vida. Mira y comparte.'
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Por fin es viernes! No olvides cerrar tus sesiones cuando salgas del curro y haz copia de seguridad de tus archivos #FelizViernes'
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '⚡️ “Este fue nuestro día. Gracias por compartirlo. Hasta mañana.”'
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Detenido por injurias y calumnias a la Corona y al Fiscal General del Estado en Twitter y YouTube.SIEMPRE, #Respeto (Las redes no son un territorio sin ley)'
        ]);
        $user = User::where('email', 'tomas@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: alicia
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'También dibujaron comida ,libros y un hospital.'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Habla por vos Emilio ,no proyectes tus mierdas en nosotras .'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Señorcitos que no entienden las consecuencias de las burlas aquí tienen un shot de realidad .'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Lo que nos ha unido Muriel Santa Ana tiene nombre,se llama sororidad. Aguante convicción empatía hermandad militancia amor ...'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Último momento : hay personas que tienen miedo a que los tipos tengan miedo de violar ,reiteramos .'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Sino leiste este libro todavia,qué estas esperando? #TeoriaKingKong] #VirginieDespentes Feminismo de y para las Putas. 💪'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Y como soy jodida vengo a pedir que dejemos de usar el color negro como símbolo de todo lo peor.'
        ]);
        $user = User::where('email', 'alicia@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: ana
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Se enoja Eduardo y vos tipo.... juaaaa'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mis llorisqueos te referís a cuando hablo de femicidios, violacion o abortó? Podrías especificar?'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Aplaudo a @juliamengo que desde el año pasado viene hablando de esto y nadie se animo a acompañarla. Ningún periodista ni organización! Las sociedades científicas de pediatría repudiaron el convenio del Ministerio de Educación con Abel Albino http://bit.ly/2mido3D  v'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Jaajajajajaja es obvio que es trucada edu no tenias que ponerte así'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Detesto los que dicen "ya no se puede decir nada" Si, poder se puede todo, pero no pretendas se todo el mundo aplauda tus idioteces'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Si no te bancas a los ofendidos, del lado de que sean, derecha o izquierda, cambia de trabajo. Pero porfa deja de llorar, es desagradable.'
        ]);
        $user = User::where('email', 'ana@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: monica
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Aquellos eran días de recuerdos aún no creados.Eran memoria viva para el recuerdo de los días que estaban por venir. #microcuento'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Selfie.#concepto'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Para este 2018 me he propuesto decir más “ni fu, ni fa”. Hay que decirlo más.'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Yes!!!!'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Inspiracional, emotiva, fortaleza. Escuchen a @Oprah'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Cuántas veces se puede desayunar el día de Reyes?Es para un amigo.'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'A mí los Reyes me ha echado de casa rumbo a mis vacaciones. #yesssssss'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'no!!!!!!!!'
        ]);
        $user = User::where('email', 'monica@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: Jhon
        $username= "john@gmail.com";
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '“Con las ganas” cumple 12 años y lo celebra saliendo por la tele.Esta noche, en @OT_Oficial; en las voces de Aitana y Amaia. 💛'
        ]);
        $user = User::where('email',  $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '¿Qué fue de aquella costumbre tan femenina y nada puritana de callar cuando sentías que un desconocido te hacía sentir su erección en la pierna o en el culo?Esto de @Barbijaputa'
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Y, ahora,ya no hay lugaral que volver,al que querer regresar.#BSOdeviernes"El frío" - @zaharapop'
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Hola, @vanitatis: unas fotos en topless no son un "escándalo sexual", ni convertirse en una estrella pasa irremediablemente por enseñar tu cuerpo, ni publicar de forma natural esas imágenes debería ser utilizado como arma arrojadiza ni generando culpabilidad.'
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#MeToo no es un movimiento en contra de los hombres, sino a favor de las mujeres (y eso no es puritanismo): http://bzfd.it/2moucqD '
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Qué canción más emotiva y mágica compuso Antonio Vega, y qué ilusión que cojan la versión que @loveoflesbian y yo hicimos para cantarla.'
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Los Reyes se han adelantado y me han traído la crisis de lactancia del tercer mes.  #alegría #no'
        ]);
        $user = User::where('email', $username)->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: raquel
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Jibiri game, próximamente en las mejores jugueterías 😜 @davidbroncano @latemotivcero'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '2 Años de @LateMotivCero hoy. GRACIAS a todos los que de alguna manera nos ayudan a levantar el telón cada noche. Equipo, @MovistarPlus PÚBLICO Seguimos!!!! #mehagomayorymeemociono'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Negociar con Pati... ¿Pero qué me habré pensado? 😆😆😆 nos ponemos en forma en #PoderesExtraordinarios de @cero y @RaulGomez82 nos hace de sensei del running 🏃🏼‍♀️ (también puedes ver fragmentos en YouTube!!!)'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Huyeron de la violencia de Boko Haram y encontraron el fútbol como vía de escape. ‘Refugiadas en el fútbol’, viernes 26 de enero a las 22:30h en @cero. #InformeRobinson'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'El primer vídeo de la sección de @davidbroncano es... curioso 😳 #LateMotiv327'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. ¿Vosotros sabíais lo de “El árbol y el río”? ¿Sí?, ¿No?@davidbroncano es un experto y os lo explica.'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. Si algún día la RAE le da un sillón a un milenial, será para… ¡@davidbroncano!'
        ]);
        $user = User::where('email', 'raquel@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: Ross
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '.@raulperez_76 vuelve a sorprendernos con su imitación de Donald Trump 👏👏👏 #LateMotiv327'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. Para @BobPopLATEMOTIV esta es LA GRAN REVELACIÓN de ‘Fire & Fury’.'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Bob Pop hablando del libro de Trump, y de Trump en general. Lo que nos gusta el salseo oiga. #LateMotiv327'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "'#LateMotiv327. @BobPopLATEMOTIV se ha leído 'Fire and Fury: Inside the Trump White House'
            Andreu: ¿Qué tal?
            Bob: M A D R E M I A D E L A M O R H E R M O S O.'"
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327 lo más de lo más @BobPopVeTV'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. “@LaPesteSerie es una nueva serie para un nuevo espectador. Un espectador con el morro muy fino”. @pacoleonbarrios'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. Dice @777albertor que “La Peste es una serie hecha con las manos, artesanal”.'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LateMotiv327. “Esta serie es especial”. Pablo Molinero, protagonista de @LaPesteSerie'
        ]);
        $user = User::where('email', 'ross@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: noe


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '@VidaModernaOML @IgnatiusFarray @davidbroncano @_Queque_ 
            El gran show'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'BACK TO BUSINESS II.'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '"Recórtate el pienso Andreu que vas como un odre de vino". Andreu (ternasco) y Broncano (el puma) están de vuelta en #0 de @MovistarPlus.¡#LateMotiv324 comienza en 20 minutos!'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Els de @VidaModernaOML (@davidbroncano, @_Queque_ e i @IgnatiusFarray) ens fan arribar aquesta joguina signada. Podràs licitar per ella el dia 5 de gener al #capnen51!'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Muchas gracias a @NBAspain por darme un techo en la peor ola de frío desde la glaciación, y además LA CASUALIDAD que hay un ambiente muy calentito en casa de los Raptors! #WeTheNorth'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mensaje para la persona que se ha quedado atorada en la frontera canadiense hace un rato: ¡si has conseguido pasar da señales! ❄️⚡️'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Hay que hablar y escribir bien porque es lo único que nos diferencia de los madridistas.'
        ]);
        $user = User::where('email', 'noe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: hector


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'No no, si yo estoy a favor de "retirarlas".'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'CARPAGGEDON🤘'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'A pocos días de que acabe el año, la despedida de @LateMotivCero, hasta el 2018, no se alarmen, nos ha regalado el mejor gif del 2017. @SmoothArkano vs @davidbroncano  #perreostyle'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Gracias por estar ahí durante estos 50 programones. Gracias por ayudarnos a entender un poco más este LOCO MUNDO. #LocoMundoLastChristmas'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Preparando la portada de nuestro nuevo disco como dúo, hemos sacado nuestro lado más sensual. El álbum se llamará: “Vaya dos patas pa’ un banco”. Don @davidbroncano será él solista y yo tocaré el arpa!! #ElRunningShow #postureosobrearbol #humoragolpedezapatilla # 🏃🏻💪🏻😀'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Miércoles 20 a las 20h. en http://elterrat.com , reflexionaremos con un nuevo #Bailén20 con David Broncano, Mireia Portas y David Fernández.'
        ]);
        $user = User::where('email', 'hector@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: Joe
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LaVidaModerna es hacer un crowdfounding para pagar la fianza del camello.'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'MXDERDXNIA GVNG'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "As a trans woman married to a cis woman, I’m in what I call Schrödinger's Marriage:Conservatives tell me that my marriage isn’t legitimate because they oppose two women being married — while at the same time calling me a man (in which case, they should have no problem, right?)"
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'medical professional: *goes to school 8+ years* *spends hours performing life-saving surgery on patient* *patient lives* 

            local twitter: god is so amazing 😩😍😍😍👏🏻👏🏻🙌🏻🙌🏻🙏🏻🙏🏻🙏🏻'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Aquí detrás del muro, todo preparado para las elecciones del 21-D @VidaModernaOML  @davidbroncano   @_Queque_  @IgnatiusFarray  @a_pinacho #Moderdonia #LaVidaModerna  @ejercitodeshiva'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Maemía @akselsvindal ❄️🚀 #ValGardena'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '—¡Disulfato de tetrahidroxilasa-6!
            —No es correcto, rebote.
            —Curro Jiménez.
            —¡Cooorrecto!'
        ]);
        $user = User::where('email', 'joe@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();
            

        //Usuario: luis

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Muy impresionado con el documental de Netflix "Un océano de plástico". Sirva este breve fragmento una muestra de la basura que invade nuestros mares y océanos. Recomendación absoluta.'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Buenos días!!
            Esta gran noticia es sin duda gracias a todos vosotros.
            Trabajo esfuerzo y dedicación de todo el @PMRARacingTeam 
            Feliz día y feliz finde semana ;)
            #pmracingteam #lovemtb ♥️
            #mtb #valores #deporte #ciclismo'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Buenos días'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'En @elconfidencial: Los Jordis dan marcha atrás: "El único referéndum será el del Gobierno de España"'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Entrevista en el programa Chester in Love de Risto Mejide: http://youtu.be/sXvz4_vEtvU?a  vía @YouTube'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Cuidado con las lluvias!'
        ]);
        $user = User::where('email', 'luis@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: adrian
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'De las cámaras a las criptomonedas, Kodak lanza KodakCoin, su divisa digital  http://www.fortuneenespanol.com/finanzas/18/01/09/de-las-camaras-a-las-criptomonedas--kodak-lanza-kodakcoin--su-di … vía @fortunemexico'
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "Más
            Google Maps 'tanca' el Parlament i hi situa 'El club de la comedia"
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'UCI Hour Record (in class +100 and +105y) holder Robert Marchand retires at age of 106. https://www.lequipe.fr/Cyclisme-sur-piste/Actualites/Robert-marchand-la-retraite-a-106-ans/865361 … (via @DansLaMusette)'
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Que maravilla de conversación con Maria Belón y @josefajram Gracias a los dos. Fue un placer #SamantaYVida'
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Buenas, @policia y @guardiacivil. Aquí tienen al miserable del día, se llama @robertoFlamini1. Les paso también el enlace de su página de Facebook, que seguro que les interesa.'
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "'Mi adolescencia nunca olvidará a @interviu y el programa 'ay qué calor!' de Telecinco. Gracias por esos momentos Interviú.'"
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Aquí tenemos los 10 libros más vendidos en Alienta. ¡Enhorabuena a sus autores! '
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '"Prefiero respetar a quien veo en el espejo que a quien veo en TV" Manhunt Unabomber'
        ]);
        $user = User::where('email', 'adrian@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario: alvaro

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'When I was a kid, my dad took us on one vacation to Warner Bros. Studios. He loved this business. He loved that I was in it. When he died, I saw this rainbow over the stage they named for me.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'This week, at the age of 92, my father Elliott DeGeneres passed away. He lived a good long life. It wasn’t unexpected. I was able to say goodbye.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'I’m so grateful to all the people helping animals in Montecito. You can find out how to support them here.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '.@TheRealLukevans is one very good-looking gentleman with some very famous friends.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Today I told Helen Mirren how old she is.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'My new best friend Lauren went viral for how excited she was to win $11.30 on HQ. If you thought she was excited then...'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'My friend @Oprah FaceTimed with us from Montecito.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Our community of Montecito has been through a lot.'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'It’s the second week of Janu-Arie! @TheEllenShow producers break it all down in the cubicle. #TheBachelor'
        ]);
        $user = User::where('email', 'alvaro@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario:jaume
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'I found a list of things that have #NeverBeenGoogled. If you know something that’s never been googled, tweet it to me!'
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Did you see this last night?!?! #GameOfGames #MakeItRain'
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '@MargotRobbie and @ChrisHemsworth went head to head to see who knows more about down under. That didn’t sound right. You know what I mean.'
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'I want to fill my audience for my birthday show with people who have done good things. If you know someone who should be there, tell me about it here. #OneMillionActsOfGood http://ellen.tv/2mk7Y8y '
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'This is the street in front of our house. I don’t know anything about our house yet. I’m heartbroken for our community of Montecito. I’m devastated for the families who lost loved ones. I’m grateful to all the rescue workers. Please send love to Montecito.'
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#InYourFaceHoney is a great way to start a marriage. Plus, it’s a whole lot cheaper than couples therapy. #GameofGames'
        ]);
        $user = User::where('email', 'jaume@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();


        //Usuario: 
        $usuario = "omar@gmail.com";
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "Knock knock! Who's there? Congratulations to our @TedDanson on winning his @CriticsChoice Award for #TheGoodPlace!"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '🙌  🙌  🙌'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Kicking off 2018 with three straight shows, starting this weekend with Sam Rockwell and @halsey! #SNL'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'UnbeSTEVEable!😱 #LittleBigShots will be back very soon.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Watch the smartest kids in the nation get put to the ultimate test! @ActuallyNPH hosts #GeniusJunior, premiering March 18 at 9/8c on @nbc.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "ramon@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Don Quijote de la Manchaa​ es una novela escrita por el español Miguel de Cervantes Saavedra. '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605,'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'es la obra más destacada de la literatura española y una de las principales de la literatura universal.1​2​ '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'En 1615 apareció su continuación con el título de Segunda parte del ingenioso caballero don Quijote de la Mancha. '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'El Quijote de 1605 se publicó dividido en cuatro partes; pero al aparecer el Quijote de 1615 '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "andrea@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'en calidad de Segunda parte de la obra, quedó revocada de hecho la partición en cuatro secciones del volumen publicado diez años antes por Cervantes.3​'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Es la primera obra genuinamente desmitificadora de la tradición caballeresca y cortés por su tratamiento burlesco. '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Interesting Pictures Black Community Business & Finance News NBA NFL Movies TV Shows Arts & Culture Fitness'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'U Of K # FMS # 014✌, #NRU# #RealMadridC.F#Ahly peace ✌ love ❤'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Studied Technology journalism at Dalhousie University Went to Dartmouth High From Dartmouth, Nova Scotia'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "david@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'UoB Graduate // London'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Studente universitario. Futuro storico contemporaneista. Vivo a Bologna per studio, ma nasco a Putignano(BA)'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Daughter, Wife, Mom, Teacher, GS Troop Leader, Concerned Human'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Musicien, pédagogue, papa x 3. Musician, teacher, proud father of 3'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Love Everton and da bird! clobber music and trainers.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "manolo@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Everything #Triathlon, #Cycling, #Running and #Multisports in Papua New Guinea first + worldwide'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Wife, Mom of 2 (oldest has type 1 diabetes), Business Owner. #type1diabetes #cleanliving #lovemylife

            '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'preschool teacher gone wild, mommy of three young adults, married 27 years to my senior prom date'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Obsesionaisimo perdio del cine, juego un poco a la play y del Atleti a muerte.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Wife, mom of 3 & 3 pups. A passionate Ganassi & Indy Racing fan! Currently on a new journey at Gander Outdoors!! WORK/PLAY HARD. ♡Be Kind, Be…'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "marcos@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'PINKCONNEX LTD UK wide comprehensive LGBTQ Job Search,Discount Directory, News Feed, Review Portal,Journey planner,'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'If you gonna dream... dream high!!!

            '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '😍She had always wanted words, she loved them; grew up on them. Words gave her clarity, brought reason, shape.😍'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'I love to dance, to sing, to be a friendly person❤

            '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "Finding joy in life's simple moments, laughing until you cry and being gratful for it all. My true passions are my family and traveling the world."
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "michael@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LockHimUp #RESIST #RESISTANCE I love to #BLOCK TROLLS SO SAVE IT'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#взаимныйфолловинг #followback #BTC #ETH #altcoin #bitcointalk #Криптовалюты #взаимоподписка #ICO #Bounty #Blockchain #Баунти …'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '我之前是个玩音乐的，现在搞体育，文体不分家，你满意吗？'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '粮食抗战。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '【南非三隻獵豹當導遊 帶遊客散步】南非侯斯普瑞特私人動物保護區有三個不同尋常的導遊——三隻獵豹。這三隻獵豹分別是雄獵豹Hunter和Floppy，還有母豹Ntombi，它們從小被保護區救助收養，生長在這裡和人十分親近，對保護區更是了如指掌。長大後乾脆“兼職”當起了導遊，日常帶遊客在保護區散步遊玩'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "cristiano@gmail.com";
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '【我國成功發射兩顆北斗三號組網衛星】1月12日7時18分，我國在西昌衛星發射中心用長征三號乙運載火箭（及遠征一號上面級），以“一箭雙星”方式成功發射第二十六、二十七顆北斗導航衛星。這兩顆衛星屬于中圓地球軌道衛星，是我國北斗三號工程第三、四顆組網衛星。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '【甘肅戈壁綠洲寒冬上演天鵝戲水圖】寒冬時節，地處甘肅河西走廊中部的張掖天氣晴朗，流經該地的黑河，水面寬闊，河水緩緩流動，三五成群的白天鵝在水裡或嬉戲，或覓食，悠然過冬。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '世界首座雙層六線鋼桁梁鐵路斜拉橋在渝落成】經過5年艱苦建設，位於重慶江津的世界首座雙層六線鋼桁梁鐵路斜拉橋——新白沙沱長江特大橋近日落成，與即將開通的渝貴鐵路一起進入檢測試運行階段。新白沙沱長江特大橋全線長約5.32公里，據介紹，渝貴鐵路開通後，列車通過這座大橋最快僅需16.56秒。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '【中俄蒙廚藝大師上演美食大比拼】首屆呼和浩特國際美食博覽會上，中俄蒙廚藝大師的廚藝表演讓大家大飽眼福和口福。來自中國、俄羅斯、蒙古國餐飲界的代表三百多人參加了此次活動。每位大師獻藝2道菜，規定一道以內蒙古羊肉為主食材的菜品，另可自選製作1道菜品。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '【快遞小哥發現殘疾大爺只有收音機 自掏腰包送電視：讓他今年可以看春晚】近日，四川宜賓殘疾人劉貴華收到一份特殊的禮物，一位快遞小哥給他送貨時，發現大爺家只有一台收音機，於是發工資後，自掏腰包給他送來一台電視。快遞小哥說，今年春節，劉大爺就能看上春晚了。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "maria@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '哈爾濱：國際雪雕比賽中的“嚴寒鬥士”】1月11日，雪雕比賽參賽選手在太陽島雪博會園區創作。當日冰城哈爾濱最高氣溫低至零下20攝氏度左右，正在參加第23屆哈爾濱國際雪雕比賽的各國選手頂著凜冽寒風創作作品，堪稱“嚴寒鬥士”'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '選臘味，為即將到來的春節做準備。臘肉備受南方民眾的喜愛，每到臘月時節，家家戶戶都會製作臘肉，四處臘味飄香。'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Palestinians to meet to discuss Trump Jerusalem response http://f24.my/2LWb.t '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Honorée d’avoir interviewée Asli Erdogan symbole de la liberté d’expression et du courage civique en #turquie. Elle risque la prison à vie, procès en février. Entretien exclusif à voir sur @France24 à 13h45 et 20h45 (paris time) @ActuElles'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'A new life sprouts up around Mosul after scars of IS rule http://f24.my/2LVl.t '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "yolanda@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "''There's a lot of hypocrisy in Germany about Europe' "
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Great conversation ahead of #GroKo "breakthrough" in Germany w/ @joejoffe @gduval_altereco @eichhorn_jan Elisabeth Humbert-Dorfmüller in #F24Debate.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'French stores admit to selling baby formula recalled over salmonella fears http://f24.my/2LVt.t '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Sie sind #SPD-Mitglied. Ihnen steht am 21.1. die Ablehnung offen. 
            Ich bin „nur“ Wählerin - und jetzt raten Sie mal, was ich und viele andere Wähler demnächst machen 👎'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'ich meinerseits habe sozialphobie und andere mentale probleme, was mir so schon probleme bereitet überhaupt an einer con teilzunehmen. und ich denke nicht, dass ich die einzige mit damit bin. also BITTE, wenn ihr cons besucht, behandelt andere immer respektvoll'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "belen@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Ich will nach Hause und ins Bett: Ich bin müde'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Wer sich nicht selbst helfen will, dem kann niemand helfen.*Johann Heinrich Pestalozzi*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Sparsamkeit ist die Lieblingsregel aller halblebendigen Menschen.*Henry Ford*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "jose@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Journalisten: Wegelagerer und Indiskretins.*Helmut Schmidt*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Die Anzahl unserer Neider bestätigt unsere Fähigkeiten.
            *Oscar Wilde*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Kein Problem wird gelöst, wenn wir träge darauf warten, dass Gott sich darum kümmert.*Martin Luther King*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario:
        $usuario = "julio@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Mit Verlaub, Herr Präsident, Sie sind ein Arschloch.*Joschka Fischer*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Sagen, was man denkt, ist manchmal die größte Torheit und manchmal — die größte Kunst.
    
            *Marie von Ebner-Eschenbach*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Die glücklichen Sklaven sind die erbittertsten Feinde der Freiheit.
            *Marie von Ebner-Eschenbach*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "laura@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Der Ausgangspunkt für die großartigsten Unternehmungen liegt oft in kaum wahrnehmbaren Gelegenheiten.
    
            *Demosthenes*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'In Partnerschaften muss man sich manchmal streiten, denn dadurch erfährt man mehr voneinander.
    
            *Johann Wolfgang von Goethe*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Der Anfang ist die Hälfte des Ganzen.
            *Aristoteles*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "blanca@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Ein bisschen Freundschaft ist mir mehr wert als die Bewunderung der ganzen Welt.
    
            *Otto von Bismarck*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Jeder Mensch trägt einen Zauber im Gesicht: irgendeinem gefällt er.
            *Friedrich Hebbel*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Zusammenkommen ist ein Beginn, zusammenbleiben ist ein Fortschritt, zusammenarbeiten ist ein Erfolg.
    
            *Henry Ford*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "neus@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Widerwärtigkeiten sind Pillen, die man schlucken muss und nicht kauen.
            *Georg Christoph Lichtenberg*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Vermutlich hat Gott die Frau erschaffen, um den Mann kleinzukriegen.
            *Voltaire*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Die wahre Freiheit ist nichts anderes als Gerechtigkeit.
            *Johann Gottfried Seume*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "victor@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Die Autorität des Lehrers schadet oft denen, die lernen wollen.
            *Marcus Tullius Cicero*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Manche kluge Frau ist nur deshalb allein, weil sie es nicht verstanden hat, ihre Klugheit zu verbergen.
    
            *Daphne du Maurier*'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#LaFêteEstFinie ("point collecte pour les sapins de Noël") http://ift.tt/2DqN2Vu '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "mario@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#ChatPmu bien au chaud, au menu escalope et haricots http://ift.tt/2mntNnt '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "'Le directeur de l'école d'art du Havre dément : « Nous ne fermons pas, nous misons sur le graphisme » http://dlvr.it/Q9vcN4 '"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'je vais faire chauffer la cb sur chassezdiscount https://www.chassezdiscount.com   (la boutique préférées de #chasseurs) '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "daniel@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "#velotaf #velotrain du vendredi (en compagnie de la contrebasse de (l'excellent) Thibault Cellier et de la clarinette basse de (l'excellent) Julien Ei"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#oldschool #sl35 #rolleiflex (si vous avez des peloches au fond du placard : 1 rouleau = 1 bière) http://ift.tt/2qUh29z '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Ou mardi mais après 21h'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "tom@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Moi pas pouvoir les 2 prochains vendredis #lesenfantstoussa'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'rojet à suivre, bravo @nextinpact !'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'La révolte gronde...'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        //Usuario:
        $usuario = "joan@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "Bon, vous lisez ça (c'est obligatoire) et ensuite quand un anti-vaccin vient vous parler, vous lui faites lire. Bisous. Vaccinez vous."
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#ChatPmu du soir, toilette et rangement de bar. http://ift.tt/2CZ904b '
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "'SÉRIE : CONTOURNEMENT EST DE ROUEN
            Episode 1 : Pour contourner Rouen, il faut passer par Paris
            Après quatre décennies de parlotte, d'hésitation et d'études techniques, le contournement est de Rouen va-t-il être réalisé?'"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "lucia@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Five years ago, we lost Aaron Swartz. 

            None should rest, 
            for still, there is no peace.'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "l'histoire de l'art est un une discipline exigeante ! merci maréchal pour cette érudition picturo-historico-stylesque"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "mais oui ! mais. mais regardez au dessus des barriques (d'alcool?) !"
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "eva@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'par comparaison en 1829-1830  Turner peint ceci http://www.tate.org.uk/art/artworks/turner-rouen-cathedral-d24674 … et 
            David Roberts cela http://www.tate.org.uk/art/artworks/roberts-the-porch-of-st-maclou-rouen-n02956 … via @Tate'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => "
            voilà comment certains représentaient Rouen dans les années (18)20 (n'est-ce pas charmant ?) ici des peintres anglais source ", 
            'multimedia' => 'http://cdn.akc.org/A-Timeline-of-Puppy-Teething.jpg'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'DIRECTO | Puigdemont, de paseo en Bruselas junto a sus diputados ', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "borja@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Fácil y sencillo. Calculadora tu sueldo neto', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Así responden a Trump en Haití por decir que es un "país de mierda" http://cort.as/-0r3r ', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'AMPLIACIÓN | "Para ejercer la defensa es necesario creer en lo que se está haciendo, solo así se puede hacer con amor y pasión por la profesión". El abogado de El Chicle abandona su defensa', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "claudia@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Si uno de tus propósitos para 2018 es ordenar tus libros, aquí tienes las claves', 
            'multimedia' => 'https://www.scientificamerican.com/sciam/cache/file/B7943D3A-35D3-4D27-906280F095578EC2.jpg?w=590&h=393&E45C66A5-5F1F-4579-85C21B95FE5023FF'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'No te has llevado nada para comer al curro o estás yendo para casa por la noche y no te apetece cocinar. Quieres comer algo más o menos ligero, entras en el súper y apuestas por una ensalada envasada. ¿Seguro?, ¿son tan sanas?', 
            'multimedia' => 'https://www.puppyleaks.com/wp-content/uploads/2017/09/puppysmile.png'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'El 9 de enero esta madre publicó una foto en su perfil de Twitter diciendo que su hijo no sabe lo que es una galleta: él es feliz desayunando garbanzos. Inmediatamente recibió cientos de críticas. Hoy responde aquí', 
            'multimedia' => 'https://pbs.twimg.com/profile_images/836837459975602176/hLZd5ka3.jpg'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "camila@gmail.com";;
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Siempre hubo clases, hasta la fila seis', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Todo vuelve. La última en anunciar su regreso es la celebérrima consola Gameboy, y lo ha hecho casi por despiste', 
            'multimedia' => 'http://www.k9trainer.com.au/cmsAdmin/uploads/puppy-book.jpg'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Llega una nueva borrasca, ¿qué hacer si te encuentras con una nevada con el coche?', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/All-about-puppies--Cesar%E2%80%99s-tips%2C-tricks-and-advice.jpg?itok=bi9xUvwe'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        //Usuario:
        $usuario = "fran@gmail.com";
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => '#Escaparate | La temporada de Navidad ha terminado, pero las compras continúan. Este domingo 7 de enero han comenzado oficialmente las rebajas', 
            'multimedia' => 'https://static.tumblr.com/af41e70112e1db900a33bcc04bc416b4/teueo1u/Zx2naa6g4/tumblr_static_mom-dog-with-puppies.jpg'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'DIRECTO | Sigue el sorteo de la Copa del Rey a las 12.30'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();
        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Podemos basará su estrategia de los próximos meses en las cuestiones sociales, relegadas a un plano secundario desde el pasado septiembre con el recrudecimiento de la crisis en Cataluña', 
            'multimedia' => 'https://www.blazingcariboustudios.com/wp-content/uploads/2018/01/Puppy-Help.jpg'
        
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'ENCUESTA: Ciudadanos adelanta a PP y PSOE y sería hoy el partido más votado en unas elecciones generales https://politica.elpais.com/politica/2018/01/12/actualidad/1515752835_076355.html?id_externo_rsoc=TW_CC … vía @elpais_espana', 
            'multimedia' => 'https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/The-stages-of-puppy-growth.jpg?itok=9ptPJwY8'
        ]);
        $user = User::where('email', $usuario)->first();
        $tweet->user()->associate($user);
        $tweet->save();


        /* //Extra Seeders
        $faker = Faker::create();
        $users = User::all();
        foreach($users as $user){
            for ($i=0; $i<rand(2,5); $i++) {      
                $tweet = new Tweet([
                    'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
                    'mensaje' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                ]);
                $tweet->user()->associate($user);
                $tweet->save();
            }  
        }
        */

    

    }
}
