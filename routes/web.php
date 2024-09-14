<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages;

Route::get('/', Pages\Home::class)
    ->name('home');

Route::get('/projects', Pages\Projects::class)
    ->name('projects');

Route::get('/about', Pages\About::class)
    ->name('about');

Route::get('/contact', Pages\Contact::class)
    ->name('contact');
