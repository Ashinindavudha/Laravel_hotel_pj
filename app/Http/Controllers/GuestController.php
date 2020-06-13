<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Reservation; 
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests=Guest::all();
        return view('admin.guest.guest',compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validation
        $request->validate([
            "guest_name"=>'required|min:5',
            "email"=>'required',
            "phone_no"=>'required',
            "image"=>'required|mimes:jpg,png,jpeg'
            

        ]);
        //file upload if file exist
            if($request->hasfile('image')){
                $photo=$request->file('image');
                $name=time().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path().'/storage/image/',$name);
                $photo='/storage/image/'.$name;

            }else{
                $photo='';
            }
            //store data
            $guest=new Guest;
            $guest->guest_name=request('guest_name');
            $guest->email=request('email');
            $guest->phone_no=request('phone_no');
            $guest->image=$photo;
            
            $guest->save();

        //redirect

            return redirect()->route('guest.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $guests = Guest::find($id);
        return view('admin.guest.edit', compact('guests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            "guest_name"=>'required|min:5',
            "email"=>'required',
            "phone_no"=>'required',
            "image"=>'required|mimes:jpg,png,jpeg'
            

        ]);
        //file upload
         if($request->hasfile('image')){
                $photo=$request->file('image');
                $name=time().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path().'/storage/image/',$name);
                $photo='/storage/image/'.$name;

            }else{
                $photo=request('oldimg');
            }
         
            $guest=Guest::find($id);
            $guest->guest_name=request('guest_name');
            $guest->email=request('email');
            $guest->phone_no=request('phone_no');
            $guest->image=$photo;
            $guest->save();


            return redirect()->route('guest.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guests = Guest::find($id);
        $guests->delete();
        return redirect()->route('guest.index');
    }
}
