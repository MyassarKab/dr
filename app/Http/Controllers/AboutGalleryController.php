<?php

namespace App\Http\Controllers;

use App\galleryAbout;
// use App\clinic;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAboutGallery;
use App\Http\Requests\UpdateAboutGallery;
use File;

class AboutGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=galleryAbout::all();
        return view('admin.about_gallery_index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      return view('admin.about_gallery_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAboutGallery $request)
    {

      foreach ($request->image as $photo) {
        galleryAbout::create([
               'image' => $photo,
           ]);
       }

         return redirect()->route('about_gallery')->with('success', 'You have just add one Image');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\galleryAbout  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(galleryAbout $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galleryAbout  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(galleryAbout $gallery)
    {

      return view('admin.about_gallery_edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galleryAbout  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutGallery $request, galleryAbout $gallery)
    {

      $todelete=$gallery->image;
      if($gallery->update($request->all())){
        if($request->hasFile('image')){
          File::delete($todelete);
        }

         return redirect()->route('about_gallery')->with('success', 'You have just update one Image');
      }else {
         return back()->with('failed', 'Image Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galleryAbout  $gallery
     * @return \Illuminate\Http\Response
     */
     public function destroy(galleryAbout $gallery)
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
