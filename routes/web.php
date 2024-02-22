<?php

// use Illuminate\Support\Facades\Route;

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

use Illuminate\Support\Facades\Route; 
 
Route::get('/hello', function (){
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
}); 

Route::get('/welcome', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'Nama: Putra Nindya Yuwana | NIM: 2241720089';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// }); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '. $id;
}); 

// Route::get('/user/{name?}', function ($name=null) { 
//     return 'Nama saya '.$name; 
// }); 

// Route::get('/user/{name?}', function ($name='John') { 
//     return 'Nama saya '.$name; 
// });

Route::get('/user/profile', function() { 
    // return 'Halo, nama saya Putra Nindya Yuwana!';
})->name('profile'); 

// Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
//     // Uses first & second middleware...
//     });
    
//     Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
// });
    
// Route::domain('{account}.example.com')->group(function () { Route::get('user/{id}', function ($account, $id) {
//     //
//     });
// });
    
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);  
// }); 
