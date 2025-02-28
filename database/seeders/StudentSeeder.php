<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Cartman', 'code_number' => '123', 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kyle', 'code_number' => '456', 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stam', 'code_number' => '789', 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Student::factory(17)->create();
    }
}
