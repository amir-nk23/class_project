<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use Database\Seeders\Post\Postseeder;
use Database\Seeders\User\userSeeder;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            userSeeder::class,
            AdminSeeder::class,
            Postseeder::class,
            Categoryseeder::class
        ]);

        Comment::factory(10)->create();
    }
}
