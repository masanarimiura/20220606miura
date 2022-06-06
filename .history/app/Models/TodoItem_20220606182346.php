<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    protected $fillable = ['content','created_at'];

    protected $hidden = [
        'id','updated_at'
    ];

    public function createdAt()
    {
        $date = $this->created_at;
        return $date;
    }
    public function content()
    {
        $memo = $this->content;
        return $memo;
    }
}
