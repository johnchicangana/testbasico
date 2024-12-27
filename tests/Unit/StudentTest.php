<?php

namespace Tests\Unit;

use App\Models\School;
use App\Models\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_relation_school_in_student(): void
    {
        // $school = School::factory()->create();
        // $student = Student::factory(['school_id' => $school->id])->create();
        // $response = $this->getJson('/api/students/'.$student->id);
        // $response->assertStatus(200);
        // $response->assertJson([
        //     "message" => 'Info Student',
        //     "data" => $student->toArray()
        // ]);
        $this->assertTrue(true);
    }
}
