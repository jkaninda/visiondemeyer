<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function ourVision(){
        return view('pages.our-vision',[
            'title'=>trans('lang.system.our_vision'),
            'description'=>'We identify human resources, with particular emphasis on',
            'page_title'=>trans('lang.system.our_vision'),
            'route'=>'our-vision',
        ]);
    }

    public function donation(Request $request){
        return view('pages.donation',[
            'title'=>trans('lang.system.donate'),
            'description'=>'We identify human resources, with particular emphasis on',
            'page_title'=>trans('lang.system.donate'),
            'route'=>'donation',
        ]);
    }
    public function about(Request $request){
        return view('pages.about-us',[
            'title'=>trans('lang.about.about_us'),
            'description'=>trans('lang.about.about_us_desc'),
            'page_title'=>trans('lang.about.about_us'),
            'route'=>'about-us',
        ]);
    }
}
