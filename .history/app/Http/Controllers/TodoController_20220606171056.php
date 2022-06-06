<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItems;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoCont::all();
        return view('index', ['items' => $items]);
    }
}
