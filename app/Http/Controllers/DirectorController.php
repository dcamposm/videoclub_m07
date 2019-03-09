<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
use App\Country;
use Krucas\Notification\Facades\Notification;

class DirectorController extends Controller
{
    public function getIndex(){
        //return response()->json(Director::All());
        
        return view('director.index', array('directors'=>Director::All()));
    } 
    
    public function getShow($id){
        //$countries = Country::all();
        return view('director.show', array('director'=>Director::findOrFail($id)));
    } 
    
    public function getCreate(){   
        //$countries = Country::all();
        $countries = countries();
        
        //return response()->json($countries);
        return view('director.create', array('countries'=>$countries));
    } 
    
    public function postCreate(Request $request){
        
        $director = new Director;
        $director->name = $request->input('name');
        $director->lastname = $request->input('lastname');
        $director->bday = $request->input('bday');
        $director->nacionality = $request->input('nacionality');
        $director->image = $request->input('image');
        $director->save();
        
        Notification::success('Se a anadido el director');

        return redirect()->action('DirectorController@getCreate');
    }
    
    public function getEdit($id){ 
        $countries = countries();
        return view('director.edit', array('director'=>Director::findOrFail($id), 'countries'=>$countries));
    }
    
    public function putEdit(Request $request, $id){ 
        
        $director = Director::findOrFail($id);
        $director->name = $request->input('name');
        $director->lastname = $request->input('lastname');
        $director->bday = $request->input('bday');
        $director->nacionality = $request->input('nacionality');
        $director->image = $request->input('image');
        $director->save();
        
        Notification::success('Se a modificado el director');

        return redirect()->action('DirectorController@getShow', ['id' => $id]);
    }
    
    public function deleteDirector($id){ 
        Director::findOrFail($id)->delete();
        
        Notification::success('Director eliminado');
        
        return redirect()->action('DirectorController@getIndex');
    }
}
