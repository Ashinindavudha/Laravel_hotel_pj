<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomTypes;
use App\Post;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        
    }

    public function getShowFacility()
    {
        $roomCounts = [];
        $rooms=Room::all();
        $roomTypes = RoomTypes::withCount('rooms')->get();
        foreach($roomTypes as $roomType){
            $roomCounts[] = [
                'id' => $roomType->id,
                'count' => $roomType->rooms_count
            ];
        }

        return view('home.roomlist',compact('rooms', 'roomCounts'));
    }

    public function order() {
        return view('home.order');
    }

    public function blog()
    {
        $posts=Post::all();
        $categories=Category::all();
        return view('home.blog',compact('posts','categories'));
    }
    public function home()
    {
        $posts=Post::all();
        $categories=Category::all();
        return view('home.index',compact('posts','categories'));
    }


}
