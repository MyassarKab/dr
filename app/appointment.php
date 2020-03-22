<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class appointment extends Model
{

      protected $fillable = [
          'name', 'email', 'phone','clinic','date',
      ];

      public function getDateAttribute($value)
    {
      $dt = Carbon::parse($value);
      $date=$dt->toDayDateTimeString();
        return $date;
    }
}
