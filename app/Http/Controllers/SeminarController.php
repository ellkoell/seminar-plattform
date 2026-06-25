<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class SeminarController extends Controller
{
    public function index()
    {
        // Rendert die Datei "Seminare/Seminare.jsx" im Pages-Ordner
        return Inertia::render('Seminare/Seminare');
    }
}
