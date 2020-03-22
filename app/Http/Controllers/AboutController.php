<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateAbout;
use App\Http\Requests\UpdateAbout;
use App\about;
use App\galleryAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=about::first();
        return view('admin.about_index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAbout $request)
    {
      if(about::create($request->all())){
         return redirect()->route('about')->with('success', 'You have just add about info');
      }else {
         return back()->with('failed', 'about info Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $about=about::first();
      $galleryabout=galleryAbout::get();
      return view('about',compact('about','galleryabout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(about $about)
    {
        return view('admin.about_edit',compact('about'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbout $request, about $about)
    {
      if($about->update($request->all())){
         return redirect()->route('about')->with('success', 'You have just add about info');
      }else {
         return back()->with('failed', 'about info Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $about=about::find($request->id);
        if (! $about) {
          return back()->with('failed', 'about  Not deleted.');
        }else {
          $about->delete();
          return back()->with('success', 'You have just delete one about');
        }
    }
}
