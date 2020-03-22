<?php

namespace App\Http\Controllers;

use App\appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use App\Http\Requests\CreateAppointment;
use Illuminate\Support\Facades\Mail;
use Validator;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
      $appointment=appointment::orderby('created_at','dasc')->paginate(10);
      return view('admin.appointment',compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function test(Request $request)
    {
      $date = Carbon::parse($request->date);
    //  $day=$date->format('l');
        $hour=$date->hour;
        $f=Carbon::FRIDAY;
        $d=$date->dayOfWeek;

         if ( $d != $f){
           dd($date);
         }

          }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
              'name' => 'required|string|min:3|max:190|alpha_spaces',
              'email' => 'required|email|string|min:4|max:190',
              'date' => 'required|date|validate_date',
              'phone' => 'required|numeric|digits_between:9,20',
              'clinic' => 'required|string|max:190|alpha_spaces',
            ]);

            if ($validator->fails()) {

              return response()->json(['error'=>$validator->errors()->all()]);

            }
    //  $appointment=appointment::create($request->all());
      if($appointment=appointment::create($request->all())){
      Mail::to('admin@juma.com')->send(new AppointmentMail($appointment));

       return response()->json(['success'=>'The Appointment has been sent successfuly.']);
     }else{
       return response()->json(['error'=> ['save' => 'Whoops looks like something went wrong']]);
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $appointment=appointment::find($request->id);
         if (! $appointment) {
           return back()->with('failed', 'Appointment Message Not deleted.');
         }else {
           $appointment->delete();
           return back()->with('success', 'You have just delete one Appointment Message');
         }
     }
}
