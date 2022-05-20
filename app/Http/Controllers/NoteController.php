<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
	public function index()
	{
		$allNotes = Note::all();

		return response()->json(['allNotes' => $allNotes]);
	}

	public function note($id)
	{
		$note = Note::where('id', $id)->first();

		return response()->json(['note' => $note]);
	}
}
