<nav class="navbar navbar-expand d-flex justify-content-between pb-3">
    <a href="{{ route('dashboard') }}" class="navbar-brand" style="padding: 5px 0px 0px 20px">PRESENSI ASISTEN DOSEN</a>
    <div id="navmenu">
        <ul class="navbar-nav" style="padding: 5px 20px 0px 0px">
            <li class="nav item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
