<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'titel_en', 'titel_ar','slug_en','slug_ar','description_en','description_ar','details_en','details_ar','category_id','image','love',
  ];


  public function  setImageAttribute($photo){

    if($photo){
                $destinationPath = 'upload/Posts' ;
                $filename=str_random(3).'-'.$photo->getClientOriginalName();
                $photo->move($destinationPath,$filename);
                $finel=$destinationPath.'/'.$filename;
                $this->attributes['image']=$finel;
              }

  }



    public function category()
    {
      return  $this->belongsTo('App\Category');
    }
    public function Tags(){
     return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
   }

    public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
