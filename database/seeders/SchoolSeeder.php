<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            ['name' => 'Jarvan', 'address' => '123 st', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warwick', 'address' => '456 st', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Teemo', 'address' => '789 st', 'created_at' => now(), 'updated_at' => now()],
        ]);

        School::factory(17)->create();
    }
}
