<?php

namespace App\Http\Controllers;

use App\doctor;
use App\clinic;
use Illuminate\Http\Request;
use App\Http\Requests\createDoctor;
use App\Http\Requests\UpdateDoctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=doctor::all();

        return view('admin.doctor_index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clincs=clinic::all();
      return view('admin.doctor_add',compact('clincs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createDoctor $request)
    {
      if(doctor::create($request->all())){
         return redirect()->route('doctor')->with('success', 'You have just add one doctor');
      }else {
         return back()->with('failed', 'doctor Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $doctor=doctor::where('slug_en','like',$slug)->orWhere('slug_ar','like',$slug)->first();

       return view('doctor',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        $clincs=clinic::all();
          return view('admin.doctor_edit',compact('doctor','clincs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctor $request, doctor $doctor)
    {

      if($doctor->update($request->all()))
      {
         return redirect()->route('doctor')->with('success', 'You have just Update one doctor');
      }else {
         return back()->with('failed', 'doctor Not Updated.');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $doctor=doctor::find($request->id);
        if (! $doctor) {
          return back()->with('failed', 'doctor  Not deleted.');
        }else {
          $doctor->delete();
          return back()->with('success', 'You have just delete one doctor');
        }
    }
}
