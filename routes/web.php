<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Jeffrey Way',
        'frameworks' => [
            'Laravel',
            'Vue',
            'Inertia'
        ]
    ]);
});

Route::get('/users', function () {
    sleep(2);
    return Inertia::render('Users');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
