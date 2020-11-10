<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product(){
        return view('system.shop.product.index');
    }

    public function category(){
        return view('system.shop.category.index');

    }

    public function order(){
        return view('system.shop.order.index');
    }

    public function showImport () {
        return view('system.shop.import.index');
    }

    public function import (Request $request) {
        ini_set("memory_limit", "-1");
        set_time_limit(0);
        $retval = [];
        if($request->hasFile('file')){
            // Đọc sheets từ file excel
            $inputFileName = $request->file('file')->getRealPath();
            $sheetData = $this->getSpeadsheetFromFile($inputFileName);
            // Lọc các sản phẩm đơn giản
            $importProducts = array_filter($sheetData, function ($product) {
                return ($product[1] == 'simple');
            });
            // Build lại sản phẩm
            $products = $this->rebuildProducts($importProducts);
            // Add lần lượt từng sản phẩm với danh mục
            foreach ($products as $product) {
                $retval[] = $this->createProductFromExcel($product);
            }
            // Return các sản phẩm đã create / update
            return $retval;


        } else {
            return "Không file";
        }
    }

    private function getSpeadsheetFromFile ($filename) {
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($filename);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        return $sheetData;
    }

    private function rebuildProducts ($importProducts) {
        $products = [];
        foreach ($importProducts as $product) {

            $products[] = [
                'name' => $product[3],
                'description' => $product[7],
                'content' => $product[8],
                'price' => $product[24],
                'sale_price' => $product[23],
                'images' => $product[28],
                'categories' => $product[25],

            ];
        }
        // dd($products);
        return $products;
    }

    private function createProductFromExcel ($product) {
        // print_r($product['description']); die;
        try {
            $tempProduct = \App\Models\Product::where('name', $product['name'])->first();
            if ($tempProduct) {

            } else {
                $tempProduct = new \App\Models\Product;
            }
            // print_r($tempProduct->description); die;
            $tempProduct->name = $product['name'];
            $tempProduct->slug = str_slug($product['name']);
            $tempProduct->description = $product['description'];
            $tempProduct->price = $product['sale_price'] ? $product['sale_price'] : $product['price'];
            $tempProduct->old_price = $product['sale_price'] ? $product['price'] : '';
            $tempProduct->slides = $product['images'];
            $tempProduct->content = $product['content'];
            $images = explode(',', $product['images']);
            if (isset($images[0])) {
                $tempProduct->image = $images[0];
            }
            if ($product['name']) {
                $tempProduct->save();
            }

            $this->assignCategories($tempProduct, $product);

            return $tempProduct;
        } catch (Exception $e) {

        }

    }

    private function assignCategories ($tempProduct, $product) {
        $categories = $product['categories'];
        $categories = explode(",", $categories);
        foreach ($categories as $key => $category) {
            $categories[$key] = explode(">", $category);
            // foreach ($categories[$key] as $key2 => $value) {
            for ($key2=0; $key2 < count($categories[$key]); $key2++) {
                $categories[$key][$key2] = trim($categories[$key][$key2]);
                $tempCategoryName = $categories[$key][$key2];
                $tempCategory = \App\Models\Category::where('name', $tempCategoryName)->first();
                if ($tempCategory) {
                    $tempCategory->update([
                        'name' => $tempCategoryName
                    ]);
                } else {
                    $tempCategory = \App\Models\Category::create([
                        'name' => $tempCategoryName
                    ]);
                }
                $categories[$key][$key2] = $tempCategory;

                // Nếu là danh mục gốc thì bỏ qua
                // Nếu là danh mục con thì lấy cha là danh mục trên nó
                if ($key2 > 0) {
                    // print_r($categories[$key][$key2 - 1]);
                    // print_r($categories[$key][$key2]); die;
                    $tempCategory->category_id = $categories[$key][$key2 - 1]->id;
                    $tempCategory->save();

                }
                // Nếu là danh mục cuối cùng thì gán nó vào sản phẩm
                if ($key2 == (count($categories[$key]) - 1)) {
                    $tempProduct->categories()->detach();
                    $tempProduct->categories()->attach($tempCategory->id);

                }

            }
        }
        // print_r($categories); exit;
    }

}
