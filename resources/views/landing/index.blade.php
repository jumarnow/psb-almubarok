@extends('layouts.landing')
@section('content')

<div class="section-header">
    <h1>PENGISIAN FORMULIR ONLINE</h1>
    <div class="section-header-breadcrumb">
        <a href="{{ url('formulir') }}" id="" data-id="" type="button"
            class="btn btn-danger animated infinite pulse delay-2s">ISI FORMULIR</a> &nbsp;
        <a href="https://almubarokmranggen.id" data-id="" type="button"
            class="btn btn-primary">MASUK
            KE WEB</a>
    </div>
</div>

<div class="section-body ">
    <div id='isi_load'></div>
    <div class="row animated bounceInUp">

        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  active show" id="home-tab4"
                                        data-toggle="tab" href="#home4" role="tab"
                                        aria-controls="home" aria-selected="false">Informasi
                                        Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab4" data-toggle="tab"
                                        href="#profile4" role="tab" aria-controls="profile"
                                        aria-selected="false">Syarat Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab4" data-toggle="tab"
                                        href="#contact4" role="tab" aria-controls="contact"
                                        aria-selected="true">Kontak Pendaftaran</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade active show" id="home4"
                                    role="tabpanel" aria-labelledby="home-tab4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="activities">
                                                <div class="activity">
                                                    <div
                                                        class="activity-icon bg-primary text-white shadow-primary">
                                                        1
                                                    </div>
                                                    <div class="activity-detail">
                                                        <p>Sowan ke pengasuh pesantren dengan orang tua.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="activities">
                                                <div class="activity">
                                                    <div
                                                        class="activity-icon bg-primary text-white shadow-primary">
                                                        2
                                                    </div>
                                                    <div class="activity-detail">
                                                        <p>Membawa fotokopi KK 1 lembar dan fotokopi KTP orang tua</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activities">
                                                <div class="activity">
                                                    <div
                                                        class="activity-icon bg-primary text-white shadow-primary">
                                                        3
                                                    </div>
                                                    <div class="activity-detail">
                                                        <p>Mengisi formulir pendaftaran online</p>
                                                        <a href="{{ url('formulir') }}" type="button" class="btn btn-danger">Isi Formulir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activities">
                                                <div class="activity">
                                                    <div
                                                        class="activity-icon bg-primary text-white shadow-primary">
                                                        4
                                                    </div>
                                                    <div class="activity-detail">
                                                        <p>Menandatangani surat peryataan santri </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activities">
                                                <div class="activity">
                                                    <div
                                                        class="activity-icon bg-primary text-white shadow-primary">
                                                        5
                                                    </div>
                                                    <div class="activity-detail">
                                                        <p>Melunasi administrasi pembayaran </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile4" role="tabpanel"
                                    aria-labelledby="profile-tab4">
                                    <p>SYARAT PENDAFTARAN</p>
                                    <ul>
                                        <li>Fotokopi KK 1 Lembar dan KTP Orang Tua 1 Lembar</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade " id="contact4" role="tabpanel"
                                    aria-labelledby="contact-tab4">
                                    <div class=" author-box">
                                        <div class="card-body">
                                            <ul
                                                class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                                <li class="media">
                                                    <img alt="image"
                                                        class="mr-3 rounded-circle" width="50"
                                                        src="{{ asset('assets') }}/img/avatar/avatar-1.png">
                                                    <div class="media-body">
                                                        <div class="media-title">Kantor Al Mubarok Putra</div>
                                                        <div class="text-job text-muted"><a
                                                                href="https://api.whatsapp.com/send?phone=+6285701885618&text=Assalamualaikum%2525252C%25252Bmohon%25252Binfo%25252Bpendaftaran">
                                                                6285701885618</a></div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img alt="image"
                                                        class="mr-3 rounded-circle" width="50"
                                                        src="{{ asset('assets') }}/img/avatar/avatar-1.png">
                                                    <div class="media-body">
                                                        <div class="media-title">Kantor Al Mubarok Putri</div>
                                                        <div class="text-job text-muted"><a
                                                                href="https://api.whatsapp.com/send?phone=+6285799840007&text=Assalamualaikum%2525252C%25252Bmohon%25252Binfo%25252Bpendaftaran">
                                                                6285799840007</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row animated bounceIn">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Statistik Pendaftar</h4>
                    <div class="card-header-action">

                    </div>
                </div>
                <div class="card-body ">
                    {{-- <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <i class="fas fa-th"></i>
                                    </th>
                                    <th>NPSN</th>
                                    <th>Nama Sekolah</th>

                                    <th>Pendaftar</th>
                                </tr>
                            </thead>
                            <tbody class="ui-sortable">
                                <tr>
                                    <td>
                                        <div class="sort-handler ui-sortable-handle">
                                            <i class="fas fa-th"></i>
                                        </div>
                                    </td>
                                    <td>lainnya</td>
                                    <td></td>

                                    <td>
                                        <div class="badge badge-success">2</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="sort-handler ui-sortable-handle">
                                            <i class="fas fa-th"></i>
                                        </div>
                                    </td>
                                    <td>lainnya</td>
                                    <td>MI ARROHMAH</td>

                                    <td>
                                        <div class="badge badge-success">1</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="sort-handler ui-sortable-handle">
                                            <i class="fas fa-th"></i>
                                        </div>
                                    </td>
                                    <td>lainnya</td>
                                    <td>MI AS-SALAAM</td>

                                    <td>
                                        <div class="badge badge-success">1</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
