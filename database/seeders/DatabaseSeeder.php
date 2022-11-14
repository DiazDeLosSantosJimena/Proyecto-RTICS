<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's databa Nse.
     *
     * @return void
     */         
    public function run()
    {
         \App\Models\Directions::factory(5)->create();
         \App\Models\Typeofusers::factory(4)->create();
         \App\Models\Users::factory(10)->create();
         \App\Models\Reports::factory(10)->create();
         \App\Models\Classrooms::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
