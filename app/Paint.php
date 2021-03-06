<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    protected $fillable = [
        'url',
        'title',
        'published_at'
    ];
    //
    public function rules()
    {
        return [
            'title'        => 'required',
            'image'       => 'required|mimes:jpg,png'
        ];
    }

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query){
        $query->where('published_at', '>=', Carbon::now());
    }
	  public function user(){
        $this->belongsTo('App\User');
    }
}
