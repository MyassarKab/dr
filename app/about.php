<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{

  protected $fillable = [
      'title_en', 'title_ar','details_en','details_ar','mission_en','mission_ar','vision_en','vision_ar','image',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/about' ;
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
