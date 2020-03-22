<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
  protected $fillable = [
      'name', 'image','link',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/social' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }

}
