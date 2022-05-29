<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cursoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', loginController::class)->name('login'); //Si no lo paso como array toma la funcion llamada '__invike'

//Route::get('cursos', [cursoController::class, 'index'])->name('cursos.index'); //Con array le pasamos como 2do parametro el nombre de la funcion

//Route::get('cursos/create', [cursoController::class, 'create'])->name('cursos.create'); //Pagina de creacion cursos

//Route::post('cursos', [cursoController::class, 'store'])->name('cursos.store'); //Funcion crea cursos

//Route::get('cursos/{id}', [cursoController::class, 'show'])->name('cursos.show'); //Con SHOW muestra un curso especifico

//Route::get('cursos/{curso}/edit', [cursoController::class, 'edit'])->name('cursos.edit'); //Pagina con form para editar

//Route::put('cursos/{curso}', [cursoController::class, 'update'])->name('cursos.update'); //Pagina con form para editar

//Route::delete('cursos/{curso}', [cursoController::class, 'destroy'])->name('cursos.destroy');


//ESTA LINEA DE CODIGO SIMPLIFICA DESDE LA LINEA 22 A 34
Route::resource('cursos', cursoController::class);

//metodo para mostrar una pagina estatica
Route::view('nosotros', 'nosotros')->name('nosotros');

//Ruta para vista del email
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

//Ruta para FORMULARIO del email
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

//Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
