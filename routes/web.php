<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    })->name('inicio');
});

Fortify::loginView(function () {
    return Inertia::render('Login/Login_v1', [
        'canResetPassword' => Route::has('password.request'),
        'status' => session('status'),
    ]);
});

Fortify::registerView(function () {
    return Inertia::render('Login/Register');
});

Fortify::authenticateUsing(function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (
        $user &&
        Hash::check($request->password, $user->password)
    ) {
        return $user;
    }
});