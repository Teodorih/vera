<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    proteced $fillable = [
        'title',
        'url',
        'published_at'
    ]
}
