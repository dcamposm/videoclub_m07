<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        
        Movie_Genre:: create(array(    
            'id_movies' => '1',
            'id_client' => '3',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 12),
            'rate_movie' => '5',
            'comment' => 'Falso por que las guacamayas no comen queso.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '2',
            'id_client' => '1',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 13),
            'rate_movie' => '2',
            'comment' => 'Discrepo pues el apareamiento es totalmente irrelevante en la física nuclear.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '3',
            'id_client' => '3',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 14),
            'rate_movie' => '3',
            'comment' => 'Pero lo que no sabian es que los físicos termo-nucleares estan haciendo de las suyas y quieren implementar tecnología broccolil para que los gansitos marinela puedan ser utilizados como guerrereos transatlanticos!! '
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '4',
            'id_client' => '1',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 15),
            'rate_movie' => '4',
            'comment' => 'Pero ten cuidado que las gomitas, están que quieren armar una revolución y alzarse en armas contra el rey bonbon y la princesa masapan por encerrarlos en bolsitas de selofán.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '5',
            'id_client' => '2',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 10),
            'rate_movie' => '5',
            'comment' => 'Me gusta el arroz.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '6',
            'id_client' => '3',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 11),
            'rate_movie' => '4',
            'comment' => 'Ci sono molti eventi durante la settimana, anche se di Domenica per esempio era vuoto. Quando sono stata, con la musica che cera io due balletti sono fatti; in serenità ed allegria.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '7',
            'id_client' => '2',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 10),
            'rate_movie' => '3',
            'comment' => 'Un locale molto caotico ed è difficile trovare un tavolo soprattutto di sabato sera. Cè lobbligo di una consumazione per poter partecipare al karaoke. I prezzi delle consumazioni oscillano tra i 7 e i 9 €. Possibilità di passare una serata diversa con gli amici.'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '8',
            'id_client' => '1',
            'date_comment' => \Carbon\Carbon::create(2019, 1, 14),
            'rate_movie' => '2',
            'comment' => 'We cannot simply sit back and allow these matters to develop in a random way.'
        ));
    }
}
