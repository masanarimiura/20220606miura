<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    // protected $fillable = ['content','created_at'];

    // protected $hidden = ['id','updated_at'];

    public static $rules = array(
        'content' => 'required|max:20',
    );

}
