<?php

namespace App\Http\Controllers;

use App\service;
use App\clinic;
use App\Http\Requests\CreateService;
use App\Http\Requests\UpdateService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $service=service::with('clinic')->get();
      return View('admin.service_index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinics=clinic::all();

        return view('admin.service_add',compact('clinics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateService $request)
    {
      if(service::create($request->all())){
         return redirect()->route('service')->with('success', 'You have just add one service');
      }else {
         return back()->with('failed', 'service Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
      $clinics=clinic::all();
      return view('admin.service_edit',compact('service','clinics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateService $request, service $service)
    {
      if($service->update($request->all())){
         return redirect()->route('service')->with('success', 'You have just update one service');
      }else {
         return back()->with('failed', 'service Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $service=service::find($request->id);
         if (! $service) {
           return back()->with('failed', 'service  Not deleted.');
         }else {
           $service->delete();
           return back()->with('success', 'You have just delete one service');
         }
     }
}
