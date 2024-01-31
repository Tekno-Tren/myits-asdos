<nav class="navbar navbar-expand d-flex justify-content-between pb-3">
    <a href="#" class="navbar-brand">PRESENSI ASISTEN DOSEN</a>
    <div id="navmenu">
        <ul class="navbar-nav">
            <li class="nav item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
