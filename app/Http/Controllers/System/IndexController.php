<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function handle($slug) {
      return view("system.$slug.index");
    }

    public function hotroPortal() {
        return view("system.hotro-portal.index");
    }

    public function price () {
        $prices = \App\Models\Price::all();
        View::share('prices', $prices);
        return view("system.price.index");
    }

    public function updatePrice (Request $request) {
        // dd($request->all());
        foreach ($request->except('_token') as $key => $value) {
            \App\Models\Price::where('id', $key)->update([
                'mai_bang' => $value['mai_bang'],
                'mai_ton' => $value['mai_ton'],
                'mai_ngoi' => $value['mai_ngoi'],
            ]);
        }
        $prices = \App\Models\Price::all();
        View::share('prices', $prices);
        return view("system.price.index");
    }

    public function index(Request $request){
        $configs = \App\Models\Config::query();
        if ($request->has('page')) {
            $configs->where('page', $request->input('page'));
        }
        $configs = $configs->get();
        View::share('configs', $configs);
        return view('system.index.index');
    }

    public function user(){
        return view('system.user.index');
    }

    public function upload(){


      /*********************************************
       * Change this line to set the upload folder *
       *********************************************/
      $imageFolder = "images/";

      reset ($_FILES);
      $temp = current($_FILES);
      if (is_uploaded_file($temp['tmp_name'])){
        header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);

        /*
          If your script needs to receive cookies, set images_upload_credentials : true in
          the configuration and enable the following two headers.
        */
        // header('Access-Control-Allow-Credentials: true');
        // header('P3P: CP="There is no P3P policy."');

        

        // Verify extension
        // if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png", "pdf"))) {
        //     header("HTTP/1.1 400 Invalid extension.");
        //     return;
        // }

        // Accept upload if there was no origin, or if it is an accepted origin
        // $temp['name'] = str_slug(explode($temp['name']);
        $arrayName = (explode('.', $temp['name']));
        foreach ($arrayName as $key => $value) {
            $arrayName[$key] = str_slug($value);
        }
        $temp['name'] = implode(".", $arrayName);
        $filetowrite = $imageFolder . $temp['name'];
        move_uploaded_file($temp['tmp_name'], $filetowrite);

        // Respond to the successful upload with JSON.
        // Use a location key to specify the path to the saved image resource.
        // { location : '/your/uploaded/image/file'}
        echo json_encode(array('location' => $filetowrite));
      } else {
        // Notify editor that the upload failed
        header("HTTP/1.1 500 Server Error");
      }
    }
}
