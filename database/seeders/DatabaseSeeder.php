<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create([
             'name' => 'Vicumg',
             'password' => Hash::make('123123'),
             'email' => 'vicumg@test.com'
         ]);

         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Island::factory(1)->create([
            'user_id' => 1,
            'title' => 'Остров Vicumg-a',
            'point_x' => 1,
            'point_y' => 1
        ]);
    }
}
