<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $title = config('info.full_name');
        return view('frontend.index.index', compact('title'));
    }

    public function route($slug){
        return $slug;
    }

    public function sitemap () {
        $domain = \Request::root();
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::all();

        return response()->view('frontend.sitemap', compact(['domain', 'categories', 'products']))->header('Content-Type', 'text/xml');
    }

    public function product () {
        $pages = \App\Models\Page::all();
        \View::share('pages', $pages);
        \View::share('slug', "san-pham");
        return view("frontend.pages.index");
    }
}
