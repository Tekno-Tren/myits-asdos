<nav class="d-flex justify-content-between mx-4">
    <div class="logo">
        <h4 class="fs-4 logo-caption fw-semibold ">PRESENSI ASISTEN DOSEN</h4>
    </div>

    <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary">Logout</button>
    </form>
</nav>
