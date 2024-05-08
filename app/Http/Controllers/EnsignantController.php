<?php

namespace App\Http\Controllers;

use App\Models\Ensignant;
use Illuminate\Http\Request;

class EnsignantController extends Controller
{
    public function index()
    {
        $ensignants = Ensignant::all();
        return view('ensignant.index', compact('ensignants'));
    }
}
