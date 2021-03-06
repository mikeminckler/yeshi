<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view()->make('home');
    }

    public function contact()
    {
        return view()->make('contact');
    }

    public function recipes()
    {
        return view()->make('recipes');
    }

}
