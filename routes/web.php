<?php

use Illuminate\Support\Facades\Route;
use App\Models\Green;
use App\Models\Garden;
use App\Models\User;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/greens', function () {
    return view('greens', [
        'greens' => Green::all()
    ]);
});

Route::get('/gardens', function () {
    return view('gardens', [
        'gardens' => Garden::all()
    ]);
});

Route::get('/users', function () {
    return view('users', [
        'users' => User::all()
    ]);
});

Route::get('/user/{id}', function ($id) {

    $user = User::find($id);
    return view('user', ['user' => $user]);
});

Route::get('/green/{id}', function ($id) {

    $green = Green::find($id);
    return view('green', ['green' => $green]);
});

Route::get('/garden/{id}', function ($id) {

    $garden = Garden::find($id);
    return view('garden', ['garden' => $garden]);
});
