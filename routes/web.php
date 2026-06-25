<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\SeminarController;
use App\Models\Seminar;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
--------------------------------------------------------------------------
Startseite
--------------------------------------------------------------------------
Wenn man die App öffnet, landet man beim Dashboard.
*/
Route::get('/', function () {
    return redirect('/dashboard');
});

/*
--------------------------------------------------------------------------
Gäste-Bereich
--------------------------------------------------------------------------
Diese Seiten dürfen nur NICHT eingeloggte User sehen.
*/
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'store']);
});

/*
--------------------------------------------------------------------------
Eingeloggter Bereich
--------------------------------------------------------------------------
Alles hier ist geschützt. Man muss eingeloggt sein.
*/
Route::middleware('auth')->group(function () {

    // Dashboard: zeigt die nächsten 3 Seminare
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'upcomingSeminars' => Seminar::whereDate('date', '>=', now())
                ->orderBy('date')
                ->take(3)
                ->get(),
        ]);
    })->name('dashboard');

    // Alle Seminare anzeigen
    Route::get('/seminare', [SeminarController::class, 'index'])
        ->name('seminare.index');

    // Formular für neues Seminar anzeigen
    Route::get('/seminare/create', [SeminarController::class, 'create'])
        ->name('seminare.create');

    // Neues Seminar speichern
    Route::post('/seminare', [SeminarController::class, 'store'])
        ->name('seminare.store');

    // Für ein Seminar anmelden
    Route::post('/seminare/{seminar}/register', function (Seminar $seminar) {
        auth()->user()->registeredSeminars()->syncWithoutDetaching([$seminar->id]);

        return back();
    })->name('seminare.register');

    // Meine angemeldeten Seminare anzeigen
    Route::get('/meine-seminare', function () {
        return Inertia::render('Seminare/MeineSeminare', [
            'seminars' => auth()->user()
                ->registeredSeminars()
                ->orderBy('date')
                ->get(),
        ]);
    })->name('seminare.mine');

    // Logout
    Route::delete('/logout', [SessionsController::class, 'destroy'])
        ->name('logout');
});
