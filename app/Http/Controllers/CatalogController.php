<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Krucas\Notification\Facades\Notification;

class CatalogController extends Controller
{
    public function getIndex(){
        return view('catalog.index', array('pelicula'=>Movie::All()));
    } 
    
    public function getShow($id){
        return view('catalog.show', array('pelicula'=>Movie::findOrFail($id)));
    } 
    
    public function getCreate(){   
        return view('catalog.create');
    } 
    
    public function getEdit($id){ 
        return view('catalog.edit', array('pelicula'=>Movie::findOrFail($id)));
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
        
        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        
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
