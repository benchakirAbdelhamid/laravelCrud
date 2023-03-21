<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('page1', function () {
//     return view('page');
// });
// Route::get('{n}', function ($n) {
//     echo 'je suis la page ==> ' . $n . '<==';
// });
// Route::get('user/{id}', function ($id) {
//     echo 'I am user ==> ' . $id . '<==';
// });
// Route::get('posts/{post}/comments/{comment}', function ($post, $comment) {
//     echo 'I am user == ' . $post . '<===> ' . $comment . '.';
// });
// Route::get('name/{name?}', function ($name = 'hamid') {
//     echo 'I am user == ' . $name . '<===>.';
// });

// Route::get('/test1', 'App\Http\Controllers\Controller@test');

// Route::get('test', function () {
//     echo 'hello';
// });
// Route::get('p1', function () {
//     echo 'view page 1';
// })->name('r1');

// Route::view('index', 'welcome');
// Route::view('index', 'hello');
// Route::view('index', 'hello', ['id' => 100]);

// Route::view('index', 'hello', ['id' => 100]);
// Route::redirect('/test2', 'index');

// Route::view('index', 'hello', ['id' => 100]);
// Route::redirect('/test2', 'index', 301);
// Route::permanentRedirect('/test2', 'index');

// ?????
// Route::fallback(function () {
//     echo 'page de la route' . Route::currentRouteName() . 'n"existe pas';
// });


// Route::get('/controller', 'App\Http\Controllers\NomControleur@test');

// Route::get('/somme/{a}/{b}', 'App\Http\Controllers\CalculController@some');
// Route ::get('/produit/{a}/{b}', 'App\Http\Controllers\CalculController@produit');



// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/viewpage', 'App\Http\Controllers\NomControleur@view');
// Route::get('/testvue', 'App\Http\Controllers\NomControleur@testvue');
// Route::get('/testvue/{x}', 'App\Http\Controllers\NomControleur@testvuevalue');

// Route::get('/testadmine/{x}', 'App\Http\Controllers\NomControleur@testadmine');



// tp
// Route::get('/tp', 'App\Http\Controllers\ControllerTp1@etudiant');

 
// Route::view('/home', 'home');
// Route::view('/home2', 'home2');
// Route::view('/about', 'about');
// Route::view('/contact', 'contact');
// Route::view('/home5', 'home5');
// Route::view('/home2', 'home2');

// middleware
// Route::view('/home', 'home')->middleware('testM');

// // request vs route ?????

// Route::get('/footer/{n}',function($n){
//     return view('footer',['n'=>$n]) ; 
// });

// Route::get('/footer/{n}',function($n){
//     return view('footer',['n'=>$n]) ; 
// });
// ????? problem
// Route::get('/footer/{n}',function(Request $request , $n){
//     return view('footer',['r'=>$request['age'] , 'p'=>$request['p'] ,'n'=>$n ]) ; 
// });


// // http://127.0.0.1:8000/accueil?age=10
// // http://127.0.0.1:8000/accueil?age=30
// Route::get('/accueil' , function(){
//     return view('accueil');
// })->middleware('age');

// http://127.0.0.1:8000/userPage?nom=admin
// http://127.0.0.1:8000/userPage?nom=hamid
// Route::get('/userPage' , function(){
//     return view('userPage');
// })->middleware('user');

// group middleware ==>testGroup.blade.php
// http://127.0.0.1:8000/testGroup?nom=admin&age=55
// http://127.0.0.1:8000/testGroup?nom=dmin&age=55
// http://127.0.0.1:8000/testGroup?nom=admin&age=5
// Route::get('/testGroup' , function(){
//     return view('testGroup');
// })->middleware('test');


// clobal middelware 
// http://127.0.0.1:8000/contact2?nom=admin

// http://127.0.0.1:8000/contact2?nom=hamid
// Route::get('/contact2' , function(){
//     return view('contact');
// });


// post data in form  ==> 419 PAGE EXPIRED
// Route::post('/', function () {
//     return view('welcome');
// });
// Route::get('testStyle', function(){
//     return view('testStyle');
// } );

// recuperer les donnes form || get data in form 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', function(){
    return view('pages.Exe1Form');
} );
Route::post('/homePage', 'App\Http\Controllers\c1@getData');

// get data from database
Route::get('/getDB', 'App\Http\Controllers\c2@getDataFromDB');
Route::get('/getTable', 'App\Http\Controllers\c2@getDataFromTable');


// ex2 get data from db
Route::get('/testDb', 'App\Http\Controllers\c3@gatDataFromDataBase');

// test link files css
Route::get('testcss', function () {
    return view('testcss');
});
