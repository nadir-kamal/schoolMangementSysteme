@extends('layouts.admin')
@section('title', $viewData["title"])

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif<div class="card">
    <div class="card-header bg-dark text-white text-center text-capitalize">
        <h1 class="card-title">{{$viewData['title']}}</h1>
    </div>
    </div>

<form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" " enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="firstName" value="{{ $employee->firstName }}" required>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="lastName" value="{{ $employee->lastName }}" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value={{null}}>Select Gender</option>

            <option value="Male" {{ $employee->gender === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $employee->gender === 'Female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>
    <div class="form-group">
        <label for="DateOfBirth">Date Of Birth:</label>
        <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="{{ $employee->DateOfBirth }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}" required>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <input class="form-control" type="file" name="image">
                </div>
            </div>
        </div>
        
        <div class="col">
            &nbsp;
        </div>
        
    </div>
    <div class="form-group">
        <label for="job">Job:</label>
        <input type="text" class="form-control" id="job" name="job" value="{{ $employee->job }}" required>
    </div>
    <div class="col-lg-10 col-md-6 col-sm-12">  
        <select name="department" id="department">
            <option value="">Select department</option>
            @foreach ($viewData['departments'] as $department)
                <option value="{{ $department->getId() }}" {{ $employee->getDepartmentId() == $department->getId() ? "selected" : "" }}>{{ $department->getName() }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="martialStatus">Martial Status:</label>
        <select class="form-control" id="martial_status" name="martialStatus" required>
            <option value={{null}}>Select Martial Status </option>
            <option value="Single" {{ $employee->martialStatus === 'Single' ? 'selected' : '' }}>Single</option>
            <option value="Married" {{ $employee->martialStatus === 'Married' ? 'selected' : '' }}>Married</option>
            <option value="Divorced" {{ $employee->martialStatus === 'Divorced' ? 'selected' : '' }}>Divorced</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fattening_date">Fattening Date:</label>
        <input type="date" class="form-control" id="fattening_date" name="fatteningDate" value="{{ $employee->fatteningDate}}"required>
    </div>
    <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="number" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}"required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection