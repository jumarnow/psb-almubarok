<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormulirController extends Controller
{
    public function index()
    {
        return view('landing.formulir');
    }

    public function cek_pendaftaran()
    {
        $data['santri'] = Santri::whereNik(request()->nik)->first();
        return view('landing.cek_pendaftaran', $data);
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
        DB::beginTransaction();
        try {
            //code...
            $santri = new Santri();
            $santri->nama = $request->input('nama');
            $santri->nik = $request->input('nik');
            $santri->nisn = $request->input('nisn');
            $santri->jenis_kelamin = $request->input('jenis_kelamin');
            $santri->tempat_lahir = $request->input('tempat_lahir');
            // $santri->tanggal_lahir = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir'))->format('Y-m-d');
            $santri->tanggal_lahir = $request->input('tanggal_lahir');
            $santri->agama = $request->input('agama');
            $santri->cita_cita = $request->input('cita_cita');
            $santri->anak_ke = $request->input('anak_ke');
            $santri->jumlah_saudara = $request->input('jumlah_saudara');
            // dan seterusnya...

            $provinsiArr = explode(',',request()->provinsi);
            $kabupatenArr = explode(',',request()->kabupaten);
            $kecamatanArr = explode(',',request()->kecamatan);

            // Simpan alamat santri
            $santri->provinsi = $provinsiArr[0];
            $santri->kabupaten = $kabupatenArr[0];
            $santri->kecamatan = $kecamatanArr[0];
            $santri->provinsi_alt = $provinsiArr[1];
            $santri->kabupaten_alt = $kabupatenArr[1];
            $santri->kecamatan_alt = $kecamatanArr[1];
            $santri->kelurahan = $request->input('kelurahan');
            $santri->alamat_lengkap = $request->input('alamat_lengkap');

            // Simpan informasi ayah
            $santri->nama_ayah = $request->input('nama_ayah');
            $santri->status_ayah = $request->input('status_ayah');
            $santri->tempat_lahir_ayah = $request->input('tempat_lahir_ayah');
            // $santri->tanggal_lahir_ayah = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir_ayah'))->format('Y-m-d');
            $santri->tanggal_lahir_ayah = $request->input('tanggal_lahir_ayah');
            $santri->pendidikan_ayah = $request->input('pendidikan_ayah');
            $santri->pekerjaan_ayah = $request->input('pekerjaan_ayah');
            $santri->penghasilan_ayah = $request->input('penghasilan_ayah');
            $santri->no_hp_ayah = $request->input('no_hp_ayah');

            // Simpan informasi ibu
            $santri->nama_ibu = $request->input('nama_ibu');
            $santri->status_ibu = $request->input('status_ibu');
            $santri->tempat_lahir_ibu = $request->input('tempat_lahir_ibu');
            // $santri->tanggal_lahir_ibu = Carbon::createFromFormat('d-m-Y', $request->input('tanggal_lahir_ibu'))->format('Y-m-d');
            $santri->tanggal_lahir_ibu = $request->input('tanggal_lahir_ibu');
            $santri->pendidikan_ibu = $request->input('pendidikan_ibu');
            $santri->pekerjaan_ibu = $request->input('pekerjaan_ibu');
            $santri->penghasilan_ibu = $request->input('penghasilan_ibu');
            $santri->no_hp_ibu = $request->input('no_hp_ibu');

            // Simpan data yang telah diisi
            $santri->save();

            DB::commit();
            // Redirect atau lakukan tindakan sesuai kebutuhan setelah penyimpanan berhasil
            return redirect('cek_pendaftaran?nik='.$santri->nik)->with('success', 'Data santri berhasil disimpan.');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
