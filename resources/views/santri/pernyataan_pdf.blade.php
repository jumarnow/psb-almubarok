<!DOCTYPE html>
<html>
<head>
	<title>Surat Pernyataan {{ $santri->nama }}</title>
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
        .data_content {
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
        <div class="text1">SURAT PERNYATAAN</div>

        <div class="data_content">

            <div style="margin-bottom: 6px"></div>
            Yang bertanda tangan dibawah ini:

            <table class="table_data">
                <tr>
                    <td style="width: 160">Nama</td>
                    <td>: {{ $santri->nama }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>: {{ $santri->tempat_lahir }}, {{ Carbon\Carbon::parse($santri->tanggal_lahir)->isoFormat('DD MMMM Y') }}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>: {{ $santri->nama_ayah }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>: {{ $santri->nama_ibu }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $santri->alamat_lengkap }}</td>
                </tr>
            </table>

            <div style="margin-bottom: 6px"></div>
            Menyatakan dengan sesungguhnya bahwa saya akan senantiasa mematuhi peraturan dan tata tertib pesantren (baik secara tertulis maupun tidak tertulis).
            <div style="margin-bottom: 6px"></div>
            1.Tidak membawa handphone  (hp), laptop, dan benda elektronik lainnya, jika sudah tersita barang tidak bisa di ambil apapun alasannya.
            <br> 2.	Mengikuti seluruh kegiatan yang diadakan pondok pesantren
            <br> 3.	Tidak melakukan hal hal yang tidak bermanfaat semisal:
                <br> &nbsp; &nbsp; •	Memakai kaos lengan pendek
                <br> &nbsp; &nbsp; •	Membawa bacaan yang tidak bermanfaat (novel, komik, dll)
                <br> &nbsp; &nbsp; •	Membolos sekolah
                <br> &nbsp; &nbsp; •	DLL
            <br> 4.	Wajib memakai mukena lajuran/terusan
            <br> 5.	Aktif mengikuti sholat fardu berjamaah
            <br> 6.	Menitipkan uang dikantor .
            <br> 7.	Membayar syahriyah pada waktunya
            <br> 8.	Keluar pesantren wajib mengenakan pakaian ala santri.
            <br> 9.	Semua barang pribadi wajib di beri nama

            <div style="margin-bottom: 6px"></div>
            Apabila saya melakukan tindak indisipliner terhadap peraturan dan tata tertib tersebut, maka saya siap menerima sanksi sesuai tingkat kesalahan yang saya lakukan.
            <div style="margin-bottom: 6px"></div>
            Demikian pernyataan ini saya buat dengan penuh keikhlasan dan tidak ada paksaan dari siapapun.
            <div style="margin-bottom: 6px"></div>
            <div style="margin-bottom: 6px"></div>
            <table>
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

            <table>
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
        </div>

</body>
</html>
