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

Route::get('/phptesting', function () {
    return view('phpstilltest');

});

Route::get('/create-banana',function () {
   
    return view('banana/create');
});

Route::post('/create-banana',function (Request $request) {
    $newBanana = new Banana([
        'name' => $request->input("title"),
        'color' => $request->input("color")
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
    return $newFruit;
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