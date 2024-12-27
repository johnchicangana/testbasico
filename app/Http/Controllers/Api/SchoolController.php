<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = School::orderby('id','asc')->paginate(10);

        return response()->json([
            "message" => 'List of Schools',
            "data" => $list	
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $school = new School();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->save();
        
        return response()->json([
            "message" => 'Added successfully',
            "data" => $school
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school = School::with('student')->find($id);
        return response()->json([
            "message" => 'Info School',
            "data" => $school
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $school = School::find($id);
        $school->name = $request->name;
        $school->address = $request->address;
        $school->save();
        return response()->json([
            "message" => 'Updated successfully',
            "data" => $school
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return response()->json([
            "message" => 'Deleted successfully',
            "data" => $school
        ], 200);
    }
}
