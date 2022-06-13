<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pagina de inicio
        $datos = Alumno::all();
        return view('registro',compact('datos'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //el formulario donde nosotros agregamos datos
        return view('agregar');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //sirve paara guardar datos en la base de datos
        $alumno = new Alumno();
        $alumno-> Nombre = $request->post("Nombre"); 
        $alumno-> Apellido_P = $request->post("Apellido_P");
        $alumno-> Apellido_M = $request->post("Apellido_M");
        $alumno-> Fecha_Nacimiento = $request->post("Fecha_Nacimiento");
        $alumno-> Telefono = $request->post("Telefono");
        $alumno-> Matricula = $request->post("Matricula");
        $alumno-> Correo_Electronico = $request->post("Correo_Electronico");
        $alumno-> CURP = $request->post("Curp");
        $alumno-> NSS = $request->post("NSS");
        $alumno-> Edad = $request->post("Edad");
        $alumno->save();

        return redirect()->route("alumnos.index")->with("success","Agregado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //Sirve para obtener un solo registro de la tabla
        return view("eliminar");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //sirve para traer datos que se van a editar y los coloca en un formulario
        $alumno = Alumno::find($id);
        return view("actualizar", compact("alumno"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualiza los datos en la base 
        $alumno = Alumno::find($id);
        $alumno-> Nombre = $request->post("Nombre"); 
        $alumno-> Apellido_P = $request->post("Apellido_P");
        $alumno-> Apellido_M = $request->post("Apellido_M");
        $alumno-> Fecha_Nacimiento = $request->post("Fecha_Nacimiento");
        $alumno-> Telefono = $request->post("Telefono");
        $alumno-> Matricula = $request->post("Matricula");
        $alumno-> Correo_Electronico = $request->post("Correo_Electronico");
        $alumno-> CURP = $request->post("Curp");
        $alumno-> NSS = $request->post("NSS");
        $alumno-> Edad = $request->post("Edad");
        $alumno->save();

        return redirect()->route("alumnos.index")->with("success","Actualizado con exito");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //elimina el registro y muestra lo que eliminará
    }
}
