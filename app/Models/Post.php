<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;
    protected $table = 'posts';

    protected $fillable = [
        'title', 'image', 'sub_headline', 'body', 'status', 'category_id', 'created_at', 'updated_at'
    ];
}
