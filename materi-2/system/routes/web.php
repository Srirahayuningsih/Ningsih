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
    return view('welcome');
});

Route::get('/Informatika', function() {
	return view("Informatika");
});

Route::get('/Agroindustri', function() {
	return view("Agroindustri");
});

Route::get('/Elektro', function() {
	return view("Elektro");
});

Route::get('/Sipil', function() {
	return view("Sipil");
});

Route::get('/contact', function() {
	return view("contact");
});

Route::get('/register', function() {
	return view("register");
});

Route::get('/about', function() {
	return view("About");
});

Route::get('/home', function() {
	return view("home");
});

Route::get('/detail', function() {
	return view("detail");
});

Route::get('/template', function() {
	return view("template.base");
});

Route::get('/beranda', function() {
	return view("beranda");
});

Route::get('/produk', function() {
	return view("produk");
});

Route::get('/kategori', function() {
	return view("kategori");
});

Route::get('/login', function() {
	return view("login");
});