@extends('layouts.admin');
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Calon Santri</h1>
        </div>

        <div class="section-body">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="get" class="ml-3 mb-2">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                </div>
                            </form>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="" class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Timestamp</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>TTL</th>
                                                <th>Sekolah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($santri as $k=>$item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->jenis_kelamin }}</td>
                                                <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                                                <td></td>
                                                <td>
                                                    <a href="{{ url('formulir_pdf', $item->nik) }}" class="btn btn-warning btn-sm"> <i class="fa fa-print"></i>&nbsp; Formulir</a>
                                                    <a href="{{ url('pernyataan_pdf', $item->nik) }}" class="btn btn-warning btn-sm"> <i class="fa fa-print"></i>&nbsp; Pernyatan</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
