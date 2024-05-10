<?php

// use App\Http\Controllers\regist\RegisterController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

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

// $router->get('/', ['uses' => 'register\RegisterController@all_user']);

$router->get('/','register\RegisterController@all_user_test');
$router->get('/','register\RegisterController@all_user');

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('/', 'register\RegisterController@all_user');
//     $router->get('/', 'register\RegisterController@all_user_test');
//     // $router->post('products', 'ProductController@create');
//     // $router->get('products/{id}', 'ProductController@show');
//     // $router->delete('products/{id}', 'ProductController@destroy');
//     // $router->post('products/{id}', 'ProductController@update');
// });