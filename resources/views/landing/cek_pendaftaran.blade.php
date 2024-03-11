@extends('layouts.landing')
@section('content')
    <div class="section-body ">
        <div class="row animated bounceInUp">
            <div class="col-md-12 animated bounceInLeft">
                <form action="" method="get">
                    <div class="card">
                        <div class="card-header">
                            <h4><b>CEK PENDAFTARAN</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik"
                                        value="{{ request()->nik }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                @if (isset($santri))
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                    <b>Data ditemukan!</b>
                                </div>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>NIK</td>
                                    <td>: {{ $santri->nik }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $santri->nama }}</td>
                                </tr>
                                <tr>
                                    <td>TTL</td>
                                    <td>:  {{ $santri->tempat_lahir }}, {{ Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('DD MMMM Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:  {{ $santri->alamat_lengkap }}</td>
                                </tr>
                            </table>
                            <a target="blank" href="{{ url('formulir_pdf?nik=').$santri->nik }}" class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Formulir</a>
                            <a target="blank" href="{{ url('pernyataan_pdf?nik=').$santri->nik }}" class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Surat Pernyataan</a>
                        </div>
                    </div>
                @elseif(request()->nik != '')
                <div class="alert alert-warning alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        <b>Data tidak ditemukan!</b>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
