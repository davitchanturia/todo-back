<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$todo = Todo::where('status', 'to do')->get();
		$inProgress = Todo::where('status', 'in Progress')->get();
		$done = Todo::where('status', 'done')->get();

		return response()->json(['todo' => $todo, 'inProgress' => $inProgress, 'done' => $done]);
	}

	public function importants()
	{
		$importantTodos = Todo::where('is_important', true)->get();

		return response()->json(['importantTodos' => $importantTodos]);
	}
}
