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
    return view('home');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/article-details', function () {
    return view('article.articleDetails');
});

Route::get('/article', function () {
    return view('article.article');
});

Route::get('/article-results', function () {
    return view('article.articleResults');
});

Route::get('/event', function () {
    return view('event.event');
});

Route::get('/event-details', function () {
    return view('event.eventDetails');
});

Route::get('/form-personal-data', function () {
    return view('form.form1');
});

Route::get('/form-address-data', function () {
    return view('form.form2');
});

Route::get('/form-experience', function () {
    return view('form.form3');
});

Route::get('/form-summary', function () {
    return view('form.form4');
});

Route::get('/forum', function () {
    return view('forum.forum');
});

Route::get('/forum-details', function () {
    return view('forum.forumDetails');
});


Route::get('/pet', function () {
    return view('pet.pet');
});

Route::get('/pet-details', function () {
    return view('pet.petDetails');
});

Route::get('/pet-results', function () {
    return view('pet.petResults');
});

Route::get('/shelter-details', function () {
    return view('pet.shelterDetails');
});

Route::get('/wishlist', function () {
    return view('pet.wishlist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/terms-and-conditions', function () {
    return view('termsConditions');
});

Route::get('/terms-and-conditions', function () {
    return view('termsConditions');
});