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
                        <div class="card-body p-0">
                            <form action="" method="get" class="form-inline">
                                <select name="year" class="form-control mr-2" id="">
                                    @foreach (getYears() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                    <input type="text" class="form-control" name="search" value="{{ request()->search }}">
                                    <button class="btn btn-info ml-2"><i class="fa fa-search"></i></button>
                                </div>
                            </form>

                            {{-- <div class="card-body p-0"> --}}
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
                                                <th>Alamat</th>
                                                <th>Dokumen</th>
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
                                                <td>{{ $item->tempat_lahir }}, {{ Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('DD MMMM Y') }}</td>
                                                <td>{{ $item->alamat_lengkap }}</td>
                                                <td>
                                                    <a target="blank" href="{{ url('formulir_pdf?nik=').$item->nik }}" class="btn btn-warning btn-sm"> <i class="fa fa-print"></i>&nbsp; Formulir</a>
                                                    <a target="blank" href="{{ url('pernyataan_pdf?nik=').$item->nik }}" class="btn btn-warning btn-sm"> <i class="fa fa-print"></i>&nbsp; Pernyatan</a>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm btn-delete" data-url="{{ url('admin/delete-formulir',$item->id) }}">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                    {{ $santri->appends(request()->all())->links('pagination::bootstrap-4') }}
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
