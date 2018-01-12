<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Tweet;
use App\User;

class TweetsTableSeeder extends Seeder
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
            'mensaje' => 'Enguany commemorem el centenari del naixement de Francesc #FerrerPastor, un homenot del nostre país, lexicògraf i autor dun dels diccionaris més venuts a casa nostra. 
            La Plataforma per la Llengua preparem una #auca per explicar al jovent el seu llegat.'
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
            'mensaje' => '¡Trabaja en la Universidad de Alicante! Nueva convocatoria de plazas de profesorado en: #derecho #arquitectura #enfermería #biotecnología 
            #filología #lengua... https://s.ua.es/uSLy  #empleo #docencia #UA'
        ]);
        $user = User::where('email', 'jorge@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => 'Work in progress!
            Suerte,  ánimo y fuerza 💪💪💪'
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

        $tweet = new Tweet([
            'fecha' =>  Carbon::now()->subDays(rand(0, $dias))->subSeconds(rand(0, $segundos)),
            'mensaje' => ''
        ]);
        $user = User::where('email', 'alex@gmail.com')->first();
        $tweet->user()->associate($user);
        $tweet->save();

        

    

    }
}
