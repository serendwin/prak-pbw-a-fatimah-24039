<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User dengan role berbeda (password semuanya: "password")
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'role' => 'staff',
        ]);

        User::factory()->create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'role' => 'viewer',
        ]);

        $authors = Author::factory(10)->create();
        $categories = Category::factory(8)->create();

        Book::factory(50)
            ->create([
                'author_id' => fn () => $authors->random()->id,
            ])
            ->each(function (Book $book) use ($categories) {
                $book->categories()->attach(
                    $categories->random(rand(1, 3))->pluck('id')
                );
            });
    }
}