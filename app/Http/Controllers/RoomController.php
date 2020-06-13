<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomTypes;
use Illuminate\Http\Request; 
use App\Floor;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.room',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes=Roomtypes::all();
        $floors=Floor::all();
        return view('admin.room.createroom',compact('roomtypes','floors'));
       
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
            "room_number"=> 'required',
            "roomtype_id"=>'required',
            "floor_id"=>'required',
            "status"=>'required'
        ]);
        $rooms = new Room;

            $rooms->room_number = request('room_number');
            $rooms->roomtype_id = request('roomtype_id');
            $rooms->floor_id = request('floor_id');
            $rooms->status = request('status');
            //dd($rooms);
            $rooms->save();

            return redirect()->route('room.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Room::find($id);
        return view('admin.room.editroom',compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //Validation
        $request->validate([
            "room_number"=> 'required',
            "roomtype_id"=>'required',
            "floor_id"=>'required',
            "status"=>'required'
        ]);
        
            $rooms = Room::find($id);
            $rooms->room_number = request('room_number');
            $rooms->roomtype_id = request('roomtype_id');
            $rooms->floor_id = request('floor_id');
            $rooms->status = request('status');
            //dd($rooms);
            $rooms->save();

            return redirect()->route('room.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $rooms = Room::find($id);
       $rooms->delete();
       return redirect()->route('room.index');
    }
}
