<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',
        [
            'greeting' => 'Greetings',
            'person' => request('person','World'),
            'tasks' => [],
        ]
    );
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact','contact');
