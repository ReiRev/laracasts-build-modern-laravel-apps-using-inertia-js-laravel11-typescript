<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home', [
            'username' => 'JohnDoe'
        ]);
    });

    Route::get('/users', function () {
        return Inertia::render(
            'Users/Index',
            [
                'users' => User::when(
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
                            'can' => [
                                'edit' => Auth::user()->can('edit', $user)
                            ]
                        ]
                    ),
                'filters' => Request::only(['search']),
                'can' => [
                    'createUser' => Auth::user()->can('create', User::class)
                ]
            ],
        );
    });

    Route::get('/users/{user}', function (User $user) {
        return Inertia::render('Users/Show', [
            'user' => $user->only(['id', 'name', 'email', 'created_at']),
        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->can('create', App\Models\User::class);

    Route::post('/users', function () {
        $attributes = Request::validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required']
        ]);

        User::create($attributes);

        return redirect('/users');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });
});
