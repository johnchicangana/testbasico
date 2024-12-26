<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

/**
 * Display a listing of the resource.
 */

class SchoolController extends Controller
{

    /**
    * @OA\Get(
    *     path="/schools",
    *     tags={"Schools"},
    *     summary="Mostrar colegios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los colegios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $list = School::all();
        // return $list;
        return view('schools.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
    * @OA\Get(
    *     path="/schools/create",
    *     tags={"Schools"},
    *     summary="Vista Crear colegios",
    *     @OA\Response(
    *         response=200,
    *         description="Crear todos los colegios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
    * @OA\Post(
    *     path="/schools/",
    *     tags={"Schools"},
    *     summary="Agregar colegio",
    *     @OA\Response(
    *         response=200,
    *         description="Guarda colegio."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function store(Request $request)
    {
        $school = new School();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->save();
        return redirect('/schools');
    }
    /**
     * Display the specified resource.
     */
    /**
    * @OA\Get(
    *     path="/schools/{id}",
    *     tags={"Schools"},
    *     summary="Muestra un colegio por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Muestra colegio."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function show($id)
    {
        $school = School::find($id);
        return $school;
        // view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
    * @OA\Get(
    *     path="/schools/edit",
    *     tags={"Schools"},
    *     summary="Vista editar colegios",
    *     @OA\Response(
    *         response=200,
    *         description="Editar colegio por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function edit($id)
    {
        $school = School::find($id);
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
    * @OA\Put(
    *     path="/schools/edit",
    *     tags={"Schools"},
    *     summary="actualiza un colegio por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Actualizar colegio por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function update(Request $request, $id)
    {
        $school = School::find($id);
        $school->name = $request->name;
        $school->address = $request->address;
        $school->save();
        return redirect('/schools');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
    * @OA\Delete(
    *     path="/schools/{id}",
    *     tags={"Schools"},
    *     summary="Eliminar colegio",
    *     @OA\Response(
    *         response=200,
    *         description="Elimina un colegio por ID."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect('/schools');
    }
}
