@extends('layouts.admin');
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Hai!, Ilham Ardiyansyah</h1>
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        Silahkan lengkapi data diri anda klik tombol ini untuk isi formulir <a class="btn btn-success"
            href="?pg=formulir" role="button">Isi Formulir</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="activities">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
