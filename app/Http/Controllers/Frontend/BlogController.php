<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Blog;
use View;

class BlogController extends Controller
{
    public function category($slug, $id, Request $request){
        $category = PostCategory::findOrFail($id);
        $childrenIds = $category->getChildrenIds();
        $title = $category->name;
        if($request->has('order_by')){

            $blogs = \App\Models\Blog::whereIn('category_id', $childrenIds)->orderBy('id', 'desc')->paginate(12)->appends('order_by', $request->input('order_by'));

        } else {
            $blogs = \App\Models\Blog::whereIn('category_id', $childrenIds)->orderBy('id', 'desc')->paginate(12)->appends('order_by', $request->input('order_by'));
        }
        return view('frontend.blog.category', compact('title', 'blogs'));
    }

    public function post($slug, $id, Request $request){
        $blog = Blog::findOrFail($id);
        View::share('blog', $blog);
        $title = $blog->name;
        return view('frontend.blog.blog', compact('title'));
    }

}
