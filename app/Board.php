<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title', 'email', 'short_description','additional_information', 'demo_url', 'source_code_url', 'social_network_url'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->hasOne('App\Category');
    }
}
