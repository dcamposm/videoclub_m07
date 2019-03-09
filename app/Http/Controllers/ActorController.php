<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Country;
use App\Movie_Actor;
use App\Movie;
use Krucas\Notification\Facades\Notification;

class ActorController extends Controller
{
    public function getIndex(){
        return view('actor.index', array('actor'=>Actor::All()));
    } 

    public function getShow($id){
        $actor = Actor::findOrFail($id);
    	$countries = Country::all();
        $moviesActor = Movie_Actor::where("id_actor", $actor->id)->get();
        $moviesAll = Movie::all();
        return view('actor.show', array('actor'=>$actor, 'countries'=>$countries, 'moviesActor'=>$moviesActor, 'moviesAll'=>$moviesAll));
    } 

    public function getCreate(){   
        $countries = Country::all();
        return view('actor.create', array('countries'=>$countries));
    } 
    
    public function getEdit($id){ 
        $countries = Country::all();
        return view('actor.edit', array('actor'=>Actor::findOrFail($id), 'countries'=>$countries));
    }

    public function postCreate(Request $request){
        
        $actor = new Actor;
        $actor->name = $request->input('name');
        $actor->lastname = $request->input('lastname');
        $actor->bday = $request->input('bday');
        $actor->image = $request->input('image');
        $actor->nationality = $request->input('nationality');
        $actor->save();
        
        Notification::success('Success message');

        return redirect()->action('ActorController@getCreate');
    } 
    
    public function putEdit(Request $request, $id){ 
        
        $actor = Actor::findOrFail($id);
        $actor->name = $request->input('name');
        $actor->lastname = $request->input('lastname');
        $actor->bday = $request->input('bday');
        $actor->image = $request->input('image');
        $actor->nationality = $request->input('nationality');
        $actor->save();
        
        Notification::success('Success message');

        return redirect()->action('ActorController@getShow', ['id' => $id]);
    }

    public function deleteActor($id){ 
        Actor::findOrFail($id)->delete();
        
        Notification::success('Success message');
        
        return redirect()->action('ActorController@getIndex');
    }
}

