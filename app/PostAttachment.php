<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAttachment extends Model
{
    protected $fillable = [
        'type','value','post_id',
    ];
    public function event(){
        return $this->belongsTo(Post::class);
    }
}
