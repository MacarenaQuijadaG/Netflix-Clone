<?php

namespace App\Http\Controllers;

use App\Models\pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peliculas = Pelicula::all();
        //dd($pelicula);
       // return view('peliculas.index');
       //return view('peliculas.index',['pelicula'=> $pelicula]);
        return view ('peliculas.index',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // se utiliza para insertar y extraer datos de la bd
       // dd($request->all());

        $pelicula = Pelicula::create(
            $request->all()
        );
        //dd($pelicula);
        return back();
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelicula $pelicula)
    {
        //
    }
}
