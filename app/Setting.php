<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'id','blog_name' ,'phon_number','blog_email' ,'address'   

       
    ];
}
