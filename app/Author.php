<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = [
      'name_en', 'name_ar',
  ];

      public function TextTrans($text)
    {
        $locale=\App::getLocale();
        $column=$text.'_'.$locale;

        return $this->{$column};
    }
}
