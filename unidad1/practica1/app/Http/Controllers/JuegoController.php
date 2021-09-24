<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
   public function adiccion(){
       return view('juegos.adiccion');
   }
}