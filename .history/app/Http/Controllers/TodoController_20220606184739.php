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

    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }


}
