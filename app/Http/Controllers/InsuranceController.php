<?php

namespace App\Http\Controllers;

use App\insurance;
use File;
use App\Http\Requests\CreateInsurance;
use App\Http\Requests\UpdateInsurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurance=insurance::all();
        return View('admin.insurance_index',compact('insurance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        return View('admin.insurance_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Createinsurance $request)
    {
      if(insurance::create($request->all())){
         return redirect()->route('insurance')->with('success', 'You have just add one insurance');
      }else {
         return back()->with('failed', 'insurance Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $insurance=insurance::all();

       return view('insurance',compact('insurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(insurance $insurance)
    {

      return view('admin.insurance_edit',compact('insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsurance $request, insurance $insurance)
    {
      if($insurance->update($request->all())){
         return redirect()->route('insurance')->with('success', 'You have just update one insurance');
      }else {
         return back()->with('failed', 'insurance Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
     public function destroy(insurance $insurance)
     {

         if (! $insurance) {
           return back()->with('failed', 'insurance  Not deleted.');
         }else {
           $todelete=$insurance->image;
           $insurance->delete();
           File::delete($todelete);
           return back()->with('success', 'You have just delete one insurance');
         }
     }
}
