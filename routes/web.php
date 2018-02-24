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

Route::get('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();

    return $ret->returnView($request);
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();
    $ret->submitForm($request);
    return $ret->returnView($request);
});

Route::get('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    $ret->withReq($request);
    return $ret->returnView();
});

Route::get('/applications/chapter-recruitment', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterReqruitmentCTLR();
    $ret->withReq($request);
    return $ret->returnView();
});

Route::get('/applications/chapter', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterApplicationCTLR();
    $ret->withReq($request);
    return $ret->returnView();
});

