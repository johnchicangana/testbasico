<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
    * @OA\Get(
    *     path="/students",
    *     tags={"Students"},
    *     summary="Mostrar estuudiantes",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los estuudiantes."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $list = Student::with('school')->orderby('id','asc')->paginate(10);
        return view('students.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
    * @OA\Get(
    *     path="/students/create",
    *     tags={"Students"},
    *     summary="Vista Crear estudiantes",
    *     @OA\Response(
    *         response=200,
    *         description="Crear todos los estudiantes."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
    * @OA\Post(
    *     path="/students/",
    *     tags={"Students"},
    *     summary="Agregar estudiante",
    *     @OA\Response(
    *         response=200,
    *         description="Guarda estudiante."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->code_number = $request->code_number;
        $student->school_id = $request->school_id;
        $student->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    /**
    * @OA\Get(
    *     path="/students/{id}",
    *     tags={"Students"},
    *     summary="Muestra un estudiante por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Muestra estudiante."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function show($id)
    {
        $student = Student::find($id);
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
    * @OA\Get(
    *     path="/student/edit",
    *     tags={"Students"},
    *     summary="Vista editar estudiantes",
    *     @OA\Response(
    *         response=200,
    *         description="Editar estudiante por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
    * @OA\Put(
    *     path="/students/edit",
    *     tags={"Students"},
    *     summary="actualiza un estudiante por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Actualizar estudiante por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->code_number = $request->code_number;
        $student->school_id = $request->school_id;
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
    * @OA\Delete(
    *     path="/students/{id}",
    *     tags={"Students"},
    *     summary="Eliminar estudiante",
    *     @OA\Response(
    *         response=200,
    *         description="Elimina un estudiante por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
