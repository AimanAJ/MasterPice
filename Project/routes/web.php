<?php

use Illuminate\Support\Facades\Route;

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
    return view('master.index');
});


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// Admin page route
//login
// Route::get('/admin/login', function () {

//     return view('Admin/admins/login');
// });


// Route::group(['middleware'=>['admin']],function(){
//     //dashboard
//     Route::get('/dashboard' ,[DashboardController::class,'index']);
//     //users



    




    
//  });



// login
// Route::get('/login', function(){
//     if(session()->has('name')){
//         return redirect('/');
//     }
//     return view('log/login');
// });
// Route::get('/signup',  function(){
//     if(session()->has('name')){
//         return redirect('/');
//     }
//     return view('log/signup');
// });


// Route::post('/signup',[]);
// Route::post('/login',[]);

// Route::get('/logout' ,[]);


// Route::view('profile', '*****************rofile');



// Route::get('/home',[CategoryController::class,'show']);
// Route::get('post/{id}', [PostController::class,'singlePage']);



// user

// Route::get('profile',[userController::class,'view']);
// Route::post('profile',[userController::class,'view']);

// Route::get('order/{id}',[BookController::class,'view']);
// Route::post('order/{id}',[BookController::class,'view']);

// Route::get('delete/{id}',[BookController::class,'delete']);
// Route::post('delete/{id}',[BookController::class,'delete']);

// Route::get('update/{id}',[BookController::class,'update']);
// Route::post('update/{id}',[BookController::class,'update']);

// Route::get('enable/{id}',[BookController::class,'enable']);
// Route::post('enable/{id}',[BookController::class,'enable']);