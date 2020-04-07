<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','content','image'];
    // protected $casts = [
    //     'tags' => 'array',
    // ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
