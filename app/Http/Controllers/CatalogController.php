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

        $genresMovie = Movie_Genre::where("id_movies", $movie->id)->get();
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
        return view('catalog.create');
    } 
    
    public function getEdit($id){
        $movie = Movie::findOrFail($id);

        $directors = Director::All();
        $countries = Country::All();

        $genresMovie = Movie_Genre::where("id_movies", $movie->id)->get();
        $genresAll = Genre::All();

        $genres = array();

        $cont = 0;

        foreach ($genresAll as $genre){    
            $exists = 0;
            foreach ($genresMovie as $genreMovie){ 
                if ($genreMovie->id_genres == $genre->id) { /////////////////////////////////////////////////// cambiar cuando se cambie el migrate
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
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        
        Notification::success('Success message');

        return redirect()->action('CatalogController@getCreate');
    } 
    
    public function putEdit(Request $request, $id){ 
        
        //dd(request()->all());

        Movie_Genre::where("id_movies", $id)->delete();
        foreach (request()->genre as $genreId){
            $genre = new Movie_Genre;
            $genre->id_movies = $id;
            $genre->id_genres = $genreId;
            $genre->save();
        }

        Movie_Actor::where("id_movies", $id)->delete();
        foreach (request()->actor as $actorId){
            $actor = new Movie_Actor;
            $actor->id_movies = $id;
            $actor->id_genres = $actorId;
            $actor->save();
        }
/*
        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();*/
        
        Notification::success('Success message');

        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    }
    
    public function putRent($id){
        $movie = Movie::findOrFail($id);
        $movie->rented = true;
        $movie->save();
        
        Notification::success('Success');
        
        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    } 
    
    public function putReturn($id){  
        $movie = Movie::findOrFail($id);
        $movie->rented = false;
        $movie->save();
        
        Notification::success('Success message');
        
        return redirect()->action('CatalogController@getShow', ['id' => $id]);
    } 
    
    public function deleteMovie($id){ 
        Movie::findOrFail($id)->delete();
        
        Notification::success('Success message');
        
        return redirect()->action('CatalogController@getIndex');
    }
}
