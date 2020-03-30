<?php

namespace App\Http\Controllers;

use App\Categoria;
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
        $libros = Libro::all();

        ///dd($libros);

        return view('Libro/libroIndex' , compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre' , 'id');

        return view('Libro/libroForm' , compact('categorias'));
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
            'categoria_id' => 'required',
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

//        dd($tarea);

        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('Libro/libroShow', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {

        $categorias = Categoria::all()->pluck('nombre' , 'id');

        return view('Libro/libroForm', compact('libro' , 'categorias'));
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
        $request->validate([
            'libro'=>'required|max:255',
            'autor'=>'required|max:255',
            'categoria_id' => 'required',
            'precio'=>'required',
            'stock'=>'required',
        ]);


        $libro->libro = $request->libro;
        $libro->autor = $request->autor;
        $libro->categoria_id = $request->categoria_id;
        $libro->precio = $request->precio;
        $libro->stock = $request->stock;
        $libro->disponibilidad = $request->disponibilidad;

        $libro->save();

        return redirect()->route('libro.show' , $libro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro ->delete();
        return redirect()->route('tarea.index');
    }

    public function cart(){
        return view('Libro/libroCart');
    }

    public function addToCart($id)
    {
        $libros = Libro::find($id);
        $cart = session()->get('cart');

        if(!$cart){

            $cart = [
                    $id => [
                        "libro" => $libros->libro,
                        "quantity" => 1,
                        "precio" => $libros->precio
                    ]
            ];

            session()->put('cart' , $cart);

            return redirect()->back()->with('success', 'Product added to cart!');
        }

        if(isset($cart[$id])){

            $cart[$id]['quantity']++;

            session()->put('cart' , $cart);

            return redirect()->back()->with('success' , 'Product added to cart!');

        }

        $cart[$id] = [
            "libro" => $libros->libro,
            "quantity" => 1,
            "precio" => $libros->precio
        ];

        session()->put('cart' , $cart);

        return redirect()->back()->with('success' , 'Product added to cart!');
    }

}
