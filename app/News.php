<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
