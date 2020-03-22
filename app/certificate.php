<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
  protected $fillable = [
      'name_en', 'name_ar','detalis_en','detalis_ar','doctor_id','image',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/certificate' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }



    public function doctor()
    {
      return  $this->belongsTo('App\doctor');
    }

    public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
