<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function blog(){
        return view('system.blog.blog.index');
    }

    public function category(){
        return view('system.blog.category.index');

    }

    public function order(){
        return view('system.blog.order.index');
    }
}
