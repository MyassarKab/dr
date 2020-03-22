<?php

namespace App\Providers;
use App\social;
use App\phone;
use App\info;
use App\clinic;
use App\doctor;
use App\about;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Validator;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

      $social=social::all();
      $phone=phone::all();
      $info=info::first();
      $clinicList=clinic::all();
      $doctorList=doctor::all();
      $about=about::first();
       View::share('social', $social);
       View::share('phone', $phone);
       View::share('info', $info);
       View::share('clinicList', $clinicList);
       View::share('doctorList', $doctorList);
       View::share('aboutinfo', $about);


       Validator::extend('alpha_spaces', function ($attribute, $value) {


     return preg_match('/^[\pL\s0-9_().-]+$/u', $value);

 });
       Validator::extend('validate_date', function ($attribute, $value) {
         $date = Carbon::parse($value);
        // $friday=Carbon::parse('2017-12-08 03:10:46.0');
           // $friday_day=$friday->format('l');
           $day=$date->format('l');
           $hour=$date->hour;

           if ( $date->dayOfWeek != Carbon::FRIDAY) {

             if($hour>=15 && $hour<21){
               return true;
             }
           }

            return  false;

      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
