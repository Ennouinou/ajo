<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date',
    ];
    public function attatchements(){
        return $this->hasMany(EventAttachment::class);
    }
}
