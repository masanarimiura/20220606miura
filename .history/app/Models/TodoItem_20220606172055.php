<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable = [
        'content', '',
    ];

    protected $hidden = [
        'id','created_at','updated_at'
    ];
    use HasFactory;
}
