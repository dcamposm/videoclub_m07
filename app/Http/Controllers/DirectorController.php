<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorController extends Controller
{
    public function getIndex(){
        //return response()->json(Director::All());
        return view('director.index', array('directors'=>Director::All()));
    } 
    
    public function getShow($id){
        return view('director.show', array('director'=>Director::findOrFail($id)));
    } 
}
