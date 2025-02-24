<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getUserInfo', function () {
    return "Name: Abdallah Emad, Age: 20, Job: Full Stack Developer";
});

Route::get('/getPosts', function () {
    return [
        ['name' => 'Abdallah E.', 'Job' => 'Jr. Web & Mobile Developer'],
        ['name' => 'Ahmed M.', 'Job' => 'Sr. Web Developer'],
        ['name' => 'Mohamed A.', 'Job' => 'Jr. Mobile Developer'],
        ['name' => 'Ali S.', 'Job' => 'Sr. Mobile Developer'],

    ];
});

Route::post('/hello', function(Request $request) {
    $name = $request->input("name");
    return response()->json(["message" => "Hello, $name"]);
    // return response()->json(["message" => "Hello, I'm a POST request"]);
});

Route::delete('/hello', function() {
    return response()->json(["message" => "Hello, I'm a Delete request"]);
});