<?php

namespace App\Http\Controllers;

use App\RoomTypes;
use Illuminate\Http\Request;
use App\Room;
use App\Facility;

class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes = Roomtypes::all();
        return view('admin.roomtype.roomtype',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities=Facility::all();
        $rooms=Room::all();
        return view('admin.roomtype.create',compact('rooms','facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            "room_name"=> 'required',
            "total_room"=>'required',
            "price"=>'required',
            "facility_name"=>'required',
            "description"=>'required',
            "image"=>'required|mimes : jpg,jpeg,png'

        ]);

        $checkboxValue = $request->input('facility_name');
         //dd($checkboxValue);
         $item=implode(',',$checkboxValue);
         //dd($item);

        //file Upload if file exist
        if ($request->hasfile('image')) {
            $photo = $request->file('image');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo = '/storage/image/'.$name;
        }else{
            $photo = '';
        }


            $roomtypes = new Roomtypes;
            $roomtypes->room_name = request('room_name');
            $roomtypes->price = request('price');
            $roomtypes->total_room = request('total_room');
            $roomtypes->facility_name=$item ;  
            $roomtypes->description = request('description');
            
            
            $roomtypes->image = $photo;
            
            $roomtypes->save();
            
            return redirect()->route('roomtype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomtypes=RoomTypes::find($id);
        return view('admin.roomtype',compact('roomtypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomTypes $roomTypes,$id)
    {
        $roomtypes = Roomtypes::find($id);
        return view('admin.roomtype.edit',compact('roomtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomTypes $roomTypes,$id)
    {
        //Validation
        $request->validate([
            "room_name"=> 'required',
            "total_room"=>'required',
            "price"=>'required',
            "facility_name"=>'required',
            "description"=>'required',
        ]);
            $roomtypes = Roomtypes::find($id);
            $roomtypes->room_name = request('room_name');
            $roomtypes->total_room = request('total_room');
            $roomtypes->price = request('price');
            $roomtypes->description = request('description');
            $roomtypes->facility_name=request('facility_name') ;
            //dd($rooms);
            $roomtypes->save();

            return redirect()->route('roomtype.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomTypes  $roomTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomTypes $roomTypes,$id)
    {
       $roomtypes = Roomtypes::find($id);
       $roomtypes->delete();
       return redirect()->route('roomtype.index');
    }

}

















