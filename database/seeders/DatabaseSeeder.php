<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // UsersSeeder::class
            // ProductSeeder::class
            // UsersSeeder::class
            ProductCommentSeeder::class
        ]);
    }
}
