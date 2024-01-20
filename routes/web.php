<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Validacion-no tocar
Route::view('/',"login")->name('login');
Route::view('/registro',"register")->name('registro');

Route::middleware(['auth'])->group(function () {});
    // Route::view('/privada',"layouts.navbar")->name('privada');

    // //-------------------------------------------------------------------------------
    // //esto si pueden tocar
    // Route::view('/contacto',"contacto")->name('contacto');
    // Route::view('/inicio',"layouts.navbar")->name('inicio');
    // Route::view('/index',"layouts.index");

    // //2022

    // Route::view('/everything',"layouts.peliculas.2022.everything")->name('everything');
    // Route::view('/batman2022',"layouts.peliculas.2022.batman2022")->name('batman2022');
    // Route::view('/elvis',"layouts.peliculas.2022.elvis")->name('elvis');
    // Route::view('/avatar',"layouts.peliculas.2022.avatar")->name('avatar');
    // Route::view('/topgun',"layouts.peliculas.2022.topgun")->name('topgun');
    // Route::view('/banshees',"layouts.peliculas.2022.banshees")->name('banshees');

    
    // //animadas

    // Route::view('/los_mitchel',"layouts.peliculas.animadas.los_mitchel")->name('los_mitchel');
    // Route::view('/turning_red',"layouts.peliculas.animadas.turning_red")->name('red');
    // Route::view('/minions',"layouts.peliculas.animadas.minions")->name('minions');
    // Route::view('/sherk2',"layouts.peliculas.animadas.sherk2")->name('sherk2');
    // Route::view('/toy_tory',"layouts.peliculas.animadas.toy_tory")->name('toy_tory');
    // Route::view('/pinocho',"layouts.peliculas.animadas.pinocho")->name('pinocho');

    // //comedia

    // Route::view('/scott',"layouts.peliculas.comedia.scott")->name('scott');
    // Route::view('/scary',"layouts.peliculas.comedia.scary")->name('scary');
    // Route::view('/superbad',"layouts.peliculas.comedia.superbad")->name('superbad');
    // Route::view('/little',"layouts.peliculas.comedia.little")->name('little');
    // Route::view('/jump',"layouts.peliculas.comedia.jump")->name('jump');
    // Route::view('/white',"layouts.peliculas.comedia.white")->name('white');

    // //ficcion

    // Route::view('/matrix',"layouts.peliculas.ficcion.matrix")->name('matrix');
    // Route::view('/terminator',"layouts.peliculas.ficcion.terminator")->name('terminator');
    // Route::view('/star_wars',"layouts.peliculas.ficcion.star_wars")->name('star_wars');
    // Route::view('/zathura',"layouts.peliculas.ficcion.zathura")->name('zathura');
    // Route::view('/man_black',"layouts.peliculas.ficcion.man_black")->name('man_black');
    // Route::view('/live_die_repeat',"layouts.peliculas.ficcion.live_die_repeat")->name('live_die_repeat');


    // //guerra

    // Route::view('/saving',"layouts.peliculas.guerra.saving")->name('saving');
    // Route::view('/western',"layouts.peliculas.guerra.western")->name('western');
    // Route::view('/h_u_h',"layouts.peliculas.guerra.h_u_h")->name('h_u_h');
    // Route::view('/pianist',"layouts.peliculas.guerra.pianist")->name('pianist');
    // Route::view('/schinders',"layouts.peliculas.guerra.schinders")->name('schinders');
    // Route::view('/1917',"layouts.peliculas.guerra.1917")->name('1917');

    // //musicales
    // Route::view('/Lala_land',"layouts.peliculas.musicales.Lala_land")->name('Lala_land');
    // Route::view('/mamamia',"layouts.peliculas.musicales.mamamia")->name('mamamia');
    // Route::view('/thegreatest_showman',"layouts.peliculas.musicales.thegreatest_showman")->name('thegreatest_showman');
    // Route::view('/Rocketman',"layouts.peliculas.musicales.Rocketman")->name('Rocketman');
    // Route::view('/Grease',"layouts.peliculas.musicales.Grease")->name('Grease');
    // Route::view('/singingin_the_rain',"layouts.peliculas.musicales.singingin_the_rain")->name('singingin_the_rain');
    // //superhereo
    // Route::view('/batman',"layouts.peliculas.superheroe.batman")->name('batman');
    // Route::view('/xmen',"layouts.peliculas.superheroe.xmen")->name('xmen');
    // Route::view('/avengers',"layouts.peliculas.superheroe.avengers")->name('avengers');
    // Route::view('/deadpool',"layouts.peliculas.superheroe.deadpool")->name('deadpool');
    // Route::view('/squad',"layouts.peliculas.superheroe.squad")->name('squad');
    // Route::view('/justicia',"layouts.peliculas.superheroe.justicia")->name('justicia');

    // //terror
    // Route::view('/it',"layouts.peliculas.terror.it")->name('it');
    // Route::view('/terrifier',"layouts.peliculas.terror.terrifier")->name('terrifier');
    // Route::view('/shining',"layouts.peliculas.terror.shining")->name('shining');
    // Route::view('/conjuro',"layouts.peliculas.terror.conjuro")->name('conjuro');
    // Route::view('/child',"layouts.peliculas.terror.child")->name('child');
    // Route::view('/getout',"layouts.peliculas.terror.getout")->name('getout');






//-------------------------------------------------------------------------------
//Validacion-no tocar
Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');


Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//----peliculas--------------
Route::get('/peliculas_to',[PeliculaController::class,'show_cat'])->name('inicio.pelicula');
Route::get('/detalle_pelicula/{id}', [PeliculaController::class,'mostrarDetalles'])->name('detalle_pelicula');
Route::post('/register_pelicula', [PeliculaController::class,'create'])->name('register.pelicula');
Route::get('/store_pelicula', [PeliculaController::class,'store'])->name('store.pelicula');
Route::get('/index_pelicula', [PeliculaController::class,'index'])->name('index.pelicula');
Route::get('/edit_pelicula', [PeliculaController::class,'edit'])->name('edit.pelicula');
Route::get('/update_pelicula', [PeliculaController::class,'update'])->name('update.pelicula');


