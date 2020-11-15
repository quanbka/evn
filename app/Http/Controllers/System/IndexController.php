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

        // Sanitize input
        if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
            header("HTTP/1.1 400 Invalid file name.");
            return;
        }

        // Verify extension
        if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
            header("HTTP/1.1 400 Invalid extension.");
            return;
        }

        // Accept upload if there was no origin, or if it is an accepted origin
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
