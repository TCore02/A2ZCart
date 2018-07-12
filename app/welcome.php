<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class welcome extends Model
{
  protected $fillable = [
       'category',
   ];
  public function setCategoryAttribute($value)
  {
      return $this->attributes['category'] = ucfirst($value);
  }
}
