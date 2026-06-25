<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SeminarController extends Controller
{
    // Alle Seminare anzeigen
    public function index()
    {
        return Inertia::render('Seminare/Seminare', [
            'seminars' => Seminar::orderBy('date')->get(),
        ]);
    }

    // Formularseite anzeigen
    public function create()
    {
        return Inertia::render('Seminare/Create');
    }

    // Neues Seminar speichern
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'time' => ['nullable'],
            'location' => ['nullable', 'string', 'max:255'],
            'max_participants' => ['required', 'integer', 'min:1'],
        ]);

        $data['user_id'] = auth()->id();

        Seminar::create($data);

        return redirect('/seminare');
    }
}
