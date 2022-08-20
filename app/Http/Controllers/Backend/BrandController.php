<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BrandController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brand()
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $brand = new Brand;
       $brand->name          = $request->name;
       $brand->slug          = Str::slug($request->name);
       $brand->status        = $request->status;
       $brand->join_date     = $request->join_date;
       $brand->description   = $request->description;

       if($request->image){

        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('backend/assets/images/brands/' . $img);
        Image::make($image)->save($location);
        $brand->image = $img;
    }

       $brand->save();

       $notification = array(
        'message'    => 'success', 
        'alert-type' => 'A New Brand Created Successfully'
    );
     
       return redirect()->route('brand.manage')->with($notification);
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
        $brand = Brand::find($id);
        if (!is_null($brand)){
            return view('backend/pages/brand/edit', compact('brand'));
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

        $brand = Brand::find($id);
        if (!is_null($brand)){
            $brand->name          = $request->name;
            $brand->slug          = Str::slug($request->name);
            $brand->status        = $request->status;
            $brand->description   = $request->description;

       if($request->image){
              // delete image
          if(File::exists('backend/assets/images/brands/' . $brand->image)){
             File::delete('backend/assets/images/brands/' . $brand->image);
        }

        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('backend/assets/images/brands/' . $img);
        Image::make($image)->save($location);

        $brand->image = $img;
    }
            $brand->save();
            $notification = array(
                'message'    => 'info', 
                'alert-type' => 'The Brand Information Updated'
            );

            return redirect()->route('brand.manage')->with($notification);
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
        $brand = Brand::find($id);
        if(!is_null( $brand)){
            $brand->delete();
            $notification = array(
                'message'    => 'error', 
                'alert-type' => 'The Brand is Now On Soft Delete Mode'
            );
            return redirect()->route('brand.manage')->with($notification);
        }
        else{
           
        }
    }
}
