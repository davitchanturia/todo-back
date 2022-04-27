<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$allTodo = Todo::with('notes')->get();

		return response()->json(['allTodo' => $allTodo]);
	}
}
