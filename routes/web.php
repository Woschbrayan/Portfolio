<?php

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
// */

Route::get('', function(){
    return view('portifolio');
});

//Route::get('/usuarios/{user}', [\App\Http\Controllers\UserController::class , 'show'])->name('user.show');
//Route::get('/users', [\App\Http\Controllers\UserController::class , 'index'])->name('users.index');


Route::get('portfolio/projetos', function(){
    return view('projetos');
});
Route::get('portfolio/sobre', function(){
    return view('sobre');
});


// Route::get('/{user}', function(\App\Models\User $user ){
//     return $user;
// })->name('usuarios');

// Route::get('/request', function (\Illuminate\Http\Request $request) {

//     $r = $request->all();
//     dd($r);
// });

// Route::get('/edit', function () {
//     return 'Editar Usuario';
// })->name('editar.usuario');


// //Rotas em grupos com prefix
// Route::prefix('usuarios')->group(function () {

//     //Rota para acessar apenas a tela de Usuarios
//     Route::get('', function () {
//         return 'Listar Usuario';
//     })->name('usuarios');

//     //Rota para acessar editar
//     Route::get('/detalhes/{user}', function (\App\Models\User $user) {
//         return $user;
//     })->name('detalhes.usuario');

//     //Rota para Ver detalhes do usario
//     Route::get('/edit', function () {
//         return 'Editar Usuario';
//     })->name('editar.usuario');
// });

// //Rodas simples emoresa
// Route::get('/a-empresa/{empresa?}', function ($empresa = null) {
//     return $empresa;
// });

// //Rotas simples usaurios com parametro
// Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
//     return $paramA . -$paramB;
// });
