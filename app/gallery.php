<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
  protected $fillable = [
       'image','clinic_id',
  ];


  public function  setImageAttribute($photo){

    if($photo){

                $destinationPath = 'upload/Portfolio' ;
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


}
