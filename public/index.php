<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'VANPHONGPHAM');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->post('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');
$router->get('/contacts/add', '\App\Controllers\ContactsController@showAddPage');
$router->post('/contacts', '\App\Controllers\ContactsController@create');
$router->get('/forgot password', '\App\Controllers\Auth\ForgotpasswordController@showForgotpasswordForm');
$router->post('/forgot password', '\\App\Controllers\Auth\ForgotpasswordController@forgot password');
$router->post('/contacts/delete', '\App\Controllers\ContactsController@delete');
$router->post('/contacts/deleteadmin', '\App\Controllers\ContactsController@deleteadmin');

// Contact routes
$router->get('/', '\App\Controllers\ContactsController@index');
$router->get('/home1', '\App\Controllers\ContactsController@index');
$router->get('/trangchu', '\App\Controllers\ContactsController@index');
$router->get('/home', '\App\Controllers\ContactsController@giohang');
$router->get('/admin', '\App\Controllers\ContactsController@admin');
$router->post('/admin', '\App\Controllers\ContactsController@admin');
$router->get('/gh', '\App\Controllers\ContactsController@gh');
$router->get('/pay', '\App\Controllers\ContactsController@pay');
$router->get('/sp', '\App\Controllers\ContactsController@sp');
$router->get('/hinh', '\App\Controllers\ContactsController@hinh');
$router->get('/giohang', '\App\Controllers\ContactsController@giohang');
$router->post('/addgiohang', '\App\Controllers\ContactsController@addgiohang');
$router->post('/deletegiohang', '\App\Controllers\ContactsController@deletegiohang');
$router->set404('\App\Controllers\Controller@sendNotFound');
$router->get('/trangchu', '\App\Controllers\ContactsController@trangchu');


$router->post('/search', '\App\Controllers\ContactsController@search');
$router->run();
