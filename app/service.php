<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  protected $fillable = [
      'name_en', 'name_ar', 'slug_en','slug_ar','detalis_en','detalis_ar','description_en','description_ar','clinic_id','image',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/service' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }



    public function clinic()
    {
      return  $this->belongsTo('App\clinic');
    }

    public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
