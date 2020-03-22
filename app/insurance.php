<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insurance extends Model
{
  protected $fillable = [
      'name', 'image',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/insurances' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }

}
