<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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


Route::get('/test', function () {
    User::create([
        'name' => 'Admin',
        'email' => 'admin@test.com',
        'password' => Hash::make('admin')
    ]);

    User::create([
        'name' => 'User',
        'email' => 'user@test.com',
        'password' => Hash::make('user')
    ]);
    return 'ok';
});
