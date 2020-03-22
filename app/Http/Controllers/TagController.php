<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTag;
use App\Http\Requests\UpdateTag;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::all();
        return view('admin.Tag_index',compact('tags'));
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
    public function store(CreateTag $request)
    {
      if(Tag::create($request->all())){
         return redirect()->route('tag')->with('success', 'You have just add one tag');
      }else {
         return back()->with('failed', 'one tag Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag_edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTag $request, Tag $tag)
    {
      if($tag->update($request->all())){
         return redirect()->route('tag')->with('success', 'You have just update Tag');
      }else {
         return back()->with('failed', 'Tag Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request)
    {
      $Tag=Tag::find($request->id);
        if (! $Tag) {
          return back()->with('failed', 'Tag  Not deleted.');
        }else {
          $Tag->delete();
          return back()->with('success', 'You have just delete one Tag');
        }
    }
}
