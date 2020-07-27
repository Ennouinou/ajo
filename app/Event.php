<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description','activity','date',
    ];
    public function attachments(){
        return $this->hasMany(EventAttachment::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
