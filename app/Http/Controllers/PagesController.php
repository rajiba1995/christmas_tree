<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about_us()
    {
        return view('pages.pages.about-us');
    }

    public function add_products()
    {
        return view('pages.pages.add-products');
    }
    
    public function chat()
    {
        return view('pages.pages.chat');
    }

    public function check_out()
    {
        return view('pages.pages.check-out');
    }

    public function comingsoon()
    {
        return view('pages.pages.comingsoon');
    }

    public function create_invoice()
    {
        return view('pages.pages.create-invoice');
    }

    public function create_password_basic()
    {
        return view('pages.pages.create-password-basic');
    }

    public function create_password_cover()
    {
        return view('pages.pages.create-password-cover');
    }

    public function edit_products()
    {
        return view('pages.pages.edit-products');
    }

    public function emptypage()
    {
        return view('pages.pages.emptypage');
    }

    public function error404()
    {
        return view('pages.pages.error404');
    }
    
    public function error500()
    {
        return view('pages.pages.error500');
    }

    public function error501()
    {
        return view('pages.pages.error501');
    }

    public function faqs()
    {
        return view('pages.pages.faqs');
    }

    public function gallery()
    {
        return view('pages.pages.gallery');
    }

    public function invoice_details()
    {
        return view('pages.pages.invoice-details');
    }
    
    public function invoice_list()
    {
        return view('pages.pages.invoice-list');
    }

    public function lockscreen_basic()
    {
        return view('pages.pages.lockscreen-basic');
    }
    
    public function lockscreen_cover()
    {
        return view('pages.pages.lockscreen-cover');
    }

    public function mail_settings()
    {
        return view('pages.pages.mail-settings');
    }

    public function mail()
    {
        return view('pages.pages.mail');
    }

    public function maintanace()
    {
        return view('pages.pages.maintanace');
    }

    public function order_details()
    {
        return view('pages.pages.order-details');
    }

    public function orders()
    {
        return view('pages.pages.orders');
    }

    public function pricing()
    {
        return view('pages.pages.pricing');
    }

    public function product_cart()
    {
        return view('pages.pages.product-cart');
    }

    public function product_details()
    {
        return view('pages.pages.product-details');
    }
    
    public function products_list()
    {
        return view('pages.pages.products-list');
    }

    public function products()
    {
        return view('pages.pages.products');
    }

    public function profile()
    {
        return view('pages.pages.profile');
    }

    public function reset_password_basic()
    {
        return view('pages.pages.reset-password-basic');
    }

    public function reset_password_cover()
    {
        return view('pages.pages.reset-password-cover');
    }

    public function reviews()
    {
        return view('pages.pages.reviews');
    }

    public function sign_in_basic()
    {
        return view('pages.pages.sign-in-basic');
    }

    public function sign_in_cover()
    {
        return view('pages.pages.sign-in-cover');
    }

    public function sign_up_basic()
    {
        return view('pages.pages.sign-up-basic');
    }

    public function sign_up_cover()
    {
        return view('pages.pages.sign-up-cover');
    }

    public function task_details()
    {
        return view('pages.pages.task-details');
    }

    public function task_kanban_board()
    {
        return view('pages.pages.task-kanban-board');
    }

    public function task_list_view()
    {
        return view('pages.pages.task-list-view');
    }

    public function team()
    {
        return view('pages.pages.team');
    }

    public function terms()
    {
        return view('pages.pages.terms');
    }

    public function todolist()
    {
        return view('pages.pages.todolist');
    }

    public function two_step_verfication_basic()
    {
        return view('pages.pages.two-step-verfication-basic');
    }

    public function two_step_verfication_cover()
    {
        return view('pages.pages.two-step-verfication-cover');
    }

    public function wish_list()
    {
        return view('pages.pages.wish-list');
    }

}
