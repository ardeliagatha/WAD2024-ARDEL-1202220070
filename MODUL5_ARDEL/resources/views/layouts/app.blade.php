<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Akademik - Universitas EAD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white p-3 shadow-sm d-flex align-items-center sticky-top">
        <h1 class="fs-4 m-0 flex-grow-1">Universitas EAD</h1>
        <nav>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
            <a href="{{ route('dosens.index') }}" class="btn btn-outline-light me-2">Dosen</a>
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-outline-light">Mahasiswa</a>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 bg-light border-end p-0 min-vh-100">
                @include('layouts.sidebar')
            </aside>

            <!-- Main Content -->
            <main class="col p-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
