<?php

use Illuminate\Support\Facades\Route;
/** @var \Illuminate\Routing\Router $router */

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

$router->get( '/', [ 'uses' => 'ContactController@index', 'as' => 'home' ] );



$router->resource('contacts','ContactController');

$router->get('login',['uses' => 'LoginController@index', 'as' => 'login'])->middleware('guest');
$router->post('login',['uses' => 'LoginController@login', 'as' => 'login'])->middleware('guest');
$router->get('logout',['uses' => 'LoginController@logout', 'as' => 'logout'])->middleware('auth');
