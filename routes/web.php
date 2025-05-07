<?php

use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/service', function () {
        return view('service');
    })->name('service');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');



    // Pages routes
    Route::get('/404', function () {
        return view('pages.404');
    })->name('404');

    Route::get('/features', function () {
        return view('pages.features');
    })->name('features');

    Route::get('/quote', function () {
        return view('pages.quote');
    })->name('quote');

    Route::get('/team', function () {
        return view('pages.team');
    })->name('team');

    Route::get('/testimonial', function () {
        return view('pages.testimonial');
    })->name('testimonial');
    // dst, sesuai file yang kamu mau pakai


