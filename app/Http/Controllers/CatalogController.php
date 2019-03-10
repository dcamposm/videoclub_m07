<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Director;
use App\Country;
use App\Genre;
use App\Movie_Genre;
use App\Actor;
use App\Movie_Actor;
use App\Comment;
use App\Rent;
use App\Client;
use Krucas\Notification\Facades\Notification;

class CatalogController extends Controller
{
    public function getIndex(){
        return view('catalog.index', array('pelicula'=>Movie::All()));
    } 
    
    public function getShow($id){
        $movie = Movie::findOrFail($id);
        $director = Director::findOrFail($movie->director);
        $country = Country::findOrFail($movie->country);

        $genresMovie = Movie_Genre::where("id_movie", $movie->id)->get();
        $genresAll = Genre::All();

        $actorsMovie = Movie_Actor::where("id_movie", $movie->id)->get();
        $actorsAll = Actor::All();

        $CommentsMovie = Comment::where("id_movie", $movie->id)->get();
        $clientsAll = Client::All();

        return view('catalog.show', array(  'pelicula'=>$movie,
                                            'director'=>$director,
                                            'country'=>$country,
                                            'genresMovie'=>$genresMovie,
                                            'genresAll'=>$genresAll,
                                            'actorsMovie'=>$actorsMovie,
                                            'actorsAll'=>$actorsAll,
                                            'CommentsMovie'=>$CommentsMovie,
                                            'clientsAll'=>$clientsAll
                                        ));
    } 
    
    public function getCreate(){

        $directors = Director::All();
        $countries = Country::All();
        $genres = Genre::All();
        $actors = Actor::All();


        return view('catalog.create', array(    'directors'=>$directors,
                                                'countries'=>$countries,
                                                'genres'=>$genres,
                                                'actors'=>$actors
                                        ));
    } 
    
    public function getEdit($id){
        $movie = Movie::findOrFail($id);

        $directors = Director::All();
        $countries = Country::All();

        $genresMovie = Movie_Genre::where("id_movie", $movie->id)->get();
        $genresAll = Genre::All();

        $genres = array();

        $cont = 0;

        foreach ($genresAll as $genre){    
            $exists = 0;
            foreach ($genresMovie as $genreMovie){ 
                if ($genreMovie->id_genre == $genre->id) {
                    $exists=1;
                }
            }

            $genres[$cont] = array( 'id' => $genre->id,
                                    'name' => $genre->name,
                                    'exists' => $exists
                                    );

            $cont++;
        }

        $actorsMovie = Movie_Actor::where("id_movie", $movie->id)->get();
        $actorsAll = Actor::All();

        $actors = array();

        $cont = 0;

        foreach ($actorsAll as $actor){    
            $exists = 0;
            foreach ($actorsMovie as $actorMovie){ 
                if ($actorMovie->id_actor == $actor->id) {
                    $exists=1;
                }
            }

            $actors[$cont] = array( 'id' => $actor->id,
                                    'name' => $actor->name,
                                    'lastname' => $actor->lastname,
                                    'exists' => $exists
                                    );

            $cont++;
        }



        return view('catalog.edit', array(  'pelicula'=>$movie,
                                            'directors'=>$directors,
                                            'countries'=>$countries,
                                            'genres'=>$genres,
                                            'actors'=>$actors
                                        ));
    }
    
    public function postCreate(Request $request){

        $movie = new Movie;
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->time = $request->input('time');
        $movie->director = $request->input('director');
        $movie->country = $request->input('country');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();

        foreach (request()->genre as $genreId){
            $genre = new Movie_Genre;
            $genre->id_movie = $movie->id;
            $genre->id_genre = $genreId;
            $genre->save();
        }
        
        foreach (request()->actor as $actorId){
            $actor = new Movie_Actor;
            $actor->id_movie = $movie->id;
            $actor->id_actor = $actorId;
            $actor->save();
        }
        
        Notification::success('Película "'.$movie->title.'" creada corretamente.' );

        return redirect()->action('CatalogController@getCreate');
    } 
    
    public function putEdit(Request $request, $id){

        Movie_Genre::where("id_movie", $id)->delete();
        if (isset(request()->genre)) {
            foreach (request()->genre as $genreId){
                $genre = new Movie_Genre;
                $genre->id_movie = $id;
                $genre->id_genre = $genreId;
                $genre->save();
            }
        }

        Movie_Actor::where("id_movie", $id)->delete();
        if (isset(request()->actor)) {
            foreach (request()->actor as $actorId){
                $actor = new Movie_Actor;
                $actor->id_movie = $id;
                $actor->id_actor = $actorId;
                $actor->save();
            }
        }

        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->time = $request->input('time');
        $movie->director = $request->input('director');
        $movie->country = $request->input('country');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        
        Notification::success('Película "'.$movie->title.'" modificada corretamente.' );

        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    }
    
    public function putRent($id){
        $movie = Movie::findOrFail($id);
        $movie->rented = true;
        $movie->save();
        
        Notification::success('Película "'.$movie->title.'" rentada corretamente.' );
        
        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    } 
    
    public function putReturn($id){  
        $movie = Movie::findOrFail($id);
        $movie->rented = false;
        $movie->save();
        
        Notification::success('Película "'.$movie->title.'" devuelta corretamente.' );
        
        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    } 
    
    public function deleteMovie($id){ 
        $movie = Movie::findOrFail($id);

        Movie_Genre::where("id_movie", $id)->delete();
        Rent::where("id_movie", $id)->delete();
        Comment::where("id_movie", $id)->delete();
        Movie_Actor::where("id_movie", $id)->delete();
        Movie::findOrFail($id)->delete();
        
        Notification::success('Película "'.$movie->title.'" eliminada corretamente.' );
        
        return redirect()->action('CatalogController@getIndex');
    }
}
