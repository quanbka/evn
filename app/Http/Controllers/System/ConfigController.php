<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use View;

class ConfigController extends Controller
{
    public function show ($id, Request $request) {
        $config = Config::findOrFail($id);
        View::share('config', $config);
        return view('system.config.edit');
    }

    public function update ($id, Request $request) {
      // dd($request->all());
      $config = Config::findOrFail($id);
      $config->update($request->all());
      if($config->type == 'slide') {
        $config->value == json_encode(json_decode($config->value));
        $config->save();
      }
      View::share('config', $config);
      return view('system.config.edit');
    }
}
