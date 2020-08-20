<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    public function users()
    {
        return $this->belongsToMany(User::class)->oldest();
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
