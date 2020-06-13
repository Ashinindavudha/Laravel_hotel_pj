<?php

namespace App\Http\Controllers;

use App\OnlineBooking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OnlineBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = OnlineBooking::all();
        return view('home.index', compact('booking'));
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
        //file upload if file exist
            if($request->hasfile('nrc')){
                $photo=$request->file('nrc');
                $name=time().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path().'/storage/image/',$name);
                $photo='/storage/image/'.$name;

            }else{
                $photo='';
            }
        $booking=new OnlineBooking;
        $booking->name =request('name');
        $booking->email =request('email');
        $booking->phone =request('phone');
        $booking->nrc=$photo;
        $booking->check_in=Carbon::createFromFormat('Y-m-d', request('check_in'));
        $booking->check_out=Carbon::createFromFormat('Y-m-d', request('check_out'));
        $booking->price =request('price'); 

         $check_in=$request->check_in;
            $check_out=$request->check_out;
            //dd($check_in);
             $to = Carbon::createFromFormat('Y-m-d', $check_in);
             $from = Carbon::createFromFormat('Y-m-d', $check_out);
             $diff_in_days = $to->diffInDays($from);
             $booking->check_in = $check_in;
             $booking->check_out = $check_out;

             //$price = $diff_in_days * 20;
             // $reservation->total = $diff_in_days;
             //$reservation = request('total');



            

        //dd($booking);            
        $booking->save();
        return view('home.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnlineBooking  $onlineBooking
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineBooking $onlineBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlineBooking  $onlineBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineBooking $onlineBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlineBooking  $onlineBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineBooking $onlineBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlineBooking  $onlineBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineBooking $onlineBooking)
    {
        //
    }
    
}
