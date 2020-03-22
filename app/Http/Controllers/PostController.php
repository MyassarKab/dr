<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use App\Http\Requests\UpdatePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Post=Post::all();
      return view('admin.Post_index',compact('Post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $Category=Category::all();
        return view("admin.Post_add",compact('tags','Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePost $request)
    {
      if($post=Post::create($request->all())){
        foreach ($request->tags_id as $key) {
         $post->Tags()->attach($key->id);
        }

         return redirect()->route('Post')->with('success', 'You have just add one Post');
      }else {
         return back()->with('failed', 'one Post Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
      $Post=Post::orderBy('created_at','asc')->get();
      return view('blog',compact('Post'));
    }

    public function showPost($slug){
      $post=Post::where('slug_en','like',$slug)->orWhere('slug_ar','like',$slug)->first();
      return view('post',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.Post_edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost $request, Post $post)
    {

      foreach ($request->tags_id as $key) {
         $tag_arr[]=$key->id;
      }
      if($post->update($request->all())){
        $post->roles()->sync($tag_arr);
         return redirect()->route('Post')->with('success', 'You have just update Post');
      }else {
         return back()->with('failed', 'Post Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request)
    {
      $Post=Post::find($request->id);
        if (! $Post) {
          return back()->with('failed', 'Post  Not deleted.');
        }else {
          $Post->delete();
          return back()->with('success', 'You have just delete one Post');
        }
    }
}
