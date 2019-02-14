<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       
    public function run()
    {
        /*self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');*/
        
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    
    public function seedUsers()
    {
        DB::table('users')->delete();
        
        $user = new User;       
        $user->name = 'Deme';
        $user->email = 'deme@dem.dem';
        $user->password = bcrypt('demcam');
        $user->save();
        
        $user = new User;
        $user->name = 'Albert';
        $user->email = 'alb@alb.alb';
        $user->password = bcrypt('albmar');
        $user->save();
        
        $user = new User;
        $user->name = 'Denis';
        $user->email = 'denis@den.den';
        $user->password = bcrypt('denper');
        $user->save();
    }
    
    private function seedCatalog()
    {
        DB::table('movies')->delete();
        foreach( $this->arrayPeliculas as $pelicula ) {
            $p = new Movie;
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
    private $arrayPeliculas = array(
            array(
                    'title' => 'El padrino',
                    'year' => '1972', 
                    'director' => '3', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilÃ¡nime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
            ),
            array(
                    'title' => 'El Padrino. Parte II',
                    'year' => '1974', 
                    'director' => '3', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BNDc2NTM3MzU1Nl5BMl5BanBnXkFtZTcwMTA5Mzg3OA@@._V1_SX214_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'ContinuaciÃ³n de la historia de los Corleone por medio de dos historias paralelas: la elecciÃ³n de Michael Corleone como jefe de los negocios familiares y los orÃ­genes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegÃ³ a ser un poderosÃ­simo jefe de la mafia de Nueva York.'
            ),
            array(
                    'title' => 'La lista de Schindler',
                    'year' => '1993', 
                    'director' => '2', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMzMwMTM4MDU2N15BMl5BanBnXkFtZTgwMzQ0MjMxMDE@._V1_SX214_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones pÃºblicas, organiza un ambicioso plan para ganarse la simpatÃ­a de los nazis. DespuÃ©s de la invasiÃ³n de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fÃ¡brica de Cracovia. AllÃ­ emplea a cientos de operarios judÃ­os, cuya explotaciÃ³n le hace prosperar rÃ¡pidamente. Su gerente (Ben Kingsley), tambiÃ©n judÃ­o, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
            ),
            array(
                    'title' => 'Pulp Fiction',
                    'year' => '1994', 
                    'director' => '4', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjE0ODk2NjczOV5BMl5BanBnXkFtZTYwNDQ0NDg4._V1_SY317_CR4,0,214,317_AL_.jpg', 
                    'rented' => true, 
                    'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misiÃ³n: recuperar un misterioso maletÃ­n. '
            ),
            array(
                    'title' => 'Cadena perpetua',
                    'year' => '1994', 
                    'director' => '5', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SX214_AL_.jpg', 
                    'rented' => true, 
                    'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cÃ¡rcel de Shawshank. Con el paso de los aÃ±os conseguirÃ¡ ganarse la confianza del director del centro y el respeto de sus compaÃ±eros de prisiÃ³n, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
            ),
            array(
                    'title' => 'El golpe',
                    'year' => '1973', 
                    'director' => '6', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY5MjM1OTAyOV5BMl5BanBnXkFtZTgwMDkwODg4MDE@._V1._CR52,57,915,1388_SX214_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Chicago, aÃ±os treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gÃ¡ngster (Robert Shaw). Para ello urdirÃ¡n un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
            ),
            array(
                    'title' => 'La vida es bella',
                    'year' => '1997', 
                    'director' => '7', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQwMTM2MjE4Ml5BMl5BanBnXkFtZTgwODQ2NTYxMTE@._V1_SX214_AL_.jpg', 
                    'rented' => true, 
                    'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intenciÃ³n de abrir una librerÃ­a. AllÃ­ conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido harÃ¡ lo imposible para hacer creer a su hijo que la terrible situaciÃ³n que estÃ¡n padeciendo es tan sÃ³lo un juego.'
            ),
            array(
                    'title' => 'Uno de los nuestros',
                    'year' => '1990', 
                    'director' => '8', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY2OTE5MzQ3MV5BMl5BanBnXkFtZTgwMTY2NTYxMTE@._V1_SX214_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Henry Hill, hijo de padre irlandÃ©s y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gÃ¡ngsters de su barrio, donde la mayorÃ­a de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece aÃ±os, Henry decide abandonar la escuela y entrar a formar parte de la organizaciÃ³n mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irÃ¡ subiendo de categorÃ­a. '
            ),
            array(
                    'title' => 'Alguien volÃ³ sobre el nido del cuco',
                    'year' => '1975', 
                    'director' => '9', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTk5OTA4NTc0NF5BMl5BanBnXkFtZTcwNzI5Mzg3OA@@._V1_SY317_CR12,0,214,317_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espÃ­ritu libre que vive contracorriente, es recluido en un hospital psiquiÃ¡trico. La inflexible disciplina del centro acentÃºa su contagiosa tendencia al desorden, que acabarÃ¡ desencadenando una guerra entre los pacientes y el personal de la clÃ­nica con la frÃ­a y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellÃ³n estÃ¡ en juego.'
            ),
            array(
                    'title' => 'American History X',
                    'year' => '1998', 
                    'director' => '10', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjMzNDUwNTIyMF5BMl5BanBnXkFtZTcwNjMwNDg3OA@@._V1_SY317_CR17,0,214,317_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideologÃ­a neonazi, fue encarcelado por asesinar a un negro que pretendÃ­a robarle su furgoneta. Cuando sale de prisiÃ³n y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeÃ±o (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a Ã©l lo condujo a la cÃ¡rcel.'
            ),
            array(
                    'title' => 'Sin perdÃ³n',
                    'year' => '1992', 
                    'director' => '11', 
                    'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTkzNTc0NDc4OF5BMl5BanBnXkFtZTcwNTY1ODg3OA@@._V1_SY317_CR5,0,214,317_AL_.jpg', 
                    'rented' => false, 
                    'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades econÃ³micas para sacar adelante a su hijos. Su Ãºnica salida es hacer un Ãºltimo trabajo. En compaÃ±Ã­a de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrÃ¡ que matar a dos hombres que cortaron la cara a una prostituta.'
            ),
            
    );
}
