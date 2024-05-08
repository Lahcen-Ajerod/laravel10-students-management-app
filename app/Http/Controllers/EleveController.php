<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleve.index', compact('eleves'));
    }
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'matiere_id' => 'required',
        ]);

        Eleve::create($fields);
        return 'created';
    }
}
