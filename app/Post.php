<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;


class Post extends Model
{
    protected $fillable = ['title', 'image', 'content'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }
}
