@extends('layout/master')
@section('konten')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Laporan Absen</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        @php
                            // $month = date('m');
                            $year = date('Y');
                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                            $jumlah = $daysInMonth;
                        @endphp
                        <thead>
                            <tr>
                                <th>Nama</th>
                                @for ($x = 1; $x <= $jumlah; $x++) 
                                <th>{{ $x }}</th>
                                @endfor
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($guru as $g)
                                <tr>
                                    <td>{{ $g->nama }}</td>
                                    @for ($x = 1; $x <= $jumlah; $x++) 
                                        @if(isset($absen[$g->id_user][$year.'-'.$month.'-' .$x]))
                                            {{-- @if ($absen[$g->id_user][$year.'-'.$month.'-' .$x] == 0)
                                                <td>-</td>
                                            @elseif ($absen[$g->id_user][$year.'-'.$month.'-' .$x] == 1)
                                                <td>x</td>
                                            @elseif ($absen[$g->id_user][$year.'-'.$month.'-' .$x] == 2) --}}
                                                <td>{{ $absen[$g->id_user][$year.'-'.$month.'-' .$x] }}</td>
                                            {{-- @endif --}}
                                        @else
                                         <td>-</td>
                                        @endif
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            
@endsection
