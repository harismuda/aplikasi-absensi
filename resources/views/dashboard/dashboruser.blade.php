@extends('layout/masteruser')
@section('konten')
    <main id="main">
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <header id="header" class="d-flex flex-column justify-content-center">
            <nav id="navbar" class="navbar nav-menu">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                    </li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Absen</span></a>
                    </li>
                    <li><a href="{{ url('logout') }}" class="nav-link scrollto"> <span>Logout</span></a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id="hero" class="d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                @if (Session::has('success'))
                        <div class="pt-3">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif

                    @if (Session::has('lambat'))
                        <div class="pt-3">
                            <div class="alert alert-danger">
                                {{ Session::get('lambat') }}
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
                <h1>{{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->role }}</p>
                @if($jumlah == 0)
                    <a href="{{ url('absen') }}">
                        <button class="btn btn-primary">
                            Masuk 
                        </button>
                    </a>
                @elseif($jumlah == 1)
                    <a href="{{ url('absen') }}">
                        <button class="btn btn-danger">
                            Keluar    
                        </button>
                    </a>
                @else
                    <a href="#">
                        <button class="btn btn-success">
                            Selesai 
                        </button>
                    </a>                    
                @endif
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Absen</h2>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($model as $key=>$value)
                                <tr>
                                    <td>{{ $value->waktu }}</td>
                                    <td>{{ $value->tanggal }}</td>
                                    <td>{{ $value->jenis }}</td>
                                    <td>{{ $value->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection