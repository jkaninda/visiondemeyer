<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(Request $request){
        return view('blog.index',[
            'title'=>trans('lang.system.blog'),
            'description'=>'',
            'page_title'=>trans('lang.system.blog'),
            'route'=>'blog.index',
        ]);
    }
    public function show(Request $request,$slug){
        return view('blog.show');
    }
}
