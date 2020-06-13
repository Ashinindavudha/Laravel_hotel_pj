<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Guest;
use App\Room;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=Reservation::all();
        return view('admin.reservation.reservation',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms=Room::all();
        $guests=Guest::all();
        return view('admin.reservation.create',compact('guests','rooms'));
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
            "room_id"=>'required',
            "guest_name"=>'required',
            'check_in' => 'required',
            'check_out' => 'required'

             ]);

            $reservation=new Reservation;
            $reservation->room_id=request('room_id');
            $reservation->guest_id=request('guest_name');
            $reservation->check_in=Carbon::createFromFormat('m/d/Y', request('check_in'));
            $reservation->check_out=Carbon::createFromFormat('m/d/Y', request('check_out'));
            $check_in=$request->check_in;
            $check_out=$request->check_out;
             $to = \Carbon\Carbon::createFromFormat('m/d/Y', $check_in);
             $from = \Carbon\Carbon::createFromFormat('m/d/Y', $check_out);
             $diff_in_days = $to->diffInDays($from);
            //$price = $diff_in_days * 20;
             // $reservation->total = $diff_in_days;
             //$reservation = request('total');

             $room = Room::find($request->room_id);
             $room_price = $room->roomtype->price;
             $reservation->total = $room_price * $diff_in_days;
            // dd($reservation);
            $reservation->save();


        //redirect

            return redirect()->route('reservation.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation=Reservation::find($id);
        $guests=Guest::all();
        return view ('admin.reservation.edit',compact('reservation','guests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
