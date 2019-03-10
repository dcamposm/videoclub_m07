<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Krucas\Notification\Facades\Notification;

class ClientController extends Controller
{
    public function getIndex(){
        return view('client.index', array('client'=>Client::All()));
    } 

    public function getShow($id){
        return view('client.show', array('client'=>Client::findOrFail($id)));
    }

    public function getCreate(){
        return view('client.create');
    } 
    
    public function getEdit($id){
        return view('client.edit', array('client'=>Client::findOrFail($id)));
    }

    public function postCreate(Request $request){
        
        $client = new Client;
        $client->dni = $request->input('dni');
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->bday = $request->input('bday');
        $client->nacionality = $request->input('nacionality');
        $client->address = $request->input('address');
        $client->save();
        
        Notification::success('Cliente creado correctamente');

        return redirect()->action('ClientController@getCreate');
    } 
    
    public function putEdit(Request $request, $id){ 
        
        $client = Client::findOrFail($id);
        $client->dni = $request->input('dni');
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->bday = $request->input('bday');
        $client->nacionality = $request->input('nacionality');
        $client->address = $request->input('address');
        $client->save();
        
        Notification::success('Cliente modificado correctamente');

        return redirect()->action('ClientController@getShow', ['id' => $id]);
    }

    public function deleteClient($id){ 
        Client::findOrFail($id)->delete();
        
        Notification::success('Cliente eliminado correctamente');
        
        return redirect()->action('ClientController@getIndex');
    }
}
