<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceduiController extends Controller
{
    
    public function accordions_collpase()
    {
        return view('pages.advancedui.accordions-collpase');
    }

    public function blog_create()
    {
        return view('pages.advancedui.blog-create');
    }
    
    public function blog_details()
    {
        return view('pages.advancedui.blog-details');
    }

    public function blog()
    {
        return view('pages.advancedui.blog');
    }

    public function Indicators()
    {
        return view('pages.advancedui.Indicators');
    }

    public function modals_closes()
    {
        return view('pages.advancedui.modals-closes');
    }

    public function offcanvas()
    {
        return view('pages.advancedui.offcanvas');
    }

    public function skeleton()
    {
        return view('pages.advancedui.skeleton');
    }

    public function ratings()
    {
        return view('pages.advancedui.ratings');
    }

    public function search()
    {
        return view('pages.advancedui.search');
    }

    public function stepper()
    {
        return view('pages.advancedui.stepper');
    }

    public function sweet_alerts()
    {
        return view('pages.advancedui.sweet-alerts');
    }

    public function swiperjs()
    {
        return view('pages.advancedui.swiperjs');
    }

    public function timeline()
    {
        return view('pages.advancedui.timeline');
    }

    public function timeline2()
    {
        return view('pages.advancedui.timeline2');
    }

    public function userlist()
    {
        return view('pages.advancedui.userlist');
    }

}
