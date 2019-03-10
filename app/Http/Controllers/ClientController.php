<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Comment;
use App\Movie;
use App\Country;
use Krucas\Notification\Facades\Notification;

class ClientController extends Controller
{
    public function getIndex(){
        return view('client.index', array('client'=>Client::All()));
    } 

    public function getShow($id){

        $commentsMovie = Comment::where("id_client", $id)->get();
        $moviesAll = Movie::All();

        $client = Client::findOrFail($id);

        $countries = Country::all();

        return view('client.show', array(   'client'=>$client,
                                            'moviesAll'=>$moviesAll,
                                            'commentsMovie'=>$commentsMovie,
                                            'countries'=>$countries
                                        ));
    }

    public function getCreate(){
        return view('client.create', array('countries'=>countries()));
    } 
    
    public function getEdit($id){
        $client = Client::findOrFail($id);
        $client->countries;
        $countries = countries();
        return view('client.edit', array(   'client' => $client,
                                            'countries' => $countries
                                            ));
    }

    public function postCreate(Request $request){
        
        $client = new Client;
        $client->dni = $request->input('dni');
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->bday = $request->input('bday');

        $countries = Country::all();
        
        $exist = false;
        foreach ($countries as $country){
            if ($country->iso==$request->input('nacionality')){
                $client->nacionality = $country->id;
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
            $client->nacionality = $country->id;
        }

        $client->address = $request->input('address');
        $client->save();
        
        Notification::success('Cliente creado correctamente');

        return redirect()->action('ClientController@getIndex');
    } 
    
    public function putEdit(Request $request, $id){ 
        
        $client = Client::findOrFail($id);
        $client->dni = $request->input('dni');
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->bday = $request->input('bday');

        $countries = Country::all();
        
        $exist = false;
        foreach ($countries as $country){
            if ($country->iso==$request->input('nacionality')){
                $client->nacionality = $country->id;
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
            $client->nacionality = $country->id;
        }

        $client->address = $request->input('address');
        $client->save();
        
        Notification::success('Cliente modificado correctamente');

        return redirect()->action('ClientController@getShow', ['id' => $id]);
    }

    public function deleteClient($id){

        Comment::where("id_client", $id)->delete();
        Client::findOrFail($id)->delete();
        
        Notification::success('Cliente eliminado correctamente');
        
        return redirect()->action('ClientController@getIndex');
    }
}
