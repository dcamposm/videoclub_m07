<?php

namespace App\Http\Controllers\prova;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvaController extends Controller
{
    public function show($id='Hola')
    {   
        return $id;
    }
}
