<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
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
        \App\Models\Project::factory(10)->has(Task::factory()->count(5))->create();
    }
}
