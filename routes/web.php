<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CountriesController;
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

// Route::get('/post/',['App\\Http\\Controllers\\PostController', 'show']);
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/user/{id}', function ($id) {
    return 'user/{id} ' . $id;
});
Route::get('/zxc', [CommentsController::class, 'show']);

Route::get('/qwe123123qwe', [CitiesController::class, 'show']);

Route::get('/qwe123123', [CountriesController::class, 'show']);

Route::get('/qwe123', [ProfilesController::class, 'show']);

Route::get('/qwerty123', [RolesController::class, 'show']);

Route::get('/qwerty', [UsersController::class, 'show']);

Route::get('/user/{name}/{age}/{salary}', [UserController::class, 'show']);

Route::get('/user/{name}/{surname}', [UserController::class, 'test']);

Route::get('/user/1/{name}/{surname}', [UserController::class, 'test1']);

Route::get('/user/2/{name}/{surname}', [UserController::class, 'test2']);

Route::get('/user/all', [UserController::class, 'all']); 

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

Route::get('/collections/', [CollectionController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'all';
    });
    Route::get('/user/{id}', function ($id) {
        return $id;
    });
});
