<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/',function(){
        return 'hello from user';
});


// Route::view('/login','login',['name'=>'ali']);
    
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return $name." ".$id;
// })->whereNumber('id')->whereAlpha('name');




// Route::get('/category/{category}', function ($category) {
// return "song";
// })->whereIn('category', ['movie', 'song', 'painting']);


// Route::get('/test',[AdminController::class,'admin']);


Route::fallback(function(){
    return view('NotFound');
});








    