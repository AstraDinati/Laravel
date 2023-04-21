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
    return '!!!';
});

Route::get('/user/{id}', function ($id) {
    return 'user/{id} ' . $id;
});

// Route::get('/user/{surname}/{name}', function ($surname, $name) {
//     return '/user/{surname}/{name} ' . $surname .' '. $name;
// });

// Route::get('/city/{city?}', function ($city = 'Minsk') {
//     return 'city/{city?} ' . $city;
// });

Route::get('/city/{name}', function ($city) {
    return 'city/{name} ' . $city;
})->whereAlpha('name');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return '/user/{id}/{name}' . $name .' '. $id;
// })->where('id', '[0-9]+')->where('name', '[a-z]{2,}');

// Route::get('/post/{date}', function ($date) {
//     return 'date: ' . $date;
// })->where('date', '^\d{4}-\d{2}-\d{2}$');

Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return '/{year}/{month}/{day} ' . $year . ' ' . $month . ' ' . $day;
})->where('year', '\d{4}')->where('month', '\d{2}')->where('day', '\d{2}');

// Route::get('/user/{order}', function ($order) {
//     return 'user/{order}: ' . $order;
// })->where('order', '([a-z]{2,})|([0-9]{2})');

// Route::prefix('blog/post')->group(function () {
//     Route::get('/all', function () {
//         return 'all';
//     });
//     Route::get('/{id}', function ($id) {
//         return $id;
//     });
// });

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'all';
    });
    Route::get('/user/{id}', function ($id) {
        return $id;
    });
});
