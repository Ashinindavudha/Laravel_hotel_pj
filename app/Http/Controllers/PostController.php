<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.post.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
        return view('admin.post.create',compact('categories'));
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
            "title"=>'required|min:5',
            "body"=>'required|min:10',
            "image"=>'required|mimes:jpeg,jpg,png',
            "category"=>'required'

        ]);

        //dd($request);
        //file upload if file exist
            if($request->hasfile('image')){
                $photo=$request->file('image');
                $name=time().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path().'/storage/image/',$name);
                $photo='/storage/image/'.$name;

            }else{
                $photo='';
            }

        //dd($photo);
        // store data
            $post=new Post;
            $post->title=request('title');
            $post->body=request('body');
            $post->image=$photo;
            $post->category_id=request('category');
            $post->save();

        //redirect

            return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post=Post::find($id); //retrieve id
        return view('home.detail',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
       $categories=Category::all();
       return view ('admin.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $request->validate([
            "title"=>'required|min:5',
            "body"=>'required|min:10',
            "image"=>'sometimes|mimes:jpeg,jpg,png', 
            "category"=>'required'

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
        //update data

            $post=Post::find($id);
            $post->title=request('title');
            $post->body=request('body');
            $post->image=$photo;
            $post->category_id=request('category');
            $post->save();
        //redirect

            return redirect()->route('post.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}