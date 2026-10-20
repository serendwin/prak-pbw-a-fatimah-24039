<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        $authors = Author::factory(10)->create();

        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}
