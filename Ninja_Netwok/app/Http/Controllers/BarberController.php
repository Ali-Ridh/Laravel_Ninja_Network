<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function index() {
        $barbers = Barber::orderBy('id', 'desc')->paginate(10);
        return view('barbers.index', ['barbers' => $barbers]);
    }
    public function create() {
        return view('barbers.create');
    }
    public function show($id) {
        $barber = Barber::findOrFail($id);
        return view('barbers.show', compact('barber'));
    }

    public function store(Request $request) {
        // Validate and store the barber data
        // For now, just return a success message
        return redirect()->route('barbers.index')->with('success', 'Barber created successfully!');
    }
}
