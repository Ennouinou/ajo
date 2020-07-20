<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventAttachment extends Model
{
    protected $fillable = [
        'type','value','event_id',
    ];
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
