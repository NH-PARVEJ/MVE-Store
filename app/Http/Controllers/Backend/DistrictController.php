<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function district()
    {
        $districts =District::orderBy('name', 'asc')->get();
        return view('backend.pages.district.manage', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::orderBy('priority_no', 'asc')->get();
        return view('backend.pages.district.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district = new District();
        $district->name          = $request->name;
        $district->division_id   = $request->division_id;
        $district->status        = $request->status;

        $district->save();
        $notification = array(
            'message'    => 'info', 
            'alert-type' => 'A New District Created Successfully'
        );
       return redirect()->route('district.manage')->with($notification);
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
        $district = District::find($id);
        if(!is_null($district)){
            $divisions = Division::orderBy('name', 'asc')->get();
            return view('backend.pages.district.edit', compact('district','divisions'));
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
        $district = District::find($id);
        if(!is_null($district)){

        $district->name          = $request->name;
        $district->division_id   = $request->division_id;
        $district->status        = $request->status;

        $district->save();
        $notification = array(
            'message'    => 'info', 
            'alert-type' => 'The District Information Updated'
        );
        return redirect()->route('district.manage')->with($notification);

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
        $district = District::find($id);
        if(!is_null($district)){

        $district->delete();
        $notification = array(
            'message'    => 'error', 
            'alert-type' => 'The District is Now On Soft Delete Mode'
        );
        return redirect()->route('district.manage')->with($notification);
        }
        else{

        }

    }
}
