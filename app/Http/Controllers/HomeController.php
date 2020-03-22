<?php

namespace App\Http\Controllers;
use App\doctor;
use App\gallery;
use App\clinic;
use App\testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=doctor::all();
        $doctorBachir=doctor::first();
        $gallery=gallery::latest()->take(9)->get();
        $clinic=clinic::all();
        $testimonial=testimonial::all();
        return view('home',compact("doctor","gallery","clinic","testimonial",'doctorBachir'));
    }




}
