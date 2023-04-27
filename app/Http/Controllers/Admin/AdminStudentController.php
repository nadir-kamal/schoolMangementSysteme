<?php

namespace App\Http\Controllers\Admin;

use App\Models\Classe;
use App\Models\Filiere;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStudentController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData['students']= Student::with(['classe', 'filiere'])->orderBy('nom', 'asc')->paginate(10);
        $viewData['title']="Liste des étudiants";

        return view('admin.student.index', compact('viewData'));
    }

    public function create()
    {
        $classes = Classe::all();
        $filieres = Filiere::all();
        $viewData = [
            'title' => 'Ajouter un étudiant',
            'classes' => $classes,
            'filieres' => $filieres,
        ];
        return view('admin.student.create', compact('viewData','classes','filieres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students|max:255',
            'numero_identification' => 'required|string|unique:students|max:255',
            'classe_id' => 'required|exists:classes,id',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $student = new Student();
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->date_naissance = $request->date_naissance;
        $student->adresse = $request->adresse;
        $student->telephone = $request->telephone;
        $student->email = $request->email;
        $student->numero_identification = $request->numero_identification;
        $student->classe_id = $request->classe_id;
        $student->filiere_id = $request->filiere_id;
        $student->save();

        return redirect()->route('admin.student.index')->with('success', 'Étudiant ajouté avec succès.');
    }

    public function edit(Student $student)
    {
        $classes = Classe::all();
        $viewData = [
            'title' => 'Modifier l\'étudiant ' . $student->nom . ' ' . $student->prenom,
            'student' => $student,
            'classes' => $classes,
        ];
        return view('admin.students.edit', compact('viewData'));
    }
    
    public function update(Request $request, Student $student)
    {
        $rules = [
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'date_naissance' => 'required|date',
            'adresse' => 'required|max:255',
            'telephone' => 'required|max:20',
            'email' => 'required|email|max:255|unique:students,email,' . $student->getId(),
            'numero_identification' => 'required|max:50|unique:students,numero_identification,' . $student->getId(),
            'classe_id' => 'required|exists:classes,id',
            'filiere_id' => 'nullable|exists:filieres,id',
        ];
        $validatedData = $request->validate($rules);
    
        $student->update($validatedData);
    
        return redirect()->route('admin.student.index')->with('success', 'Les informations de l\'étudiant ont été modifiées avec succès.');
    }
    public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();
    
    return redirect()->route('admin.student.index')
                     ->with('success', 'Student deleted successfully');
}

    }
