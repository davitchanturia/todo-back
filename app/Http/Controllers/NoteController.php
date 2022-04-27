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
}
