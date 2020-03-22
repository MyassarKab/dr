<?php

namespace App\Http\Controllers;

use App\certificate;
use App\doctor;
use App\Http\Requests\CreateCertificate;
use App\Http\Requests\UpdateCertificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificate=certificate::with('doctor')->get();
        return View('admin.certificates_index',compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $doctors=doctor::all();

        return View('admin.certificate_add',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCertificate $request)
    {
      if(certificate::create($request->all())){
         return redirect()->route('certificate')->with('success', 'You have just add one certificate');
      }else {
         return back()->with('failed', 'certificate Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(certificate $certificate)
    {
      $doctors=doctor::all();
      return view('admin.certificate_edit',compact('certificate','doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificate $request, certificate $certificate)
    {
      if($certificate->update($request->all())){
         return redirect()->route('certificate')->with('success', 'You have just update one certificate');
      }else {
         return back()->with('failed', 'certificate Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $certificate=certificate::find($request->id);
         if (! $certificate) {
           return back()->with('failed', 'certificate  Not deleted.');
         }else {
           $certificate->delete();
           return back()->with('success', 'You have just delete one certificate');
         }
     }
}
