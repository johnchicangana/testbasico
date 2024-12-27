<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Student::with('school')->orderby('id','asc')->paginate(10);
        return response()->json([
            "message" => 'List of Students',
            "data" => $list	
        ], 200);        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->code_number = $request->code_number;
        $student->school_id = $request->school_id;
        $student->save();
        return response()->json([
            "message" => 'Added successfully',
            "data" => $student
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::with('school')->find($id);
        return response()->json([
            "message" => 'Info Student',
            "data" => $student
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->code_number = $request->code_number;
        $student->school_id = $request->school_id;
        $student->save();
        return response()->json([
            "message" => 'Updated successfully',
            "data" => $student
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json([
            "message" => 'Deleted successfully',
            "data" => $student
        ], 200);
    }
}
