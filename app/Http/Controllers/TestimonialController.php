<?php

namespace App\Http\Controllers;

use App\testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTestimonial;
use App\Http\Requests\UpdateTestimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $testimonial=testimonial::all();
      return View('admin.testimonial_index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestimonial $request)
    {
      if(testimonial::create($request->all())){
         return redirect()->route('testimonial')->with('success', 'You have just add one testimonial');
      }else {
         return back()->with('failed', 'testimonial Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(testimonial $testimonial)
    {
        return view('admin.testimonial_edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonial $request, testimonial $testimonial)
    {
      if($testimonial->update($request->all())){
         return redirect()->route('testimonial')->with('success', 'You have just update one testimonial');
      }else {
         return back()->with('failed', 'testimonial Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $testimonial=testimonial::find($request->id);
         if (! $testimonial) {
           return back()->with('failed', 'testimonial  Not deleted.');
         }else {
           $testimonial->delete();
           return back()->with('success', 'You have just delete one testimonial');
         }
     }
}
