<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Services()
    {
        $service_list = Service::with('category')->get();
        return view('service/services', compact('service_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddService()
    {
        $categories = Category::all();
        return view('service/add-service', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->service_title = $request->input('service_title');
        $service->service_short_desc = $request->input('service_short_desc');
        if($request->hasfile('service_img')){
            $file = $request->file('service_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/service', $filename);
            $service->service_img = $filename;
        }
        $service->service_cat = $request->input('service_cat');
        $service->service_status = $request->input('service_status');

        $service->save();
        return redirect()->back()->with('status', 'Service Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $service_data = Service::find($id);
        return view('service/edit-service', compact('service_data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->service_title = $request->input('service_title');
        $service->service_short_desc = $request->input('service_short_desc');

        if($request->hasfile('service_img')){
            $destination='upload/service/'.$service->service_img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('service_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/service/', $filename);
            $service->service_img = $filename;
        }
        $service->service_cat = $request->input('service_cat');
        $service->service_status = $request->input('service_status');

        $service->update();
        return redirect()->back()->with('status', 'Service Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $destination='upload/service/'.$service->service_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $service->delete();
        return redirect()->back()->with('status', 'Service Deleted Successfully!');
    }
}
