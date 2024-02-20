<!-- Main Sidebar Container -->
<div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">ADMIN</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Delila</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class='bx bxs-bug'></i>
                            <p>
                                Administrasi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/dataasdos" class="nav-link active">
                                    <i class='bx bxs-folder-minus'></i>
                                    <p>Data Asdos</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/jadwal" class="nav-link active">
                            <i class='bx bxs-calendar'></i>
                            <p>
                                Jadwal Kelas
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link active">
                            <i class='bx bxs-folder'></i>
                            <p>
                                Rekap Absen
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class='bx bxs-bug'></i>
                            <p>
                                Rekap Absen
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/absensi" class="nav-link active">
                                    <i class='bx bxs-folder-minus'></i>
                                    <p>Absensi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/bukti" class="nav-link active">
                                    <i class='bx bxs-folder-minus'></i>
                                    <p>Bukti Kehadiran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/materi" class="nav-link active">
                                    <i class='bx bxs-folder-minus'></i>
                                    <p>Berita Acara</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/rekapnilai" class="nav-link active">
                            <i class='bx bx-file'></i>
                            <p>
                                Rekap Nilai
                            </p>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
