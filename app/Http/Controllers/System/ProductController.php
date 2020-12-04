<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Config;
use View;

class ProductController extends Controller
{

    public function index () {
        return view('system/product/index', [
            'pages' => Page::all()
        ]);
    }

    public function destroy (Page $product) {
        $product->delete();
        return redirect('/system/product');
    }

    public function store (Request $request) {
        $page = new Page;
        $page->name = $request->input('name');
        $page->slug = str_slug($page->name);
        $slug = $page->slug;
        $page->save();
        $this->initProduct($slug);
        return redirect('/system/product');
    }

    public function show (Page $product) {
        return redirect('/system/index?page=' . $product->slug);
    }

    public function initProduct ($slug) {
        $types = [
            [
                'key' => 'chinh-sach',
                'type' => 'slide'
            ],
            [
                'key' => 'chinh-sach-text',
                'type' => 'text'
            ],
            [
                'key' => 'doi-tuong',
                'type' => 'slide'
            ],
            [
                'key' => 'ho-so',
                'type' => 'slide'
            ],
            [
                'key' => 'ho-so-text',
                'type' => 'slide'
            ],
            [
                'key' => 'subtitle',
                'type' => 'text'
            ],
            [
                'key' => 'title',
                'type' => 'text'
            ],
        ];
        foreach ($types as $key => $value) {
            if (Config::where('page', $slug)->where('key', $value['key'])->first()) {

            } else {
                $config = new Config;
                $config->page = $slug;
                $config->key = $value['key'];
                $config->type = $value['type'];
                if ($config->type == 'slide') {
                    $config->value = '[]';
                }
                $config->save();

            }
        }

    }

}
