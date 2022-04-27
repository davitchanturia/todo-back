<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Note::factory(10)->create();
		Todo::factory(5)->create();
		Todo::factory(5)->create(['status' => 'done']);
	}
}
