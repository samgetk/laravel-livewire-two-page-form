<?php

use App\Livewire\SavedInformation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/saved-information/{id}', SavedInformation::Class)->name('saved-information');

