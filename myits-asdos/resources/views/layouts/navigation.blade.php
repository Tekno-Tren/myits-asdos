{{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #bacfe6;">
    <a href="#" class="navbar-brand" style="color: black" >PRESENSI ASISTEN DOSEN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav> --}}


<body>
    <nav>
        <div class="logo" text-bold>
            <h4>PRESENSI ASISTEN DOSEN</h4>
        </div>

        <ul>
            <li>
            <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Logout</button>
                </form>
                </li>
        </ul>
    </nav>
</body>
