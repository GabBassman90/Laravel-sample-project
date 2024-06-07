<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyFirstController;

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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello';
});

Route::get('/hello/{params}', function ($params) {
    return 'hello' . $params;
});

Route::get('/hello-view', function () {

    $model = [
        'param1' => 'first',
        'param2' => 'first',
    ];

    return view('hello-view', $model);
});

Route::get('/hello-view/{param}', function ($param) {

    $model = [
        'param1' => $param,
        'param2' => 'first',
    ];

    return view('hello-view', $model);
});

Route::get('/hello-view', function () {

    $model = [
        'param1' => 'first',
        'param2' => 'first',
    ];

    return view('hello-view', $model);
});

Route::get('/controller',  [MyFirstController::class, 'index']);

Route::get('/controller/{param1}/{param2}',  [MyFirstController::class, 'indexWithParams']);

Route::get('/controller-query-string',  [MyFirstController::class, 'indexWithQueryParams']);