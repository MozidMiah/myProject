<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $mozid= [
        //         'name' => 'Ahmed Khan',
        //         'email' => 'ahmed.khan@example.com',
        //         'student_id' => 'STU-2024-001',
        //         'cgpa' => '3.75',
        //         'age' => '21',
        //         'phone' => '+8801712345678',
        //         'status' => true,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];
        $students = [
            [
                'name' => 'Ahmed Khan',
                'email' => 'ahmed.khan@example.com',
                'student_id' => 'STU-2024-001',
                'cgpa' => '3.75',
                'age' => '21',
                'phone' => '+8801712345678',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatima Akter',
                'email' => 'fatima.akter@example.com',
                'student_id' => 'STU-2024-002',
                'cgpa' => '3.92',
                'age' => '22',
                'phone' => '+8801812345679',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahim Islam',
                'email' => 'rahim.islam@example.com',
                'student_id' => 'STU-2024-003',
                'cgpa' => '3.45',
                'age' => '23',
                'phone' => '+8801912345680',
                'status' => false, // Inactive student
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sadia Rahman',
                'email' => 'sadia.rahman@example.com',
                'student_id' => 'STU-2024-004',
                'cgpa' => '3.68',
                'age' => '20',
                'phone' => '+8801612345681',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tariq Hossain',
                'email' => 'tariq.hossain@example.com',
                'student_id' => 'STU-2024-005',
                'cgpa' => '2.95',
                'age' => '24',
                'phone' => null, // No phone number
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // Insert data into students table
        // DB::table('students')->insert($students);

        //Eloquent ORM
        //onkgula array niye kaj kore
        Student::insert($students);

        //single array niye kaj kore
        // Student::create($mozid);
    }
}
