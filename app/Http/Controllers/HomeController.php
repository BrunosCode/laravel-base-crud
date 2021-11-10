<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all()->take(12);
        
        return view("home", compact("comics"));
    }
}
