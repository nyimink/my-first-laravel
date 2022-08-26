<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Banana;
use App\Models\Fruit;
use App\Models\tabemono;
use App\Models\html_form;
use Illuminate\Http\Request;

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

Route::get('/view-post',function () {
    echo Post::get();
    return view('testing123');
});

Route::get('/something',function () {
    echo Post::get();
    return view('hellotest');
});

Route::get('/create-post',function () {
    $newPost = new Post([
        'title' => 'title 2',
        'detail' => 'detail 2'
    ]);
    $newPost->save();
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing123');

});

Route::get('/create-banana',function () {
    $newBanana = new Banana([
        'name' => 'title 3',
        'color' => 'detail 3'
    ]);
    $newBanana->save();
    return $newBanana;
});

Route::get('/fruits',function () {
    $newFruit = new Fruit([
        'name' => 'fruit name',
        'color' => 'fruit color'
    ]);
    $newFruit->save();
    return view('testing123');
});

Route::get('/tabemonos',function () {
    $newTabemono = new tabemono([
        'name' => 'name',
        'favourites' => 'love',
        'price' => '$',
        'flavour' => 'yummy'
    ]);
    $newTabemono->save();
    return $newTabemono;
});

Route::get('/register-form',function () {
   
    return view('html-form/regform');
});

Route::post('/register-form',function (Request $request) {
    $newForm = new html_form([
        'firstName' => $request->input("firstName"),
        'lastName' => $request->input("lastName"),
        'email' => $request->input("email"),
        'password' => $request->input("password")
    ]);
    $newForm->save();
    return $newForm;
});