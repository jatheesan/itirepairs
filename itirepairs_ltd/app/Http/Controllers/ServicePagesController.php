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
        //dd($images);
    }
}
