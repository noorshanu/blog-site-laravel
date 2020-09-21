<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    public function post_blogs()
    {
        return $this->belongsToMany('App\Model\user\post_blog','catagory_posts');
    }
}
