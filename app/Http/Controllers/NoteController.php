<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;
use App\Models\Todo;

class NoteController extends Controller
{
	public function index()
	{
		$allNotes = Note::all();
		$allTodos = Todo::all();

		return response()->json(['allNotes' => $allNotes, 'allTodos' => $allTodos]);
	}

	public function note($id)
	{
		$note = Note::where('id', $id)->first();

		return response()->json(['note' => $note]);
	}

	public function add(StoreNoteRequest $request)
	{
		$attributes = $request->validated();

		Note::create(['title' => $attributes['title'], 'body' => $attributes['body'], 'todo_id' => $attributes['todoId'] ]);

		return response(200);
	}
}
