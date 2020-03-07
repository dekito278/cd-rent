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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

$router->group([
    'prefix' => 'api/v1',
], function () use ($router) {
    $router->get('/admin/cd/collection', 'ProductController@index');
    $router->get('/admin/cd/collection/{id}', 'ProductController@show');
    $router->post('/admin/cd/collection', 'ProductController@store');
    $router->patch('/admin/cd/collection/{id}', 'ProductController@update');
    $router->delete('/admin/cd/collection/{id}', 'ProductController@destroy');
});

$router->group([
    'prefix' => 'api/v1',
], 
    function () use ($router) {
    $router->get('/user/profile/{id}', 'PcostumerController@show');
    $router->patch('/admin/cd/collection/{id}', 'PcostumerController@update');
});

$router->group([
    'prefix' => 'api/v1',
], function () use ($router) {
    $router->get('/user/cd/collection', 'CostumerController@index');
    $router->get('/user/cd/collection/{id}', 'CostumerController@show');
    $router->patch('/user/cd/collection/{id}', 'CostumerController@update');
});