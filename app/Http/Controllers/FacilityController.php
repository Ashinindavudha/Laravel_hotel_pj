<?php

namespace App\Http\Controllers;

use App\Facility;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {   $facilities = Facility::all();
        return view('admin.facility.facility',compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $facilities=Facility::all();
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "facility_name"=> 'required|min:5',                      
        ]);
        // dd($request);
        //file upload if the file exist
        
        
        //Store Data
        $facility=new Facility;
        $facility->facility_name =request('facility_name');              
        $facility->save();
        return redirect()->route('facility.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facility=Facility::find($id);

        return view('admin.facility',compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $facility= Facility::find($id);
        
        return view('admin.facility.edit',compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            "facility_name"=> 'required|min:5',
            
        ]);
         $facility=Facility::find($id);
         $facility->facility_name =request('facility_name');         
         $facility->save();
        return redirect()->route('facility.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $facility=Facility::find($id);         
         $facility->delete();
        return redirect()->route('facility.index');
    }
}
