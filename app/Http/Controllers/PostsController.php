<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Category::All()->where('id','1');
        // if($request->hasFile('featuredimage')){
        //     //Get filename with ext
        //     $filenameWithExt = $request->file('featuredimage')->getClientOriginalName();
        //     //get just filename
        //     $filename = pathInfo($filenameWithExt, PATHINFO_FILENAME);
        //     //get just ext
        //     $extension = $request->file('featuredimage')->getClientOriginalExtension();
        //     //filename to store
        //     $fileNameToStore =$filename.'_'.time().'.'.$extension;
        //     //save image
        //     $path = $request->file('featuredimage')->storeAs('public/featuredimage', $fileNameToStore);
        // }
        // else{
        //     $fileNameToStore = 'noimage.jpg';
        // }

        // //post
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body =  $request->input('body');
        // $post->user_id = 1;
        // $post->featuredimage = $fileNameToStore;
        // $post->save();

        // //category
        // $category = Category::find();
        // $category->post_id = $post->id;
         

        // return redirect('/')->with('success','Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('pages.single')->with('post',$post);
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
}
