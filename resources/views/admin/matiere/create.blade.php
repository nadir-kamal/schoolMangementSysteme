@extends('layouts.admin')

@section('title', 'Create Student')

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
                            <form action="{{ route('admin.matiere.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nom">Nom :</label>
                                    <input type="text" id="nom" name="nom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="coefficient">Coefficient :</label>
                                    <input type="number" id="coefficient" name="coefficient" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="enseignant_id">Enseignant :</label>
                                    <select id="enseignant_id" name="enseignant_id" class="form-control">
                                        @foreach ($enseignants as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom }} {{ $enseignant->prenom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
