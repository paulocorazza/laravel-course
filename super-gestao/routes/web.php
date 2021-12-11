<?php

use Illuminate\Support\Facades\Route;

//outras versões laravel
//Route::get('/', 'PrincipalController@principal')




//passagem de parâmetros para as rotas(parâmetros obrigatórios)
// Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int  $categoria_id = 1 ){
//     echo "Olá $nome, $categoria_id";
// })->where('categoria_id','[0-9]+')->where('nome','[A-Z]+');


//passagem de parâmetros opcionais
// Route::get('/contato/{nome?}/{idade?}/{civil?}', function(string $nome = 'paulo', int $idade = 29, string $civil = 'solteiro'){
//     echo "Olá $nome, bem vindo, você tem $idade anos e é $civil";
// });



//laravel 8 ou superior
Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobre');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function(){return 'login';});

//agrupamento de rotas
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtods';})->name('app.produtos');
});


//redirecionamento
Route::get('/rota1', function(){ echo 'rota1'; })->name('site.rota1');
Route::get('/rota2', function(){ return redirect()->route('site.rota1'); })->name('site.rota2');
Route::redirect('/rota2', '/rota1');


//rota de fallback
Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui para ir ao início</a>';
});

