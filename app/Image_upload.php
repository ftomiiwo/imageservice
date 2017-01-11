<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_upload extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
