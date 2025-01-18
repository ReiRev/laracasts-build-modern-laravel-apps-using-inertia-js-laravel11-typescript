<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'username' => 'JohnDoe'
    ]);
});

Route::get('/users', function () {
    return Inertia::render(
        'Users/Index',
        [
            'users' => User::query()
                ->when(
                    Request::input('search'),
                    function ($query, $search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    }
                )
                ->paginate(10)
                ->withQueryString()
                ->through(
                    fn($user) => [
                        'id' => $user->id,
                        'name' => $user->name,
                    ]
                ),
            'filters' => Request::only(['search']),
        ],
    );
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function () {
    $attributes = Request::validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    User::create($attributes);

    return redirect('/users');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging out');
});
