<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceImageRequest;
use App\Http\Requests\UpdateServiceImageRequest;
use Illuminate\Http\Request;

class ServiceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $images = ServiceImage::all();

        return view('db_images.view',  compact('services', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceImageRequest $request)
    {

        $service_id = $request -> service_id;
        $images = $request-> file('image');
        // if (is_array($images) || is_object($images))
        // {
        //     return Redirect('/images/view')->with('error','good good good.');
        // }
        // else // If $myList was not an array, then this block is executed. 
        // {
        //    return Redirect('/images/view')->with('error','Unfortunately, an error occured.');
        // }

        if (is_array($images) || is_object($images))
        {
            // If yes, then foreach() will iterate over it.
            foreach($images as $image)
            {

                $extention = $image->getClientOriginalExtension();
                $file_name = hexdec(uniqid()).'.'.$extention;
                $image->move('images/service/', $file_name);
        
                $last_img = 'images/service/'.$file_name;
                ServiceImage::insert([
               'image'=> $last_img,
               'service_id'=> $service_id
                ]);
                return Redirect()->back()->with('success','images upload successfully');
            }// end of the foreach
        }
        else // If $myList was not an array, then this block is executed. 
        {
            return Redirect('/images/view')->with('error','Unfortunately, an error occured.');
        }

        
        //return Redirect()->back()->with('success','images upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $service_id = $request -> service_id;
        $services = Service::all();
        $images = ServiceImage::where('service_id', $service_id)->get();

        return view('db_images.view',  compact('service_id', 'services', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceImageRequest  $request
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceImageRequest $request, $serviceImage)
    {

        $update_image = ServiceImage::find($serviceImage);
        $update_image -> service_id = $request->get('service_id');
        $update_image -> is_main = $request->get('is_main');

        $update_image -> save();
        return redirect('/images/view')->with('success', 'Image details Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($serviceImage)
    {
        $delete_image = ServiceImage::find($serviceImage);
        $delete_image->delete();
        return redirect('/images/view')->with('success', 'Image Deleted!');
    }
}
