<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog";

    protected $fillable = [
        'description','image','description2','image2','status','status2','count'
    ];
}
