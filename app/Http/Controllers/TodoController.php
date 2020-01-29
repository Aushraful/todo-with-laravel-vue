<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
        ]);
        $todo = Todo::create($data);
        return response($todo, 201);
    }
    public function show(Todo $todo)
    {

    }
    public function update(Request $request, Todo $todo)
    {

    }
    public function updateAll(Request $request){

    }
    public function destroy(Todo $todo)
    {

    }
    public function destroyCompleted(Request $request)
    {

    }
}
