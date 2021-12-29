<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Slider;

class SliderController extends Controller
{
    public function Dashboard(){
        return view('dashboard');
    }
    public function ViewSlider(){
        $slider = Slider::all();
        return view('slider',compact('slider'));
    }
    public function AddSlider(){
        return view('add');
    }
    public function Store(Request $request){
        $slider = new Slider;
        $slider->cat_name = $request->input('cat_name');
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
        if($request->hasfile('bg_img')){
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/slider', $filename);
            $slider->bg_img = $filename;
        }
        $slider->status = $request->input('status');

        $slider->save();
        return redirect()->back()->with('status', 'Slider Added Successfully!');
    }
    public function EditSlider($id){
        $slider = Slider::find($id);
        return view('edit', compact('slider'));
    }
    public function UpdateSlider(Request $request, $id){
        $slider = Slider::find($id);
        $slider->cat_name = $request->input('cat_name');
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');

        if($request->hasfile('bg_img')){
            $destination='upload/slider/'.$slider->bg_img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/slider/', $filename);
            $slider->bg_img = $filename;
        }
        $slider->status = $request->input('status');

        $slider->update();
        return redirect()->back()->with('status', 'Slider Updated Successfully!');

    }

    public function destroy($id){
        $slider = Slider::find($id);
        $destination='upload/slider/'.$slider->bg_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->back()->with('status', 'Slider Deleted Successfully!');
    }
}
