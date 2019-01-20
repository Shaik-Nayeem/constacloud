<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog1 extends Model
{
    protected $table="blog";

    protected $fillable = [
        'description','image',
    ];
}
