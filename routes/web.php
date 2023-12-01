<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[CareerController::class,'showUser']);
// Route::get('/about/{id}',[CareerController::class,'showabout']);

// Route::prefix('hello')->group(function(){
//     Route::get('/login', function () {
//         return view('login');    
//   });
   
//   Route::get('/about', function () {
//       return view('about');  
//   });
  
//   Route::get('/career', function () {
//       return view('career');    
//   });
// });

// ROute::fallback(function(){
//  return "<h1>PAGE NOT FOUND IN THIS PROJECT</h1>";
// });
// Route::get('/hello', function () {
//     return view('post');
// });

Route::controller(UserController::class)->group(function(){
    Route::get('/',[UserController::class,'showUser'])->name('home');

    Route::get('/user/{id}','singleUser')->name('view.user');
    
    Route::post('/add','addUser')->name('addUser');
    
    Route::post('/update/{id}','updateUser')->name('update.User');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    
    Route::get('/delete/{id}','deleteUser')->name('delete.user');
    
    Route::view('newuser','/adduser');
});



