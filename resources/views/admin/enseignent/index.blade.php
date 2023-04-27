@extends('layouts.app')

@section('title', $viewData["title"])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-dark text-white text-center text-capitalize">
            <h1 class="card-title">{{$viewData['title']}}</h1>
        </div>
    </div>
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Job</th>
                <th>Department</th>
                <th>Marital Status</th>
                <th>Fattening Date</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viewData['employees'] as $employee)
            <tr>
                <td>{{ $employee->getId() }}</td>
                <td>{{ $employee->getFirstName() }}</td>
                <td>{{ $employee->getLastName() }}</td>
                <td>{{ $employee->getGender() }}</td>
                <td>{{ $employee->getAge() }}</td>

                <td>{{ $employee->getEmail() }}</td>
                <td>{{ $employee->getPhone() }}</td>
                <td>{{ $employee->getAddress() }}</td>
                <td>{{ $employee->getJob() }}</td>
                <td>{{ $employee->department->getName() }}</td>
                <td>{{ $employee->getMartialStatus()}}</td>
                <td>{{ $employee->getFatteningDate() }}</td>
                <td>{{ $employee->getSalary() }}</td>
                <td>
                    <div class="d-flex flex-row">
                        <a href="{{ route('admin.employees.edit', $employee->getId()) }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="{{ route('admin.employees.destroy', $employee->getId()) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.employees.create') }}" class="btn btn-primary">Create Employee</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable();
    });
</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

@endsection
