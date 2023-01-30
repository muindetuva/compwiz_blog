<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
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

        // Create 3 users
        $tuva = User::factory()
            ->create([
                'name' => 'Alfred Tuva',
                'email' => 'tuva@mail.com'
            ]);
        $mitch = User::factory()
            ->create([
                'name' => 'Mitchel Ochieng',
                'email' => 'mitch@mail.com'
            ]);
        $timothy = User::factory()
            ->create([
                'name' => 'Timothy Serem',
                'email' => 'serem@mail.com'
            ]);

        // Create some posts
        Post::factory()
            ->create([
                'title' => 'Best IDE ever!',
                'image' => 'ide.jpg',
                'user_id' => $mitch->id
            ]);
        Post::factory()
            ->create([
                'title' => "Tech meetups you shouldn't miss",
                'image' => 'meetup.jpg',
                'user_id' => $timothy->id
            ]);
        Post::factory()
            ->create([
                'title' => 'Useful gadgets for your home office',
                'image' => 'home_setup.jpg',
                'user_id' => $timothy->id
            ]);
        Post::factory()
            ->create([
                'title' => 'Laravel Tips and Tricks',
                'image' => 'laravel_tips_tricks.jpg',
                'user_id' => $mitch->id
            ]);
        Post::factory()
            ->create([
                'title' => 'Is Php Really dead?',
                'image' => 'is_php_dead.jpg',
                'user_id' => $tuva->id
            ]);
    }
}
