<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{


  protected $fillable = [
      'name_en', 'name_ar', 'slug_en','slug_ar','sp_name_en','sp_name_ar','description_en','description_ar','detalis_en','detalis_ar','specialist_en','specialist_ar','image','clinic_id',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/doctors' ;
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
    public function certificate(){
      return $this->hasMany('App\certificate');
    }

    public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
