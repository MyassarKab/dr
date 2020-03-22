<?php

namespace App\Http\Controllers;

use App\info;
use App\phone;
use App\social;
use App\Http\Requests\CreateInfo;
use App\Http\Requests\UpdateInfo;
use App\Http\Requests\CreateSocial;
use App\Http\Requests\UpdateSocial;
use Illuminate\Http\Request;
use DB;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $info=info::first();
          $phone=phone::all();
          $social=social::all();
          return view('admin.info_index',compact('info','phone','social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInfo $request)
    {

      DB::transaction(function () use ($request) {
        try
       {

       info::create($request->all());


         for ($i=0; $i <sizeof($request->phone) ; $i++) {
          $phone=new phone;
          $phone->phone=$request->phone[$i];
          $phone->icon=$request->icon[$i];
          $phone->save();
       }
     } catch (\Exception $e) {
       return back()->with('failed', 'location Informations Not saved.');
           }
});

         return redirect()->route('info')->with('success', 'You have just add location Informations');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(info $info)
    {
      $phones=phone::all();
      return view('admin.info_edit',compact('info','phones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfo $request, info $info)
    {
      DB::transaction(function () use ($request,$info) {
        try
       {

       $info->update($request->all());
      for ($i=0; $i <sizeof($request->phone) ; $i++) {
        if (array_key_exists($i, $request->phone_id)) {
          $phone=phone::find($request->phone_id[$i]);
          if ($phone) {
            $phone->phone=$request->phone[$i];
            $phone->icon=$request->icon[$i];
            $phone->save();
          }else {
            $phone=new phone;
            $phone->phone=$request->phone[$i];
            $phone->icon=$request->icon[$i];
            $phone->save();
          }
        } else {

            $phone=new phone;
            $phone->phone=$request->phone[$i];
            $phone->icon=$request->icon[$i];
            $phone->save();

        }


        }
      } catch (\Exception $e) {
        return back()->with('failed', 'location Informations Not saved.');
            }
    });

      return redirect()->route('info')->with('success', 'You have just add location Informations');
    }

// social section====================================


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSocial()
    {
        return view('admin.social_media_add');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\social  $info
     * @return \Illuminate\Http\Response
     */
    public function editSocial(social $social)
    {

      return view('admin.social_media_edit',compact('social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSocial(CreateSocial $request)
    {
      if(social::create($request->all())){
         return redirect()->route('info')->with('success', 'You have just add social media item');
      }else {
         return back()->with('failed', 'social media item info Not saved.');
      }
    }
    /**
     * update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateSocial(UpdateSocial $request,social $social)
    {

      if($social->update($request->all())){
         return redirect()->route('info')->with('success', 'You have just update social media item');
      }else {
         return back()->with('failed', 'social media item info Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $social=social::find($request->id);
        if (! $social) {
          return back()->with('failed', 'social media item  Not deleted.');
        }else {
          $social->delete();
          return back()->with('success', 'You have just delete one social media item');
        }
    }





}
