<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::post('/get_token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

Route::get('/login', function () {
    return 'need login';
})->name('login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/book/add', '\App\Http\Controllers\BookController@add');
Route::middleware('auth:sanctum')->get('/book/all', '\App\Http\Controllers\BookController@all');
Route::middleware('auth:sanctum')->get('/book/delete/{id}', '\App\Http\Controllers\BookController@delete');
Route::middleware('auth:sanctum')->get('/book/change_availabilty/{id}', '\App\Http\Controllers\BookController@changeAvailabilty');
