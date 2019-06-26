<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function welcome(Request $request, $name){
        return view('home.welcome') ->with(['name' => $name ]);
    }
}
