<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Config;
use View;

class ShopController extends Controller
{

    public function handle($page = false, $slug = 'home', Request $request) {
        $configs = Config::whereIn('page', [$slug, 'global'])->get();
        $GLOBALS['configs'] = [];
        foreach($configs as $config) {
            if ($config->key == 'content' && $config->type == 'editor') {
                return $config->value;
            }
            $GLOBALS['configs'][$config->key] = $config->value;
            $tempSlug = str_replace("-", "", $slug);
            if (method_exists($this, $tempSlug)) {
                $this->$tempSlug();
            }
        }
        View::share('slug', $slug);
        if ($page) {
            if ($page == 'san-pham') {
                $this->initProduct($slug);
                if ($request->method() == 'POST') {
                    redirect('/system/index?page=' . $slug);
                }
            }
            $slug = $page;
        }
        return view('frontend.'.$slug.'.index');
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

    public function nhacungcap () {
        $prices = \App\Models\Price::all();
        $priceObject = [];
        foreach ($prices as $key => $value) {
            if (!isset($priceObject[$value->cong_suat])) {
                $priceObject[$value->cong_suat] = [];
            }
            $priceObject[$value->cong_suat][$value->he] = $value;
        }
        // dd($priceObject);
        View::share('priceObject', $priceObject);
    }

    public function order($id = 0){
        $product = \App\Models\Product::find($id);
        if($product){
            View::share('product', $product);
        }
        $title = "Đặt hàng";
        return view('frontend.shop.order', compact('title'));
    }

    public function sendOrder(Request $request){

        $this->validate($request, [
            'phone' => 'required',
            'email' => 'nullable|email'
        ], [

        ], [
            'phone' => 'số điện thoại',
            'name' => 'tên'
        ]);

        \App\Models\Order::create($request->all());

        dispatch(new \App\Jobs\SendOrderEmail($request->all()));
        // print_r(config('info.email')); die;
        // \Mail::to(config('info.email'))
        //     ->cc('quanbka.cntt@gmail.com')
        //     ->send(new \App\Mail\OrderCreated($request->all()));

        $title = "Đặt hàng thành công";
        return view('frontend.shop.success', compact('title'));
    }
}
