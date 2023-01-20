<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::with('user')->orderBy('id','desc')->paginate(5);
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name')->pluck('name', 'id');
        return view('libros.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>['required', 'string', 'min:3'],
            'resumen'=>['required', 'string', 'min:10'],
            'pvp'=>['required', 'numeric', 'min:10', 'max:99999'],
            'stock'=>['required', 'numeric', 'min:1'],
            'user_id'=>['required', 'exists:users,id'],
        ]);
        Libro::create($request->all());
        return redirect()->route('libros.index')->with('mensaje', 'Libro Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        // $libro = Libro::with('user')->orderBy('id','desc')->paginate(5);
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $users = User::orderBy('name')->pluck('name', 'id');
        return view('libros.edit', compact('libro', 'users'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo'=>['required', 'string', 'min:3'],
            'resumen'=>['required', 'string', 'min:10'],
            'pvp'=>['required', 'numeric', 'min:10', 'max:99999'],
            'stock'=>['required', 'numeric', 'min:1'],
            'user_id'=>['required', 'exists:users,id'],
        ]);
        $libro->update($request->all());
        return redirect()->route('libros.index')->with('mensaje', 'Libro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('mensaje', 'Libro Borrado');
    }
}
