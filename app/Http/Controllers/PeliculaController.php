<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas=Pelicula::all();
        return view('index_peliculas',compact('peliculas'));

    }

    public function show_cat()
    {
        $pelicula_cat_A = Pelicula::where('categoria', 'A')->get();
        $pelicula_cat_B = Pelicula::where('categoria', 'B')->get();
        $pelicula_cat_C = Pelicula::where('categoria', 'C')->get();
        $pelicula_cat_D = Pelicula::where('categoria', 'D')->get();
        $pelicula_cat_E = Pelicula::where('categoria', 'E')->get();
        $pelicula_cat_F = Pelicula::where('categoria', 'F')->get();
        $pelicula_cat_G = Pelicula::where('categoria', 'G')->get();
        $pelicula_cat_H = Pelicula::where('categoria', 'H')->get();

        $pelicula_cat=[
            'Peliculas Animadas'=>$pelicula_cat_A,
            'Peliculas de Comedia'=>$pelicula_cat_B,
            'Peliculas del 2022'=>$pelicula_cat_C,
            'Peliculas sobre la Guerra'=>$pelicula_cat_D,
            'Peliculas de Terror'=>$pelicula_cat_E,
            'Peliculas Musicales'=>$pelicula_cat_F,
            'Peliculas de SuperHeroes'=>$pelicula_cat_G,
            'Peliculas de Ciencia Ficción'=>$pelicula_cat_H
        ];
        return view('layouts.index', compact('pelicula_cat'));
    }

    public function mostrarDetalles($id)
    {
        $pelicula_det = Pelicula::find($id);
        return view('layouts.peliculas.pelicula',compact('pelicula_det'));

    }

    public function store()
    {
        return view('register_peliculas');
    }

    public function create(Request $request)
    {
        // Subir imágenes y obtener las rutas
        $img_first_path = $request->file('img_first') ? $request->file('img_first')->store('public/images') : null;
        $img_second_path = $request->file('img_second') ? $request->file('img_second')->store('public/images') : null;
        $img_third_path = $request->file('img_third') ? $request->file('img_third')->store('public/images') : null;

        // Crear una nueva instancia del modelo Pelicula con los datos validados
        $pelicula = Pelicula::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'img_first' => $img_first_path,
            'img_second' => $img_second_path,
            'img_third' => $img_third_path,
            'categoria' => $request->categoria,
            'calificacion' => $request->calificacion,
            'url_first' => $request->url_first,
            'url_second' => $request->url_second,
            'url_third' => $request->url_third,
            'url_four' => $request->url_four,
        ]);

        // Redireccionar o realizar otras acciones después de crear la película
        return redirect()->route('inicio.pelicula')->with('success', 'La película se ha registrado correctamente.');

    }

    public function edit(Pelicula $pelicula){
        Return view('edit_peliculas',compact('pelicula'));
    }

}
