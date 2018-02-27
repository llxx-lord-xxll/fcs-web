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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faq');

Route::get('/theme', function () {
    return view('theme');
})->name('theme');

Route::get('/legal', function () {
    return view('legal');
})->name('legal');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/metro-hackathon', function () {
    return view('metro-hackathon');
})->name('metro-hackathon');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

Route::get('/highlights/2017', function () {
    return view('highlight17');
})->name('highlights17');

Route::get('/highlights/2016', function () {
    return view('highlight16');
})->name('highlights16');

Route::get('/venue-hku', function () {
    return view('venue-hku');
})->name('venue-hku');

Route::get('/venue-sysu', function () {
    return view('venue-sysu');
})->name('venue-sysu');

Route::get('/venue-cyberport', function () {
    return view('venue-cyberport');
})->name('venue-cyberport');

Route::get('/fcs-humen', function () {
    return view('humen_fcs');
})->name('humen_fcs');


Route::get('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();

    return $ret->returnView($request);
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();
    return $ret->submitForm($request);

});

Route::get('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    return $ret->returnView($request);
})->name('app_delegate');

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

