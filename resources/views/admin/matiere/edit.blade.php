@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card">
    <div class="card-header bg-dark text-white text-center text-capitalize">
        <h1 class="card-title">{{$viewData['title']}}</h1>
    </div>
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    @endif



    <form action="{{ route('admin.matiere.update', $matiere->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{ $matiere->nom }}">
        </div>
        <div class="form-group">
            <label for="coefficient">Coefficient :</label>
            <input type="number" id="coefficient" name="coefficient" class="form-control" value="{{ $matiere->coefficient }}">
        </div>
        <div class="form-group">
            <label for="enseignant_id">Enseignant :</label>
            <select id="enseignant_id" name="enseignant_id" class="form-control">
                @foreach ($enseignants as $enseignant)
                    <option value="{{ $enseignant->id }}" {{ $matiere->enseignant_id == $enseignant->id ? 'selected' : '' }}>
                        {{ $enseignant->nom }} {{ $enseignant->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Update">
    </form>
@endsection
