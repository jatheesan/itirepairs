<?php

namespace App\Http\Controllers;

use App\Models\ServiceImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function network_index()
    {
        $images = ServiceImage::where('service_id', 1)->get();

        return view('Services.Network_Infrastucture', compact('images'));
    }

    public function cctv_index()
    {
        $images = ServiceImage::where('service_id', 2)->get();

        return view('Services.Surveillance_System', compact('images'));
    }

    public function screen_index()
    {
        $images = ServiceImage::where('service_id', 3)->get();

        return view('Services.Digital_Display', compact('images'));
    }

    public function speech_index()
    {
        $images = ServiceImage::where('service_id', 4)->get();

        return view('Services.Speech_System', compact('images'));
    }

    public function wifi_index()
    {
        $images = ServiceImage::where('service_id', 5)->get();

        return view('Services.WiFi_Solutions', compact('images'));
    }

    public function web_index()
    {
        $images = ServiceImage::where('service_id', 6)->get();

        return view('Services.Web_Development', compact('images'));
    }
}
