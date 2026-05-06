<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'slug', 'status', 'category', 'tags', 'author', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
