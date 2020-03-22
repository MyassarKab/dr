<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galleryAbout extends Model
{
    protected $table='galleries_about';

    protected $fillable = [
         'image',
    ];


    public function  setImageAttribute($photo){

      if($photo){

                  $destinationPath = 'upload/about_gallery' ;
                  $filename=str_random(3).'-'.$photo->getClientOriginalName();
                  $photo->move($destinationPath,$filename);
                  $finel=$destinationPath.'/'.$filename;
                  $this->attributes['image']=$finel;

                }

    }



}
