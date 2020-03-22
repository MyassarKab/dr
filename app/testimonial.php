<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{

    protected $fillable = [
        'name_en', 'name_ar', 'job_en','job_ar','detalis_en','detalis_ar','image',
    ];


    public function  setImageAttribute($photo){

      if($photo){
                  $destinationPath = 'upload/testimonial' ;
                  $filename=str_random(3).'-'.$photo->getClientOriginalName();
                  $photo->move($destinationPath,$filename);
                  $finel=$destinationPath.'/'.$filename;
                  $this->attributes['image']=$finel;
                }

    }

    public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
