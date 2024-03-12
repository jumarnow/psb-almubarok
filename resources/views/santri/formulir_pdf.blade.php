<!DOCTYPE html>
<html>
<head>
	<title>Formulir {{ $santri->nama }}</title>
	<style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#2d2a2a;width: 100%; }
        .tg td{font-family:Arial;font-size:12px;padding:8px 8px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#181717;color:#333;background-color:#fff;}
        .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:rgb(14, 14, 14);color:rgb(20, 19, 19);background-color:#ffffff;}
        .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
        .tg .tg-ti5e{font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
        .tg .tg-rv4w{font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;}

		#table-header {
            width: 100%;
			border-style: solid;
			border-width: 3px;
			border-color: white;
            font-family:"Times New Roman", Helvetica, sans-serif;
		}
		#table-header tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		#table-header tr .text {
			text-align: center;
			font-size: 13px;
		}
		#table-header tr td {
			font-size: 13px;
		}

        .table-header {
            width: 100%;
            border-style: solid;
            border-width: 3px;
            border-color: white;
            font-family:"Times New Roman", Helvetica, sans-serif;
        }
        .table-header tr td {
            font-size: 9px;
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .page_break { page-break-before: always; }
        .margin_kop {
            margin-left: -90px;
        }
        .text1 {
            font-size: 13;
            font-weight: bold;
            text-align: center;
        }
        .text2 {
            font-size: 12;
            font-weight: bold;
            text-align: center;
        }
        .table_data {
            margin-left: 20;
        }

	</style>
</head>
<body>
        <table id="table-header">
			<tr>
				{{-- <td><img src="{{ asset('asset') }}/logo-futuhiyyah-hitam.jpg" width="90" height="90"></td> --}}
				<td><img src="{{ public_path('assets') }}/img/logo/logo-alba-mono.jpg" width="90" height="90"></td>
				<td>
				<center class="margin_kop">
					<font size="4"><b>YAYASAN PONDOK PESANTREN AL MUBAROK</b></font><br>
					<font size="4"><b>PONDOK PESANTREN PUTRA-PUTRI</b></font><br>
					<font size="6"><b>AL MUBAROK</b></font><br>
					<font size="2"><b>Jl. Brumbungan 194 Mranggen Demak Telp. 085729555907(PA),085799840007(PI)</b></font><br>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr style="border: 1px solid black"></td>
			</tr>
        </table>
        <div class="text1">FORMULIR PENDAFTARAN SANTRI BARU</div>
        <div class="text1">PONDOK PESANTREN AL MUBAROK</div>
        <div class="text2">Tahun Ajaran 2024/2025</div>

        <br>

        <table class="table_data">
            <tr>
                <td style="width: 20px"><b>A.</b></td>
                <td><b>DATA DIRI</b></td>
            </tr>
            <tr>
                <td></td>
                <td style="width: 160">Nama Lengkap</td>
                <td>: {{ $santri->nama }}</td>
            </tr>
            <tr>
                <td></td>
                <td>NIK</td>
                <td>: {{ $santri->nik }}</td>
            </tr>
            <tr>
                <td></td>
                <td>NISN</td>
                <td>: {{ $santri->nisn }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Jenis kelamin</td>
                <td>: {{ $santri->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ $santri->tempat_lahir }}, {{ Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('DD MMMM Y') }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Agama</td>
                <td>: {{ $santri->agama }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Cita-cita</td>
                <td>: {{ $santri->cita_cita }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Anak ke </td>
                <td>: {{ $santri->anak_ke }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Jumlah Saudara </td>
                <td>: {{ $santri->jumlah_saudara }}</td>
            </tr>
            <tr>
                <td></td>
                <td>No Handphone</td>
                <td>: {{ $santri->no_hp }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Email</td>
                <td>: {{ $santri->email }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Yang membiayai sekolah</td>
                <td>: {{ $santri->yg_membiayai }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Berkebutuhan khusus</td>
                <td>: {{ $santri->kebutuhan_khusus }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kebutuhan disabilitas</td>
                <td>: {{ $santri->kebutuhan_disabilitas }}</td>
            </tr>
        </table>

        <div style="margin-bottom: 6px"></div>

        <table class="table_data">
            <tr>
                <td style="width: 20px"><b>B.</b></td>
                <td colspan="2"><b>KETERANGAN ORANG TUA SANTRI</b></td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Ayah Kandung</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="width: 160">Nama Lengkap</td>
                <td>: {{ $santri->nama_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Status</td>
                <td>: {{ $santri->status_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ $santri->tempat_lahir_ayah }}, {{ Carbon\Carbon::parse($santri->tanggal_lahir_ayatempat_lahir_ayah)->isoFormat('DD MMMM Y') }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pendidikan Terakhir</td>
                <td>: {{ $santri->pendidikan_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerjaan Utama</td>
                <td>: {{ $santri->pekerjaan_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Penghasilan rata-rata perbulan </td>
                <td>: {{ $santri->penghasilan_ayah }}</td>
            </tr>
            <tr>
                <td></td>
                <td>No Handphone </td>
                <td>: {{ $santri->no_hp_ayah }}</td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Ibu Kandung</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Nama Lengkap</td>
                <td>: {{ $santri->nama_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Status</td>
                <td>: {{ $santri->status_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ $santri->tempat_lahir_ibu }}, {{ Carbon\Carbon::parse($santri->tanggal_lahir_ayatempat_lahir_ibu)->isoFormat('DD MMMM Y') }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pendidikan Terakhir</td>
                <td>: {{ $santri->pendidikan_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerjaan Utama</td>
                <td>: {{ $santri->pekerjaan_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Penghasilan rata-rata perbulan </td>
                <td>: {{ $santri->penghasilan_ibu }}</td>
            </tr>
            <tr>
                <td></td>
                <td>No Handphone </td>
                <td>: {{ $santri->no_hp_ibu }}</td>
            </tr>
        </table>

        <div class="page_break"></div>
        <br><br>

        <table class="table_data">
            <tr>
                <td style="width: 20px"><b>C.</b></td>
                <td colspan="2"><b>DATA TEMPAT TINGGAL DOMISILI</b></td>
            </tr>
            <tr>
                <td></td>
                <td style="width: 160">Provinsi</td>
                <td>: {{ $santri->provinsi_alt }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kabupaten / Kota</td>
                <td>: {{ $santri->kabupaten_alt }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kecamatan</td>
                <td>: {{ $santri->kecamatan_alt }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kelurahan / Desa</td>
                <td>: {{ $santri->kelurahan }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat Lengkap</td>
                <td>: {{ $santri->alamat_lengkap }}</td>
            </tr>
        </table>

        <br><br>

        <table class="table_data">
            <tr>
                <td colspan="3" style="text_align: right">Mranggen, {{ Carbon\Carbon::now()->isoFormat('DD MMMM Y') }}</td>
            </tr>
            <tr>
                <td style="width: 180">Saksi I</td>
                <td style="width: 180">Saksi II</td>
                <td>Yang menyatakan,</td>
            </tr>
            <tr>
                <td>Orang Tua Santri</td>
                <td>Pengurus Pesantren</td>
                <td>Santri</td>
            </tr>
        </table>
        <br><br><br><br>

        <table class="table_data">
            <tr>
                <td style="width: 180">----------------</td>
                @if(auth()->check())
                <td style="width: 180"> <b><u>{{ Auth::user()->name }}</u></b></td>
                @else
                <td style="width: 180">----------------</td>
                @endif
                <td><b><u>{{ $santri->nama }}</u></b></td>
            </tr>
        </table>

</body>
</html>
