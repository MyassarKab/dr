<?php

namespace App\Http\Controllers;

use App\gallery;
use App\clinic;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGallery;
use App\Http\Requests\UpdateGallery;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=gallery::with('clinic')->get();
        return view('admin.gallery_index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clinics=clinic::all();

      return view('admin.gallery_add',compact('clinics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGallery $request)
    {

      foreach ($request->image as $photo) {
        gallery::create([
               'clinic_id' => $request->clinic_id,
               'image' => $photo,
           ]);
       }

         return redirect()->route('gallery')->with('success', 'You have just add one Image');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $clinics=clinic::all();
      $gallery=gallery::orderBy('created_at')->paginate(3);


      if ($request->ajax()) {
         $data=view('portfolio_Ajax',compact('gallery'))->render();
         return $data;
       }
      return view('portfolio',compact('clinics','gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
      $clinics=clinic::all();
      return view('admin.gallery_edit',compact('gallery','clinics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGallery $request, gallery $gallery)
    {

      $todelete=$gallery->image;
      if($gallery->update($request->all())){
        if($request->hasFile('image')){
          File::delete($todelete);
        }

         return redirect()->route('gallery')->with('success', 'You have just update one Image');
      }else {
         return back()->with('failed', 'Image Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
     public function destroy(gallery $gallery)
     {

         if (! $gallery) {
           return back()->with('failed', 'Image  Not deleted.');
         }else {

        $todelete=$gallery->image;
        $gallery->delete();
        File::delete($todelete);

           return back()->with('success', 'You have just delete one Image');
         }
     }
}
