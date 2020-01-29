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
