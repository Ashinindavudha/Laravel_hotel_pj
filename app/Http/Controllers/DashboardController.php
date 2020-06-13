<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBooking;
use App\Reservation;
use App\Room;
use App\RoomTypes;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $myRooms = RoomTypes::withCount('rooms')->get();
        // foreach ($myRooms as $testRoom) {
        //     dd($testRoom->rooms_count);
        // }
        

        $success_reservations = OnlineBooking::where('status', 'confirm')->get();
        $cancel_reservations = OnlineBooking::where('status', 'cancel')->get();
        $offline_reservations = Reservation::all();
        $rooms = Room::all();
        $first_floor_rooms = [];
        $second_floor_rooms = [];
        $third_floor_rooms = [];
        foreach($rooms as $room){
            if ($room->floor_id == 1) {
                $first_floor_rooms[] = $room;
            } elseif($room->floor_id == 2){

                $second_floor_rooms[] = $room;
            } else {
                $third_floor_rooms[] = $room;
            }
        }

        return view('admin.index', compact('success_reservations', 'cancel_reservations','offline_reservations', 'first_floor_rooms', 'second_floor_rooms', 'third_floor_rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function showConfirmed()
    {
        $confirmations = OnlineBooking::where('status', 'confirm')->get();
        return view('admin.confirmation', compact('confirmations'));
    }
    public function showCanceled()
    {
        $cancels = OnlineBooking::where('status', 'cancel')->get();
        return view('admin.cancel', compact('cancels'));
    }

}
