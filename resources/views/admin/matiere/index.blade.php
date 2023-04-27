@extends('layouts.admin')
@section('title', 'Matiers')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white text-center text-capitalize">
                    {{-- <h1 class="card-title">{{$viewData['title']}}</h1> --}}
                </div>
                </div>
            
                    <div class="float-right">
                        <a href="{{ route('admin.matiere.create') }}" class="btn btn-primary">Add matiere</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Coefficient</th>
                                    <th scope="col">Enseignant</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($matiers as $matiere)
                                    <tr>
                                        <th scope="row">{{ $matiere->id }}</th>
                                        <td>{{ $matiere->nom }}</td>
                                        <td>{{ $matiere->coefficient }}</td>
                                        <td>{{ $matiere->enseignant->nom }} {{ $matiere->enseignant->prenom }}</td>
                                        <td>
                                            <a href="{{ route('admin.matiere.edit', $matiere->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.matiere.destroy', $matiere->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <div class="d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
