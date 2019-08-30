<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Tag extends Model
{
    protected $fillable = [
        'avatar','facebook' ,'user_id','twitter' ,'github' ,'about'  

        
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
