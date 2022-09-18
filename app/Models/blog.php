<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    // append the like count to the blog
    protected $appends = ['likes'];
    // likes property

    public function getLikesAttribute()
    {
        return Like::where('blog_id', $this->id)->count();
    }

}
