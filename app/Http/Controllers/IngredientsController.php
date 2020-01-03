<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function original()
    {
        return view()->make('ingredients.original');
    }

    public function chili()
    {
        return view()->make('ingredients.chili');
    }

    public function ginger()
    {
        return view()->make('ingredients.ginger');
    }

    public function chipotle()
    {
        return view()->make('ingredients.chipotle');
    }
}
