<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'content',
        'language',
        'teamwork',
        'url_demo',
        'user_id',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
