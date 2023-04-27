@extends('layouts.admin')
@section('title', $viewData["title"])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark text-white text-center text-capitalize">
            <h1 class="card-title">{{$viewData['title']}}</h1>
        </div>
        </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

 <form method="POST" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="lastName" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value={{null}}>Select Gender</option>

                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="DateOfBirth">Date Of Birth:</label>
            <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth"  required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
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
            <input type="text" class="form-control" id="job" name="job" required>
        </div>
        <div class="col-lg-10 col-md-6 col-sm-12">  

        <select name="department" id="department">
            <option value="">Select department</option>
            @foreach ($viewData['departments'] as $department)
                <option value="{{ $department->getId() }}">{{ $department->getName() }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="martialStatus">Martial Status:</label>
            <select class="form-control" id="martial_status" name="martialStatus" required>
                <option value={{null}}>Select Martial Status </option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fattening_date">Fattening Date:</label>
            <input type="date" class="form-control" id="fattening_date" name="fatteningDate" required>
        </div> 
        
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
