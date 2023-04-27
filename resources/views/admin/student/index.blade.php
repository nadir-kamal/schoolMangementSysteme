@extends('layouts.admin')

@section('title', 'Liste des étudiants')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-center text-capitalize">
                    <h1 class="card-title">{{ $viewData['title'] }}</h1>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="float-right">
                        <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add student</a>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom et prénom</th>
                                <th>Date de naissance</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Classe</th>
                                <th>Filière</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['students'] as $student)
                            <tr>
                                <td>{{ $student->nom }} {{ $student->prenom }}</td>
                                <td>{{ $student->date_naissance->format('d/m/Y') }}</td>
                                <td>{{ $student->adresse }}</td>
                                <td>{{ $student->telephone }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->classe->libelle }}</td>
                                <td>{{ $student->filiere->libelle }}</td>
                                <td>
                                    <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier</a>
                                    <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant?')"><i class="fa fa-trash"></i> Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                       
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
