<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use View;

class ShopController extends Controller
{
    public function shop (Request $request) {
        $title = "Trang chủ";
        $products = Product::orderBy('id', 'desc')->paginate(36);
        if ($request->has('order_by')) {
            $query = Product::where('id', '>', '1');
            $this->buildQueryByOrderBy($query, $request);
            $products = $query->paginate(36);
        }
        return view('frontend.index.index', compact('title', 'products'));
    }

    private function buildQueryByOrderBy($query, Request $request){
        if($request->has('order_by')){
            if(!is_array($request->input('order_by'))){
                $orderByField = $request->input('order_by');
                if($orderByField[0] == '-'){
                    $orderByField = substr($orderByField, 1);
                    $query->orderBy($orderByField, 'desc');
                } else {
                    $query->orderBy($orderByField, 'asc');
                }
            } else {
                foreach ($request->input('order_by') as $orderByField) {
                    if($orderByField[0] == '-'){
                        $orderByField = substr($orderByField, 1);
                        $query->orderBy($orderByField, 'desc');
                    } else {
                        $query->orderBy($orderByField, 'asc');
                    }
                }
            }
        }
    }

    public function category($slug, $id, Request $request){
        $category = Category::findOrFail($id);
        $title = $category->name;
        $products = $category->getChildenProducts()->paginate(12);
        if ($request->has('order_by')) {
            $query = $category->getChildenProducts();
            $this->buildQueryByOrderBy($query, $request);
            $products = $query->paginate(12);
        }
        return view('frontend.shop.category', compact('title', 'products'));
    }

    public function product($slug, $id, Request $request){
        $product = Product::findOrFail($id);
        $title = $product->name;
        $product->meta_title = $product->meta_title ? $product->meta_title : $product->name;
        $product->meta_description = $product->meta_description ? $product->meta_description : $product->description;
        $products = \App\Models\Product::search($title)->take(5)->get();
        $relatedProducts = [];
        foreach ($products as $value) {
            if ($value->id != $product->id) {
                $relatedProducts[] = $value;
            }
        }
        return view('frontend.shop.product', compact('product', 'title', 'relatedProducts'));
    }

    public function recent(){
        $title = "Sản phẩm mới nhất";
        $products = \App\Models\Product
            ::orderBy('id', 'desc')
            ->paginate(16);
        return view('frontend.shop.product-list', compact('title', 'products'));
    }

    public function search (Request $request) {
        $keyword = $request->input('q');
        View::share('keyword', $keyword);
        $title = "Kết quả tìm kiếm cho từ khóa '" . $keyword . "'";
        // $products = \App\Models\Product
        //     // ::where('name', 'like', "%$keyword%")
        //     ::select('*')
        //     ->addSelect(\DB::raw("MATCH(name)AGAINST('$keyword') as score"))
        //     ->whereRaw("MATCH(name, description, content)AGAINST('$keyword')")
        //     ->orWhere('name', 'like', "%$keyword%")
        //     ->orderBy("score", 'desc')
        //     ->paginate();
        $products =  \App\Models\Product::search($keyword)->paginate();
        foreach ($request->all() as $key => $value) {
            $products = $products->appends($key, $request->input($key));
        }
        return view('frontend.shop.product-list', compact('title', 'products'));
    }

    public function redirect ($keyword) {
        $keyword = str_replace("-", " ", $keyword);
        // print_r($keyword); die;
        return \Redirect::route('search', ['q' => $keyword]);
    }

    public function sale(){
        $title = "Sản phẩm đang giảm giá";
        $products = \App\Models\Product::whereNotNull('old_price')
            ->where('old_price', '>', 0)
            ->orderBy('id', 'desc')
            ->paginate(16);
        return view('frontend.shop.product-list', compact('title', 'products'));
    }

    public function collection(){
        $title = "Bộ sưu tập";
        return view('frontend.shop.collection', compact('title'));
    }

    public function design(){
        $title = "Thiết kế nội thất";
        return view('frontend.shop.design', compact('title'));
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
