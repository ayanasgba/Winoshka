<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about_us', function () {
    return view('about');
})->name('about');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/candidates', function () {
    return view('candidates');
})->name('candidates');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/get_info_of_student', function () {
//     return dd(Request::all());
// })->name('info-form');
    
Route::post('/get_info_of_student', 'App\Http\Controllers\FormController@submit')->name('info-form');

Route::get('/candidates/all' ,'App\Http\Controllers\FormController@allData' )->name('candidates-data' );

Route::get('/candidates/all/{id}', 'App\Http\Controllers\FormController@detailMessage')->name('candidates-detail-one');

Route::get('/candidates/all/{id}/update','App\Http\Controllers\FormController@updateMessage')->name('candidates-update');

Route::post('/candidates/all/{id}/update','App\Http\Controllers\FormController@updateMessageSubmit')->name('candidates-update-submit');

Route::get('/candidates/all/{id}/delete','App\Http\Controllers\FormController@deleteMessage')->name('candidates-delete'); 