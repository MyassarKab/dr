<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateClinc;
use App\Http\Requests\UpdateClinc;

use App\clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clincs=clinic::all();

        return view('admin.clinic_index',compact('clincs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.clinic_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClinc $request)
    {
         if(clinic::create($request->all())){
            return redirect()->route('clinic')->with('success', 'You have just add one clinic');
         }else {
            return back()->with('failed', 'clinic Not saved.');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
         $clinic=clinic::where('slug_en','like',$slug)->orWhere('slug_ar','like',$slug)->first();
         if (! $clinic) {
             abort(404);
         }
         return view('clinic',compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function edit(clinic $clinic)
    {
        return view('admin.clinic_edit',compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClinc $request, clinic $clinic)
    {

        if($clinic->update($request->all()))
        {
           return redirect()->route('clinic')->with('success', 'You have just Update one clinic');
        }else {
           return back()->with('failed', 'clinic Not Updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $clinic=clinic::find($request->id);
        if (! $clinic) {
          return back()->with('failed', 'clinic  Not deleted.');
        }else {
          $clinic->delete();
          return back()->with('success', 'You have just delete one clinic');
        }
    }
}
