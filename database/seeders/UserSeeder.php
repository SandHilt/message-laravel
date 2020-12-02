<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->times(5)
            ->hasPosts(3)
            ->create();

        User::create([
            'name' => 'local',
            'email' => "localhost@localhost",
            'password' => bcrypt('pass'),
        ]);
    }
}
