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


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello-lumen', function (){
    return "<h1>Lumen</h1><p>Hi Rikza Fauzain</p>";
});

$router->get('posts', 'PostsController@index');

$router->post('/users', 'ApiController@createUser');
$router->get('/users', 'ApiController@getUsers');
$router->post('/articles', 'ApiController@createArticle');
