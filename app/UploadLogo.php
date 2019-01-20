<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadLogo extends Model
{
    protected $table="uploadlogo";

    protected $fillable = [
        'logo',
    ];
}
