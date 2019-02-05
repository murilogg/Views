<?php

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

Route::get('/', function () {
    return view('filho');
});

Route::get('/produtos', 'ProdutoControlador@lista');

Route::get('/secaoproduto/{palavra}','ProdutoControlador@meus');

Route::get('/opcoes/{opcao}','ProdutoControlador@opcao');

Route::get('/mostrar','ProdutoControlador@opcao_cor');

Route::get('/loop/for/{n}','ProdutoControlador@loop_for');

Route::get('/bootstrap', function () {
    return view('pagina');
});

route::get('/view/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    return view('minhaView', compact('nome', 'sobrenome'));
});

route::get('/ola', function () {
    return view('minhaView')->with('nome', 'murilo')->with('sobrenome', 'gomes');
});

route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    /*return view('minhaView')
         ->with('nome', $nome)
        ->with('sobrenome', $sobrenome);
    */

    /*
    $parametros = ['nome'=>$nome,'sobrenome'=>$sobrenome];
    return view('minhaView',$parametros);
    */
    return view('minhaView', compact('nome', 'sobrenome'));
});

route::get('/email/{email}', function ($email) {
    if (View::exists('email'))
        return view('email', compact('email'));
    else
        return view('erro');
});
