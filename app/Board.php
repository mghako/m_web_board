<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title', 'user_id','category_id','email', 'short_description','additional_information', 'demo_url', 'source_code_url', 'social_network_url'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
