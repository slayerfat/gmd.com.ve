<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () {
    return view('index');
});

$app->get('/sobre-nosotros', function () {
    return view('about');
});

$app->get('/contacto', ['uses' => 'ContactController@show']);
$app->post('/contacto', ['uses' => 'ContactController@newMessage']);

$app->get('/cursos/{id}', ['uses' => 'CoursesController@show']);
