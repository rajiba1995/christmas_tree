<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsControllere extends Controller
{
    
    public function alerts()
    {
        return view('pages.elements.alerts');
    }

    public function avatars()
    {
        return view('pages.elements.avatars');
    }
    
    public function badge()
    {
        return view('pages.elements.badge');
    }

    public function blockquotes()
    {
        return view('pages.elements.blockquotes');
    }

    public function breadcrumb()
    {
        return view('pages.elements.breadcrumb');
    }

    public function buttongroups()
    {
        return view('pages.elements.buttongroups');
    }

    public function buttons()
    {
        return view('pages.elements.buttons');
    }

    public function dropdowns()
    {
        return view('pages.elements.dropdowns');
    }

    public function images_figures()
    {
        return view('pages.elements.images-figures');
    }

    public function list()
    {
        return view('pages.elements.list');
    }

    public function listgroup()
    {
        return view('pages.elements.listgroup');
    }
    
    public function navbar()
    {
        return view('pages.elements.navbar');
    }

    public function navs_tabs()
    {
        return view('pages.elements.navs-tabs');
    }

    public function object_fit()
    {
        return view('pages.elements.object-fit');
    }

    public function pagination()
    {
        return view('pages.elements.pagination');
    }

    public function popovers()
    {
        return view('pages.elements.popovers');
    }

    public function progress()
    {
        return view('pages.elements.progress');
    }

    public function scrollspy()
    {
        return view('pages.elements.scrollspy');
    }

    public function spinners()
    {
        return view('pages.elements.spinners');
    }

    public function toasts()
    {
        return view('pages.elements.toasts');
    }

    public function tooltips()
    {
        return view('pages.elements.tooltips');
    }

    public function typography()
    {
        return view('pages.elements.typography');
    }

}
