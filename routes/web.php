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
    return view('index');
});

Route::get('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();

    return $ret->returnView($request);
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();
    return $ret->submitForm($request);

});

Route::get('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    return $ret->returnView($request);
});

Route::post('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    return $ret->submitForm($request);

});

Route::get('/applications/chapter-recruitment', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterReqruitmentCTLR();
    return $ret->returnView($request);
});

Route::get('/applications/chapter', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterApplicationCTLR();
    return $ret->returnView($request);
});

Route::post('/applications/chapter', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterApplicationCTLR();
    return $ret->submitForm($request);

});

