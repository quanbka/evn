<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Device;

class PriceService extends Controller
{
    public function index (Request $request) {
        $devices = Device::query();
        $prices = Price::query();
        if ($request->has('he')) {
            $devices->where('he', $request->input('he'));
            $prices->where('he', $request->input('he'));
        }
        if ($request->has('cong_suat')) {
            $prices->where('cong_suat', $request->input('cong_suat'));
        }
        if ($request->has('mai')) {
            $prices->select(['id', 'cong_suat', 'he']);
            $prices->addSelect($request->input('mai'));
        }
        $devices = $devices->get();
        $prices = $prices->get();
        if ($request->has('cong_suat')) {
            foreach ($devices as $key => $value) {
                $devices[$key]->cong_suat = $request->input('cong_suat');
            }
        }
        return [
            'prices' => $prices,
            'devices' => $devices
        ];
    }
}
