<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Universitas EAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('dashboard')) active @endif" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('dosens.index')) active @endif" href="{{ route('dosens.index') }}">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('mahasiswas.index')) active @endif" href="{{ route('mahasiswas.index') }}">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
