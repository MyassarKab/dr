<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{

  protected $fillable = [
      'name_en', 'name_ar', 'slug_en','slug_ar','description_en','description_ar','detalis_en','detalis_ar','image',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/clinic' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }

  public function services()
  {
    return $this->hasMany('App\service');
  }

  public function TextTrans($text)
{
    $locale=\App::getLocale();
    $column=$text.'_'.$locale;

    return $this->{$column};
}
}
