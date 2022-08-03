<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/tempatwisata', 'todoController@index');
$router->get('/tempatwisata/{id}', 'todoController@show');
$router->post('/tempatwisata/save', 'todoController@store');
$router->post('/tempatwisata/{id}/update', 'todoController@update');
$router->post('/tempatwisata/{id}/delete', 'todoController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
    
});
