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
/*
Route::get('/', function () {
    return 'Hello World';
});

Route::get('/test', function () {

    return view('test',[
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', function ($post) {

    $posts = [
        1 => "Test1",
        2 => "Test2"
    ];

    if (!array_key_exists($post, $posts)){
        abort(404, "that page is not exist");
    }

    return view('post', [
        'post' => $posts[$post] ?? "Nothing here yet"
    ]);
});
*/

//Route::get('/', function(){
//    $title = "Data Service";
//    $documentTitle = "Data Service - otwarta baza danych";
//
//    return view('header', [
//        'title' => $title,
//        'documentTitle' => $documentTitle
//    ]);
//});

define('MAIN_PATH',__DIR__);

Route::get('/', 'App\Http\Controllers\MainPageController@show');

Route::get('/{post}', 'App\Http\Controllers\PostsDataController@show');

Route::get('/{post}/reports', 'App\Http\Controllers\ReportsController@show');

//$order->products->get(0)->name;   will return the first record
// $order->products->get(1)->name;   will return the second record
// $order->products->get(2)->name;   will return the third record
