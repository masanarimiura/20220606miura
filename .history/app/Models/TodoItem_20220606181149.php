<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable = [
        'content','created_at'
    ];

    protected $hidden = [
        'id','updated_at'
    ];

    public function createdAt()
    {
        $txt = $this->created_at;
        return $txt;
    }
    public function content()
    {
        $txt = $this->created_at;
        return $txt;
    }
}
