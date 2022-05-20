<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$allTodo = Todo::all();
		
		$todo = Todo::where('status', 'to do')->get();
		$inProgress = Todo::where('status', 'in Progress')->get();
		$done = Todo::where('status', 'done')->get();

		return response()->json(['all' => $allTodo, 'todo' => $todo, 'inProgress' => $inProgress, 'done' => $done]);
	}

	public function importants()
	{
		$importantTodos = Todo::where('is_important', true)->get();

		return response()->json(['importantTodos' => $importantTodos]);
	}

	public function todo($id)
	{
		$todo = Todo::where('id', $id)->first();

		return response()->json(['todo' => $todo]);
	}

	public function add(StoreTodoRequest $request)
	{
		$attributes = $request->validated();

		Todo::create(['title' => $attributes['title'], 'body' => $attributes['body'], 'status' => 'to do' ]);

		return response(200);
	}
}
