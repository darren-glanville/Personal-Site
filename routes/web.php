<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages;

Route::get('/', Pages\Home::class);
Route::get('/projects', Pages\Projects::class);
Route::get('/about', Pages\About::class);
Route::get('/contact', Pages\Contact::class);
