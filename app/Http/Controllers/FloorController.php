<?php

namespace App\Http\Controllers;

use App\Floor;
use App\Room;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $floors = Floor::all();
        return view('admin.floor.floor',compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $rooms=Room::all();
        return view('admin.floor.create',compact('rooms'));
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
            "floor_name"=> 'required|min:5',
            "floor_no"=>'required|min:3',           
        ]);
        // dd($request);
        //file upload if the file exist
        
        //dd($photo);
        //Store Data
        $floor=new Floor;
        $floor->floor_name =request('floor_name');
        $floor->floor_no =request('floor_no');        
        $floor->save();
        return redirect()->route('floor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $floor=Floor::find($id);

        return view('admin.floor.floor',compact('floor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $floor= Floor::find($id);
        
        return view('admin.floor.edit',compact('floor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "floor_name"=> 'required|min:5',
            "floor_no"=>'required',
        ]);
         $floor=Floor::find($id);
         $floor->floor_name =request('floor_name');
         $floor->floor_no=request('floor_no');
         $floor->save();
        return redirect()->route('floor.index');
        //dd($floor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $floor=Floor::find($id);
        $floor->delete();
  
        return redirect()->route('floor.index');
    }
}
