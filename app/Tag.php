<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = [
      'name_en', 'name_ar',
  ];

   public function Post(){
     return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
   }

      public function TextTrans($text)
    {
        $locale=\App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
