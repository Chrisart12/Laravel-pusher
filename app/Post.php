<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
