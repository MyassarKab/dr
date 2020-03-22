<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{

  protected $fillable = [
      'address_en', 'address_ar','longitude','latitude','email',
  ];

  public function TextTrans($text)
{
    $locale=\App::getLocale();
    $column=$text.'_'.$locale;

    return $this->{$column};
}
}
