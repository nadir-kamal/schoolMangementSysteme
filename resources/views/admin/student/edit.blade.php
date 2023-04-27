@extends('layouts.admin')

@section('title', 'Edit Student')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-center text-capitalize">
                    <h1 class="card-title">{{ $viewData['title'] }}</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('admin.student.update', $student->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nom">Nom:</label>
                                    <input type="text" id="nom" name="nom" class="form-control"
                                        value="{{ $student->nom }}">
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prénom:</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control"
                                        value="{{ $student->prenom }}">
                                </div>
                                <div class="form-group">
                                    <label for="date_naissance">Date de naissance:</label>
                                    <input type="date" id="date_naissance" name="date_naissance" class="form-control"
                                        value="{{ $student->date_naissance }}">
                                </div>
                                <div class="form-group">
                                    <label for="adresse">Adresse:</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control"
                                        value="{{ $student->adresse }}">
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Téléphone:</label>
                                    <input type="text" id="telephone" name="telephone" class="form-control"
                                        value="{{ $student->telephone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ $student->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="numero_identification">Numéro d'identification:</label>
                                    <input type="text" id="numero_identification" name="numero_identification"
                                        class="form-control" value="{{ $student->numero_identification }}">
                                </div>
                                <div class="form-group">
                                    <label for="classe_id">Classe:</label>
                                    <select id="classe_id" name="classe_id" class="form-control">
                                        @foreach ($classes as $classe)
                                            <option value="{{ $classe->id }}"
                                                {{ $student->classe_id == $classe->id ? 'selected' : '' }}>
                                                {{ $classe->libelle }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="filiere_id">Filière:</label>
                                    <select id="filiere_id" name="filiere_id" class="form-control">
                                        @foreach ($filieres as $filiere)
                                            <option value="{{ $filiere->id }}"{{ $student->filiere_id == $filiere->id ? 'selected' : '' }}>{{ $filiere->libelle }}</option>
                                        @endforeach
                                    </select>
                                    <input type="submit"class="btn btn-success" value="Update">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

