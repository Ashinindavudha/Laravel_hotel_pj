<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBooking;
use App\Room;


class Onlinereservation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = OnlineBooking::where('status', 'pending')->get();
        
        return view('admin.reservation.onlinereservation', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = OnlineBooking::find($id);
        return view('admin.reservation.detail', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approved($id)
    {
        $reservation = OnlineBooking::find($id);
        $rooms = Room::where('status', 1)->get();

        return view('admin.reservation.online.confirm', compact('reservation', 'rooms'));
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'room_id' => 'required'
        ]);

        $reservation_id = $request->id;
        $room_id = $request->room_id;
        $reservation = OnlineBooking::find($reservation_id);
        $reservation->status = 'confirm';
        $reservation->save();

        $room = Room::find($room_id);
        $room->status = 0;
        $room->save();

        return redirect('/admin');
    }

    public function cancel(Request $request)
    {
        $reservation_id = $request->id;
        $reservation = OnlineBooking::find($reservation_id);
        $reservation->status = 'cancel';
        $reservation->save();

        return redirect()->back();
    }
}
