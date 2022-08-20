<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\District;
use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vendor()
    {
        $vendors = User::orderBy('name', 'asc')->where('role', 2)->get();
        return view('backend.pages.vendor.manage', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::orderBy('name', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();
        return view('backend/pages.vendor.create', compact('divisions','districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = new User();

      if($request->password === $request->re_password){
       $request->password            = Hash::make($request->password);
       $vendor->name                 = $request->name;
       $vendor->store_name           = $request->store_name;
       $vendor->phone                = $request->phone;
       $vendor->email                = $request->email;
       $vendor->primary_address      = $request->primary_address;
       $vendor->address              = $request->address;
       $vendor->password             = $request->password;
       $vendor->zip_code             = $request->zip_code;
       $vendor->e_tin                = $request->e_tin;
       $vendor->division             = $request->division;
       $vendor->district             = $request->district;
       $vendor->description          = $request->description;
       $vendor->status               = $request->status;
       $vendor->role                 = $request->role;
       $vendor->store_slug           = Str::Slug($request->name);
         


       if($request->store_logo){
        $store_logo = $request->file('store_logo');
        $logo = time() . '.' . $store_logo->getClientOriginalExtension();
        $location = public_path('backend/assets/images/vendors/store-logo/' . $logo);
        Image::make($store_logo)->save($location);
        $vendor->store_logo = $logo;
    }


       if($request->nid_copy){
        $nid_copy = $request->file('nid_copy');
        $nid_img = time() . '.' . $nid_copy->getClientOriginalExtension();
        $location = public_path('backend/assets/images/vendors/nid/' . $nid_img);
        Image::make($nid_copy)->save($location);
        $vendor->nid_copy = $nid_img;
    }


    if($request->trade_license_copy){
        $trade_license_copy = $request->file('trade_license_copy');
        $trade_license_img = time() . '.' . $trade_license_copy->getClientOriginalExtension();
        $location = public_path('backend/assets/images/vendors/nid/' . $trade_license_img);
        Image::make($trade_license_copy)->save($location);
        $vendor->trade_license_copy = $trade_license_img;
    }

   
        $vendor->save();
        $notification = array(
            'message'    => 'success', 
            'alert-type' => 'A New Vendor Created Successfully'
        );
        return redirect()->route('vendor.manage')->with($notification);
    }


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
        $divisions = Division::orderBy('name', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();

        $vendor = User::find($id);
        if( !is_null($vendor) ){
            return view('backend.pages.vendor.edit', compact('divisions','districts','vendor'));
        }
    }

    /**s
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendor = User::find($id);
        if(!is_null($vendor)){

            if($request->password === $request->re_password){
                $request->password            = Hash::make($request->password);
                $vendor->name                 = $request->name;
                $vendor->store_name           = $request->store_name;
                $vendor->phone                = $request->phone;
                $vendor->email                = $request->email;
                $vendor->primary_address      = $request->primary_address;
                $vendor->address              = $request->address;
                $vendor->password             = $request->password;
                $vendor->zip_code             = $request->zip_code;
                $vendor->e_tin                = $request->e_tin;
                $vendor->division             = $request->division;
                $vendor->district             = $request->district;
                $vendor->description          = $request->description;
                $vendor->status               = $request->status;
                $vendor->role                 = $request->role;
                $vendor->store_slug           = Str::Slug($request->name);
         
         
                if($request->store_logo){
                 // delete image
                if(File::exists('backend/assets/images/vendors/store-logo/' . $vendor->store_logo)){
                   File::delete('backend/assets/images/vendors/store-logo/' . $vendor->store_logo);
                 }

                if($request->store_logo){
                   $store_logo = $request->file('store_logo');
                   $logo = time() . '.' . $store_logo->getClientOriginalExtension();
                   $location = public_path('backend/assets/images/vendors/store-logo/' . $logo);
                   Image::make($store_logo)->save($location);
                   $vendor->store_logo = $logo;
                 }
                }

                
                if($request->image){
                 // delete image
                if(File::exists('backend/assets/images/vendors/nid/' . $vendor->nid_copy)){
                   File::delete('backend/assets/images/vendors/nid/' . $vendor->nid_copy);
                 }
         
                if($request->nid_copy){
                   $nid_copy = $request->file('nid_copy');
                   $nid_img = time() . '.' . $nid_copy->getClientOriginalExtension();
                   $location = public_path('backend/assets/images/vendors/nid/' . $nid_img);
                   Image::make($nid_copy)->save($location);
                   $vendor->nid_copy = $nid_img;
                 }       
                }


            if($request->image){
                // delete image
                if(File::exists('backend/assets/images/vendors/trade-license/' . $vendor->trade_license_copy)){
                    File::delete('backend/assets/images/vendors/trade-license/' . $vendor->trade_license_copy);
                }
        
                if($request->trade_license_copy){
                    $trade_license_copy = $request->file('trade_license_copy');
                    $trade_license_img = time() . '.' . $trade_license_copy->getClientOriginalExtension();
                    $location = public_path('backend/assets/images/vendors/trade-license/' . $trade_license_img);
                    Image::make($trade_license_copy)->save($location);
                    $vendor->trade_license_copy = $trade_license_img;
                    }
                }

        $vendor->save();
        $notification = array(
            'message'    => 'info', 
            'alert-type' => 'The Vendor Information Updated'
        );
        return redirect()->route('vendor.manage');

        }
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
        $vendor = User::find($id);
        if(!is_null( $vendor)){
            $vendor->delete();
            $notification = array(
                'message'    => 'error', 
                'alert-type' => 'The Vendor is Now On Soft Delete Mode'
            );
            return redirect()->route('vendor.manage')->with($notification);
        }
        else{
           
        }
    }
}
