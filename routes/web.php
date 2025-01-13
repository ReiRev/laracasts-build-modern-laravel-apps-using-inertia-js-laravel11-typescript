<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'username' => 'JohnDoe'
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::all()->setVisible(['name', 'id'])
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging out');
});
