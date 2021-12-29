<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function categories(){
        $cat_list = Category::all();
        return view('category/categories', compact('cat_list'));
    }
    public function AddCategory(){
        return view('category/add-cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->cat_title = $request->input('cat_title');
        $category->cat_desc = $request->input('cat_desc');
        $category->save();
        return redirect()->back()->with('status', 'New Category Added Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat_data= Category::find($id);
        return view('category/edit-cat',compact('cat_data'));
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
        $cat_data = Category::find($id);
        $cat_data->cat_title = $request->input('cat_title');
        $cat_data->cat_desc = $request->input('cat_desc');
        $cat_data->update();
        return redirect()->back()->with('status', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_item = Category::find($id);
        $cat_item->delete();
        return redirect()->back()->with('status', 'Category Deleted Successfully!');
    }
}
