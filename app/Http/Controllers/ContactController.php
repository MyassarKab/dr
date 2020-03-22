<?php

namespace App\Http\Controllers;

use App\Contact;
use App\clinic;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContact;
use App\Http\Requests\UpdateContact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contact=Contact::orderby('created_at','dasc')->paginate(10);
      return View('admin.contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Contact_add');
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
              'phone' => 'required|numeric|digits_between:9,20',
              'message' => 'required|string|alpha_spaces',
            ]);

            if ($validator->fails()) {

              return response()->json(['error'=>$validator->errors()->all()]);

            }

      if($contact=Contact::create($request->all())){

      Mail::to('admin@juma.com')->send(new ContactMail($contact));

       return response()->json(['success'=>'The Message has been sent successfuly.']);
     }else{
       return response()->json(['error'=> ['save' => 'Whoops looks like something went wrong']]);
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $clinic=clinic::all();
        return view('contact',compact('clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $Contact)
    {
        return view('admin.Contact_edit',compact('Contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContact $request, Contact $Contact)
    {
      if($Contact->update($request->all())){
         return redirect()->route('Contact')->with('success', 'You have just update one Contact');
      }else {
         return back()->with('failed', 'Contact Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
       $Contact=Contact::find($request->id);
         if (! $Contact) {
           return back()->with('failed', 'Contact Message  Not deleted.');
         }else {
           $Contact->delete();
           return back()->with('success', 'You have just delete one Contact Message');
         }
     }
}
