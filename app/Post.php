<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','content','image', 'user_id'];
    // protected $casts = [
    //     'tags' => 'array',
    // ];

    public function user(){
        return $this->belongsTo(User::class);
        // return $this->hasOne('App\User');

    }
        
    // public function comments()
    // {
    //   return $this->hasMany('App\Comment');
    // }

}
