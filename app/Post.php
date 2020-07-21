<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description',
    ];
    public function attachments(){
        return $this->hasMany(PostAttachment::class);
    }
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
