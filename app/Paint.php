<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    protected $fillable = [
        'url',
        'title',
        'published_at'
    ];
    //
}
