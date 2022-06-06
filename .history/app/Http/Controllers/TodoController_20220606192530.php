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
        $this->validate($request, TodoItem::$rules);
        $form = $request->all();
        TodoItem::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, TodoItem::$rules);
        $form = $request->all();
        unset($form['_token']);
        TodoItem::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

}
