<!-- Navbar -->
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/dashboard" class="nav-link">Home</a>
                </li>
            </ul>
            <form class="d-flex justify-content-between mx-4" action="{{ route('logout-admin') }}" method="POST">
            @csrf

            <button class="btn btn-primary">Logout</button>
    </form>
        </nav>
    </div>
</body>
<!-- /.navbar -->
