<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie_Genre;
use App\Movie;
use Krucas\Notification\Facades\Notification;

class GenreController extends Controller
{
    public function getIndex(){
        //return response()->json(Genre::All());
        return view('genre.index', array('genres'=> Genre::All()));
    } 
    
    public function getShow($id){
        $moviesGenre = Movie_Genre::where('id_genre', $id)->get();
        $movies = Movie::all();
        //return response()->json($moviesGenre);
        return view('genre.show', array('genre'=>Genre::findOrFail($id),'moviesGenre'=>$moviesGenre,'movies'=>$movies ));
    } 
    
    public function getCreate(){   
        return view('genre.create');
    } 
    
    public function postCreate(Request $request){
        
        $genre = new Genre;
        $genre->name = $request->input('name');
        $genre->description = $request->input('description');
        $genre->save();
        
        Notification::success('Se a anadido el genreo');

        return redirect()->action('GenreController@getCreate');
    }
    
    public function getEdit($id){ 
        return view('genre.edit', array('genre'=>Genre::findOrFail($id)));
    }
    
    public function putEdit(Request $request, $id){ 
        
        $genre = Genre::findOrFail($id);
        $genre->name = $request->input('name');
        $genre->description = $request->input('description');
        $genre->save();
        
        Notification::success('Se a modificado el genero');

        return redirect()->action('GenreController@getIndex');
    }
    
    public function deleteGenre($id){ 
        Genre::findOrFail($id)->delete();
        
        Notification::success('Genero eliminado');
        
        return redirect()->action('GenreController@getIndex');
    }
}
