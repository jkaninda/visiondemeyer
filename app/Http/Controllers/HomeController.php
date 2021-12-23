<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home',[
            'title'=>trans('lang.system.home').' | '.trans('lang.system.app_name'),
            'description'=>trans('lang.system.app_description'),
            'page_title'=>trans('lang.system.home'),
            'route'=>'home',
        ]);
    }
}
