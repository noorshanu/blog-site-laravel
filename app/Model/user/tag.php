<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function post_blogs()
    {
        return $this->belongsToMany('App\Model\user\post_blog','post_tags');
    }
}
 