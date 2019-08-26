<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title', 'email', 'short_description','additional_information', 'demo_url', 'source_code_url', 'social_network_url'
    ];

    public function owner(){
        return $this->belongsTo('App\User', 'owner_id');
    }
    public function category(){
        return $this->hasOne('App\Category');
    }
}
