<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Get /Empleados
     */
    public function index()
    {
        //
        $data['empleados'] = Empleado::all();
        //return response()->json($data);
        return view('Empleado.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * Get /Empleados/create
     */
    public function create()
    {
        //
        return view('Empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /Empleados
     */
    public function store(Request $request)
    {
        //
        //$DatosEmpleado = request()->all();
        $DatosEmpleado = request()->except('_token');
        Empleado::insert($DatosEmpleado);
        return response()->json($DatosEmpleado);

    }

    /**
     * Display the specified resource.
     * Get /Empleados/{Empleados}
     */
    public function show($Email, $Password)
    {
        //
        $DatosEmpleado = Empleado::where('Email', '=', $Email)->where('Password', '=', $Password)->first();
        return response()->json($DatosEmpleado);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /Empleados/{Empleados}/edit
     */
    public function edit($id)
    {
        //
        $DatosEmpleado = Empleado::findORFail($id);
        return response()->json($DatosEmpleado);
    }

    /**
     * Update the specified resource in storage.
     * PUT /Empleados/{Empleados}
     */
    public function update(Request $request, $id)
    {
        //
        $DatosEmpleado = request()->except(['token', 'method']);
        Empleado::where('id', '=', $id)->update($DatosEmpleado);
        $Dataempleado = Empleado::findOrFail($id);
        return response()->json($Dataempleado);
    }

    /**
     * Remove the specified resource from storage.
     * Delete /Empleados/{Empleados}
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
    }
}
