<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    
    public function colors()
    {
        return view('pages.utilities.colors');
    }

    public function borders()
    {
        return view('pages.utilities.borders');
    }
    
    public function columns()
    {
        return view('pages.utilities.columns');
    }

    public function flex()
    {
        return view('pages.utilities.flex');
    }
    
    public function grids()
    {
        return view('pages.utilities.grids');
    }

}
