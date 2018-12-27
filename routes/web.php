<?php

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

/*Route::get('welcome', function () {
    return 'welcome';
});*/

Route::get('welcome/{postId?}', function ($postId = 1) {
    return 'post Id : '. $postId;
})->name('welcomeName');

/*Route::get('test', function () {
   return redirect()->route('welcomeName');
});*/

Route::get('test', 'WelcomeController@test')->name('testName');

Route::get('welcome/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'PostId : ' . $postId . ', CommentId : ' . $commentId;
});

/*Route::get('dashboard', function () {
    return 'Dash Board';
})->middleware('auth');

Route::get('user/profile', function () {
    return 'Dash Board';
})->middleware('auth');*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
        return 'Dash Board';
    });

    Route::get('user/profile', function () {
        return 'Dash Board';
    });
});


// Namespace
Route::group(['namespace' => 'Admin'], function () {
    //  namespace App\Http\Controllers\Admin;
});

//Prefix
Route::group(['prefix' => 'system'], function () {
    Route::get('show', function () {
       // URL : system/show
    });
});

//php artisan route:list