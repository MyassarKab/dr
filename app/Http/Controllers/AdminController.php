<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function edit(){
      $admin=User::first();
      return view('admin.admin_edit',compact('admin'));
    }
    public function update(Request $request,User $admin)
    {

      $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6',
      ]);



        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request->password);
        $admin->save();
          return back()->with('success', 'You have just updarte Admin Informations.');

    }
}
