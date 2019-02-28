<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Krucas\Notification\Facades\Notification;

class UserController extends Controller
{
    public function getIndex(){
        return view('user.index', array('user'=>User::All()));
    } 

    public function getShow($id){
    	$rol = Rol::all();
        return view('user.show', array('user'=>User::findOrFail($id), 'rol'=>$rol));
    }

    public function getCreate(){
    	$rol = Rol::all();
        return view('user.create', array('rol'=>$rol));
    } 
    
    public function getEdit($id){
    	$rols = Rol::all();
        return view('user.edit', array('user'=>User::findOrFail($id), 'rols'=>$rols));
    }

    public function postCreate(Request $request){
        
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->rol = $request->input('rol');
        $user->save();
        
        Notification::success('Success message');

        return redirect()->action('UserController@getCreate');
    } 
    
    public function putEdit(Request $request, $id){ 
        
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->rol = $request->input('rol');
        $user->save();
        
        Notification::success('Success message');

        return redirect()->action('UserController@getShow', ['id' => $id]);
    }

    public function deleteUser($id){ 
        User::findOrFail($id)->delete();
        
        Notification::success('Success message');
        
        return redirect()->action('UserController@getIndex');
    }
}
