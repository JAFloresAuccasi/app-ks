<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Models\customer;

class MenuController extends Controller
{
   
    public function menu_price()
    {
        return view('home_web.menu.price');
    }
    public function menu_publicar()
    {
        return view('home_web.menu.publicar');
    }
    // public function menu_login()
    // {
    //     return view('home_web.menu.login');
    // }
    // public function menu_sign_up()
    // {
    //     return view('home_web.menu.sign_up');
    // }
    public function menu_contacto()
    {
        return view('home_web.menu.contacto');
    }
    public function menu_legal()
    {
        return view('home_web.menu.area_legal');
    }
}