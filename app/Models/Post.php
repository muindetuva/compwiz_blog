<?php

namespace App\Models;

use App\Traits\FilterByUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, FilterByUser;

    protected $fillable = ['title', 'caption', 'image', 'content'];


    function user()
    {
        return $this->belongsTo(User::class,)->select(['id', 'name']);
    }
}
