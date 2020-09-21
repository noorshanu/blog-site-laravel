<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post_blog extends Model
{
  public function tags()
  {
      return $this->belongsToMany('App\Model\user\tag','post_tags');
  }

  public function categories()
  {
      return $this->belongsToMany('App\Model\user\catagory','catagory_posts');
  }
}
