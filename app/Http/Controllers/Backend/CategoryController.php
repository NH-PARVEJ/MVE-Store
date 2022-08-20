<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $categories = Category::orderBy('name', 'asc')->where('is_parent',0)->get();
        return view('backend.pages.category.manage', compact('categories'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::orderBy('name', 'asc')->where('is_parent',0)->get();
        return view('backend.pages.category.create', compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category;
        $category->name        = $request->name;
        $category->slug        = Str::Slug($request->name);
        $category->is_parent   = $request->is_parent;
        $category->image       = $request->image;
        $category->description = $request->description;
        $category->status      = $request->status;

        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/assets/images/categories/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        $category->save();

        $notification = array(
            'message'    => 'success', 
            'alert-type' => 'A New Category Created Successfully'
        );
        return redirect()->route('category.manage')->with($notification);
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
        $parent_categories = Category::orderBy('name', 'asc')->where('is_parent',0)->get();
        $category = Category::find($id);
        if (!is_null($category)){
            return view('backend/pages/category/edit', compact('category', 'parent_categories'));
        }
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
        $category = Category::find($id);
        if (!is_null($category)){
            $category->name        = $request->name;
            $category->slug        = Str::Slug($request->name);
            $category->is_parent   = $request->is_parent;
            $category->description = $request->description;
            $category->status      = $request->status;

       if($request->image){
              // delete image
          if(File::exists('backend/assets/images/categories/' . $category->image)){
             File::delete('backend/assets/images/categories/' . $category->image);
        }

        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('backend/assets/images/category/' . $img);
        Image::make($image)->save($location);

        $category->image = $img;
    }
            $category->save();

            $notification = array(
                'message'    => 'info', 
                'alert-type' => 'The Category Information Updated'
            );

            return redirect()->route('category.manage')->with($notification );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(!is_null( $category)){
            $category->delete();
            $notification = array(
                'message'    => 'error', 
                'alert-type' => 'The Category is Now On Soft Delete Mode'
            );
            return redirect()->route('category.manage')->with($notification);
        }
        else{
           
        }
    }
    
}