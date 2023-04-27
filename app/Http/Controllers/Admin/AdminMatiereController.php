<?php

namespace App\Http\Controllers\Admin;

use App\Models\Matiere;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMatiereController extends Controller

    { public function index()
    {
        $matiers = Matiere::with('enseignant')->get();
        return view('admin.matiere.index', compact('matiers'));
    }

    public function create()
    {
        $enseignants = Enseignant::all();
        return view('admin.matiere.create', compact('enseignants'));
    }

    public function store(Request $request)
    {
        $matiere = new Matiere();
        $matiere->nom = $request->nom;
        $matiere->coefficient = $request->coefficient;
        $matiere->enseignant_id = $request->enseignant_id;
        $matiere->save();

        return redirect()->route('admin.matiere.index')->with('success', 'Matière créée avec succès.');
    }

    public function edit($id)
    {
        $matiere = Matiere::find($id);
        $enseignants = Enseignant::all();
        return view('admin.matiere.edit', compact('matiere', 'enseignants'));
    }

    public function update(Request $request, $id)
    {
        $matiere = Matiere::find($id);
        $matiere->nom = $request->nom;
        $matiere->coefficient = $request->coefficient;
        $matiere->enseignant_id = $request->enseignant_id;
        $matiere->save();

        return redirect()->route('admin.matiere.index')->with('success', 'Matière mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $matiere = Matiere::find($id);
        $matiere->delete();

        return redirect()->route('admin.matiere.index')->with('success', 'Matière supprimée avec succès.');
    }
}
