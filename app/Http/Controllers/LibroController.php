<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function __construct()
    {
        ///$this->middleware('auth')///->except('index');//->except(['' , ''])
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::all();

        ///dd($libros);

        return view('Libro/libroIndex' , compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Libro/libroForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'libro'=>'required|max:255',
            'autor'=>'required|max:255',
            'precio'=>'required',
            'stock'=>'required',
        ]);

        $libro = new Libro();
        $libro->libro = $request->libro;
        $libro->autor = $request->autor;
        $libro->categoria_id = $request->categoria_id;
        $libro->precio = $request->precio;
        $libro->stock = $request->stock;
        $libro->disponibilidad = $request->disponibilidad;

        $libro->save();

        dd($tarea);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
