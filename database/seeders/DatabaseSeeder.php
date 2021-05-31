<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create(["name" => "client"]);
        Role::create(["name" => "Freelance"]);

        \App\Models\User::factory(2)->create();
        // \App\Models\Job::factory(4)->create();
    }
}
