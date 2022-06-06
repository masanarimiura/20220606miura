<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoItem::all();
        return view('index', ['items' => $items]);
    }
}
