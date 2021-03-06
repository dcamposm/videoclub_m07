<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
use App\Country;
use Krucas\Notification\Facades\Notification;
use App\Exports\DirectorsExport;
use Maatwebsite\Excel\Facades\Excel;

class DirectorController extends Controller
{
    public function getIndex(){
        //return response()->json(Director::All());
        
        return view('director.index', array('directors'=>Director::All()));
    } 
    
    public function export() 
    {
        return Excel::download(new DirectorsExport, 'directores.xlsx');
    }


    
    public function getShow($id){
        $director = Director::findOrFail($id);
        $countries = Country::all();
        /*foreach ($countries as $country){
            if ($director->nacionality == $country->id) {
                $coun = country(strtolower($country->iso));
            }
        }*/
        //$flag = $coun->getFlag();
        //return response()->json($flag);
        
        return view('director.show', array('director'=>$director,'countries'=>$countries));
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
        
        $countries = Country::all();
        
        $exist = false;
        foreach ($countries as $country){
            if ($country->iso==$request->input('nacionality')){
                $director->nacionality = $country->id;
                $exist = true;
            }
        }
        if ($exist == false){
            $coun = country($request->input('nacionality'));
            $country = new Country;
            $country->name = $coun->getName();
            $country->iso = $coun->getIsoAlpha2();
            $country->flag = '';
            $country->save();
            //return response()->json($country);   
            $director->nacionality = $country->id;
        }
        
        $director->image = $request->input('image');
        $director->save();
        
        Notification::success('Se a anadido el director');

        return redirect()->action('DirectorController@getCreate');
    }
    
    public function getEdit($id){ 
        $director = Director::find($id);
        $director->countries;   
        //return response()->json($director);
        $countries = countries();
        return view('director.edit', array('director'=>$director, 'countries'=>$countries));
    }
    
    public function putEdit(Request $request, $id){ 
        
        $director = Director::findOrFail($id);
        $director->name = $request->input('name');
        $director->lastname = $request->input('lastname');
        $director->bday = $request->input('bday');
        
        $countries = Country::all();
        
        $exist = false;
        foreach ($countries as $country){
            if ($country->iso==$request->input('nacionality')){
                $director->nacionality = $country->id;
                $exist = true;
            }
        }
        if ($exist == false){
            $coun = country($request->input('nacionality'));
            $country = new Country;
            $country->name = $coun->getName();
            $country->iso = $coun->getIsoAlpha2();
            $country->flag = '';
            $country->save();
            $director->nacionality = $country->id;
        }
        
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
