@extends('layouts.landing')
@section('content')
    <div class="section-body ">
        <div class="row animated bounceInUp">
            <div class="col-md-8 animated bounceInLeft">
                <form action="{{ url('formulir/store') }}" method="post" id="">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>DATA DIRI</strong></h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">NAMA LENGKAP*</label>
                                <input type="text" class="form-control" name="nama" placeholder="" autocomplete="off"
                                    required="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">NIK (Nomor Induk Keluarga)*</label>
                                    <input type="number" maxlength="30" class="form-control" name="nik" placeholder=""
                                        autocomplete="off" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">NISN (Nomor Induk Siswa Nasional)</label>
                                    <input type="number" maxlength="30" class="form-control" name="nisn" placeholder=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">JENIS KELAMIN*</label>
                                <input required type="radio" name="jenis_kelamin" value="Laki-laki" id="lk"> <label
                                    for="lk">Laki-laki</label>
                                <input required type="radio" name="jenis_kelamin" value="Perempuan" id="pr"> <label
                                    for="pr">Perempuan</label>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempat_lahir">TEMPAT LAHIR*</label>
                                    <input type="text" class="form-control" name="tempat_lahir" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal_lahir">TANGGAL LAHIR*</label>
                                    <input type="text" class="form-control datepicker" name="tanggal_lahir"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">AGAMA*</label>
                                    <select name="agama" class="form-control" id="" required>
                                        @foreach (listAgama() as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">CITA-CITA</label>
                                    <input type="text" class="form-control" name="cita_cita" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ANAK KE*</label>
                                    <input type="number" class="form-control" name="anak_ke" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">JUMLAH SAUDARA*</label>
                                    <input type="number" class="form-control" name="jumlah_saudara" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">NO HANDPHONE</label>
                                    <input type="number" class="form-control" name="no_hp" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">EMAIL</label>
                                    <input type="email" class="form-control" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">YANG MEMBIAYAI SEKOLAH</label>
                                    <select name="yg_membiayai" class="form-control" id="">
                                        <option value="Orang Tua">Orang Tua</option>
                                        <option value="Wali">Wali</option>
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">KEBUTUHAN KHUSUS</label>
                                    <select name="kebutuhan_khusus" class="form-control" id="">
                                        @foreach (listKebutuhanKhusus() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">KEBUTUHAN DISABILITAS</label>
                                    <select name="kebutuhan_disabilitas" class="form-control" id="">
                                        @foreach (listDisabilitas() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>DATA ALAMAT</strong></h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">PROVINSI*</label>
                                    <select name="provinsi" id="provinsi" class="form-control select2" required>
                                        <option value="">PILIH PROVINSI</option>
                                        @foreach (getProvinsi() as $item)
                                        <option value="{{ $item['id'] }},{{ $item['name'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">KEBUPATEN/KOTA*</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control select2" required>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">KECAMATAN*</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control select2" required>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">DESA/KELURAHAN*</label>
                                    <input type="text" class="form-control" name="kelurahan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">ALAMAT LENGKAP*</label>
                                <textarea name="alamat_lengkap" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4><strong>DATA ORANG TUA</strong></h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">NAMA AYAH*</label>
                                    <input type="text" class="form-control" name="nama_ayah" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">STATUS AYAH*</label>
                                    <select name="status_ayah" class="form-control" id="" required>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Tidak Diketahui">Tidak Diketahui</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempat_lahir">TEMPAT LAHIR*</label>
                                    <input type="text" class="form-control" name="tempat_lahir_ayah" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal_lahir">TANGGAL LAHIR*</label>
                                    <input type="text" class="form-control datepicker" name="tanggal_lahir_ayah"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">PENDIDIKAN TERAKHIR*</label>
                                    <select name="pendidikan_ayah" class="form-control" id="" required>
                                        @foreach (listPendidikan() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">PEKERJAAN UTAMA*</label>
                                    <input type="text" class="form-control" name="pekerjaan_ayah" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">PENGHASILAN RATA-RATA / BULAN</label>
                                    <input type="number" class="form-control" name="penghasilan_ayah" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">NO HANDPHONE</label>
                                    <input type="number" class="form-control" name="no_hp_ayah" placeholder="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">NAMA IBU*</label>
                                    <input type="text" class="form-control" name="nama_ibu" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">STATUS IBU*</label>
                                    <select name="status_ibu" class="form-control" id="" required>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Tidak Diketahui">Tidak Diketahui</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempat_lahir">TEMPAT LAHIR*</label>
                                    <input type="text" class="form-control" name="tempat_lahir_ibu" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal_lahir">TANGGAL LAHIR*</label>
                                    <input type="text" class="form-control datepicker" name="tanggal_lahir_ibu"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">PENDIDIKAN TERAKHIR*</label>
                                    <select name="pendidikan_ibu" class="form-control" id="" required>
                                        @foreach (listPendidikan() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">PEKERJAAN UTAMA*</label>
                                    <input type="text" class="form-control" name="pekerjaan_ibu" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">PENGHASILAN RATA-RATA / BULAN</label>
                                    <input type="number" class="form-control" name="penghasilan_ibu" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">NO HANDPHONE</label>
                                    <input type="number" class="form-control" name="no_hp_ibu" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="btnsimpan" type="submit" class="btn btn-lg btn-primary">SIMPAN DATA</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 animated bounceInRight">
                <div class="card">
                    <div class="card-header">
                        <h4>KETERANGAN</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-0">
                            <p>* WAJIB DIISI</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Info Lebih Lanjut</h4>
                    </div>
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
@endsection
@section('js')
<script>
    $('.select2').select2();
</script>
<script>
    $(document).on('change','#provinsi', function(){
        let provinsi = $(this).val();
        let provinsiArr = provinsi.split(',');
        $.get("{{ url('https://jumarnow.github.io/api-wilayah-indonesia/api/regencies/') }}"+provinsiArr[0]+".json", function(data){
            $('#kabupaten').empty();
            // console.log(data);
            $('#kabupaten').append('<option value="">PILIH KABUPATEN/KOTA</option>');
            $.each(data, function(index, kabupaten){
                $('#kabupaten').append('<option value="' + kabupaten.id+','+kabupaten.name + '">' + kabupaten.name + '</option>');
            });
        })
    })
    $(document).on('change','#kabupaten', function(){
        let kabupaten = $(this).val();
        let kabupatenArr = kabupaten.split(',');
        console.log(kabupatenArr);
        $.get("{{ url('https://jumarnow.github.io/api-wilayah-indonesia/api/districts/') }}"+kabupatenArr[0]+".json", function(data){
            $('#kecamatan').empty();
            // console.log(data);
            $('#kecamatan').append('<option value="">PILIH KABUPATEN/KOTA</option>');
            $.each(data, function(index, kecamatan){
                $('#kecamatan').append('<option value="' + kecamatan.id+','+ kecamatan.name+ '">' + kecamatan.name + '</option>');
            });
        })
    })
    $(document).on('change','#kecamatan', function(){
        let kecamatan = $(this).val();
        let kecamatanArr = kecamatan.split(',');
    })
</script>
@endsection
