<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Country;
use Krucas\Notification\Facades\Notification;

class ActorController extends Controller
{
    public function getIndex(){
        return view('actor.index', array('actor'=>Actor::All()));
    } 

    public function getShow($id){
    	$countries = Country::all();
        return view('actor.show', array('actor'=>Actor::findOrFail($id), 'countries'=>$countries));
    } 
}

