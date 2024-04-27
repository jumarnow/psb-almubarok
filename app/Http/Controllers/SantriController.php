<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['santri'] = Santri::all();
        return view('santri.index', $data);
    }

    public function pernyataan_pdf()
    {
        $data['santri'] = Santri::whereNik(request()->nik)->first();
        $paper_size = array(0, 0, 612.00, 936.00);
        $pdf = PDF::loadView('santri.pernyataan_pdf',$data)->setPaper($paper_size);
        return $pdf->stream('Pernyataan_'.$data['santri']->nama.'.pdf');
    }

    public function formulir_pdf()
    {
        $data['santri'] = Santri::whereNik(request()->nik)->first();
        $paper_size = array(0, 0, 612.00, 936.00);
        $pdf = PDF::loadView('santri.formulir_pdf',$data)->setPaper($paper_size);
        return $pdf->stream('Formulir_'.$data['santri']->nama.'.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data santri ke dalam database
        $santri = new Santri();
        $santri->nama = $request->input('nama');
        $santri->nik = $request->input('nik');
        $santri->nisn = $request->input('nisn');
        $santri->jenis_kelamin = $request->input('jenis_kelamin');
        $santri->tempat_lahir = $request->input('tempat_lahir');
        $santri->tanggal_lahir = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir'))->format('Y-m-d');
        $santri->agama = $request->input('agama');
        $santri->cita_cita = $request->input('cita_cita');
        $santri->anak_ke = $request->input('anak_ke');
        $santri->jumlah_saudara = $request->input('jumlah_saudara');
        // dan seterusnya...

        // Simpan alamat santri
        $santri->provinsi = $request->input('provinsi');
        $santri->kabupaten = $request->input('kabupaten');
        $santri->kecamatan = $request->input('kecamatan');
        $santri->provinsi_alt = $request->input('provinsi_alt');
        $santri->kabupaten_alt = $request->input('kabupaten_alt');
        $santri->kecamatan_alt = $request->input('kecamatan_alt');
        $santri->kelurahan = $request->input('kelurahan');
        $santri->alamat_lengkap = $request->input('alamat_lengkap');

        // Simpan informasi ayah
        $santri->nama_ayah = $request->input('nama_ayah');
        $santri->status_ayah = $request->input('status_ayah');
        $santri->tempat_lahir_ayah = $request->input('tempat_lahir_ayah');
        $santri->tanggal_lahir_ayah = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir_ayah'))->format('Y-m-d');
        $santri->pendidikan_ayah = $request->input('pendidikan_ayah');
        $santri->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $santri->penghasilan_ayah = $request->input('penghasilan_ayah');
        $santri->no_hp_ayah = $request->input('no_hp_ayah');

        // Simpan informasi ibu
        $santri->nama_ibu = $request->input('nama_ibu');
        $santri->status_ibu = $request->input('status_ibu');
        $santri->tempat_lahir_ibu = $request->input('tempat_lahir_ibu');
        $santri->tanggal_lahir_ibu = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir_ibu'))->format('Y-m-d');
        $santri->pendidikan_ibu = $request->input('pendidikan_ibu');
        $santri->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $santri->penghasilan_ibu = $request->input('penghasilan_ibu');
        $santri->no_hp_ibu = $request->input('no_hp_ibu');

        // Simpan data yang telah diisi
        $santri->save();

        // Redirect atau lakukan tindakan sesuai kebutuhan setelah penyimpanan berhasil
        return redirect('/cek-pendaftaran?nik'.$santri->nik)->with('success', 'Data santri berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Santri $santri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Santri $santri)
    {
        //
    }

    public function delete_formulir($id)
    {
        $data = Santri::find($id);
        $data->delete();
    }
}
