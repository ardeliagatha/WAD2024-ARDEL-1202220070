<div class="accordion" id="sidebarMenu">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingDashboard">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="true">
                Dashboard
            </button>
        </h2>
        <div id="collapseDashboard" class="accordion-collapse collapse show">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ route('dashboard') }}" class="text-decoration-none">Dashboard Utama</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingDosen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDosen">
                Manajemen Dosen
            </button>
        </h2>
        <div id="collapseDosen" class="accordion-collapse collapse">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ route('dosens.index') }}" class="text-decoration-none">Daftar Dosen</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('dosens.create') }}" class="text-decoration-none">Tambah Dosen</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingMahasiswa">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMahasiswa">
                Manajemen Mahasiswa
            </button>
        </h2>
        <div id="collapseMahasiswa" class="accordion-collapse collapse">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ route('mahasiswas.index') }}" class="text-decoration-none">Daftar Mahasiswa</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('mahasiswas.create') }}" class="text-decoration-none">Tambah Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</div>
