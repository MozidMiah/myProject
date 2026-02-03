<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        //method 1
        $this->call([
            StudentDatabaseSeeder::class,
            // CategoryDatabaseSeeder::class
        ]);

        //method 2
        // $this->call(StudentDatabaseSeeder::class);
        // $this->call(CategoryDatabaseSeeder::class);

    
    }
}
