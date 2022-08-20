<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;

use function Ramsey\Uuid\v1;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function division()
    {
        $divisions = Division::orderBy('priority_no', 'asc')->get();
        return view('backend.pages.division.manage', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $division = new Division();
       $division->name           = $request->name;
       $division->priority_no    = $request->priority_no;
       $division->status         = $request->status;
          
       $division->save();
       $notification = array(
        'message'    => 'success', 
        'alert-type' => 'A New Division Created Successfully'
    );
       return redirect()->route('division.manage')->with($notification);
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
        $division = Division::find($id);
        if(!is_null($division)){

            return view('backend.pages.division.edit', compact('division'));
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
        $division = Division::find($id);
       if(!is_null($division)){
        $division->name           = $request->name;
        $division->priority_no    = $request->priority_no;
        $division->status         = $request->status;
        
        $division->save();
        $notification = array(
            'message'    => 'info', 
            'alert-type' => 'The Division Information Updated'
        );
       return redirect()->route('division.manage')->with($notification);
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
      
        $division = Division::find($id);
        if(!is_null( $division)){
            $division->delete();
            $notification = array(
                'message'    => 'error', 
                'alert-type' => 'The Division is Now On Soft Delete Mode'
            );
            return redirect()->route('division.manage')->with($notification);
        }
        else{
            
        }
    }
}
