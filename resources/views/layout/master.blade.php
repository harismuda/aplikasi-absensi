<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini" data-scrollbar-auto-hide="n">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('dashbor') }}" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('AdminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
                        <li class="nav-item">
                            <a href="{{ url('/dashbor') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Table</li>
                        <li class="nav-item">
                            <a href="{{ url('/guru') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Guru
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/siswa') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Absen</li>
                        <li class="nav-item">
                            <a href="{{ url('/absen/guru') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Guru
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/absen/siswa') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/laporan') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Register User</li>
                        <li class="nav-item">
                            <a href="{{ url('/user') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Keluar</li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Pesan Error -->
                    @if (Session::has('success'))
                        <div class="pt-3">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif


                    @if ($errors->any())
                        <div class="pt-3">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <!-- Tutup -->
                    @yield('konten')
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>APP ABSEN</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE') }}/dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
