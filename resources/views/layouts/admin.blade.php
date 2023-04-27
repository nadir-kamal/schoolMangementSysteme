<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
crossorigin="anonymous" />
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
<title>@yield('title', 'Admin - School mangement')</title>
</head>
<body>
<div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-white bg-dark">
<a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
<span class="fs-4">Admin Panel</span>
</a>
<hr />
<ul class="nav flex-column">
<li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
<<<<<<< HEAD
<li><a href="{{route('admin.student.index')}}" class="nav-link text-white">- Admin - Students</a></li>
<li><a href="{{route('admin.matiere.index')}}" class="nav-link text-white">- Admin - Matiere</a></li>
=======
<li><a href="{{route('admin.employees.index')}}" class="nav-link text-white">- Admin - Employes</a></li>
<li><a href="{{route('admin.department.index')}}" class="nav-link text-white">- Admin - Departments</a></li>
<li><a href="{{route('admin.projects.index')}}" class="nav-link text-white">- Admin - Projects</a></li>
<li><a href="{{route('admin.tasks.index')}}" class="nav-link text-white">- Admin - Tasks</a></li>
>>>>>>> b27edfe5c9baa659bd9a7a328d90e1e58d21d4f3
<li>
<a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
</li>
</ul>
</div>
<!-- sidebar -->
<div class="col content-grey">
<nav class="p-3 shadow text-end">
<span class="profile-font">Admin</span>
<img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
</nav>
<div class="g-0 m-5">
@yield('content')
</div>
</div>
</div>
<!-- footer -->
<div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/">
Nadir kamal</a>
</small>
</div>
</div>
<!-- footer --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>