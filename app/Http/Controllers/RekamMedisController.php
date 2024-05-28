<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function medis()
    {
        $rsRekamMedis = RekamMedis::latest();
        if (request('search')) {
            $rsRekamMedis->where('Nama_Pasien', 'like', '%' . request('search') . '%');
        }

        $rsRekamMedis = RekamMedis::paginate(5); // Eksekusi kueri

        return view('rekam_medis.medis', compact('rsRekamMedis'));
    }

    public function create()
    {
        return view('rekam_medis.create-medis');
    }
    public function store(Request $request)
    {
        // dd($request->all())
        RekamMedis::create([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Nama_Dokter' => $request->input('Nama_Dokter'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
            'Hasil_Pemeriksaan' => $request->input('Hasil_Pemeriksaan'),
            'Saran' => $request->input('Saran'),
            'Tanggal_Periksa' => $request->input('Tanggal_Periksa'),
        ]);

        return redirect('/rekam_medis');
    }

    public function update(Request $request, $NIK)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'Nama_Pasien' => 'required|string',
            'NIK' => 'required|digits:16',
            'Nama_Dokter' => 'required|string',
            'Ruang_Pemeriksaan' => 'required|string',
            'Hasil_Pemeriksaan' => 'required|string',
            'Saran' => 'required|string',
            'Tanggal_Periksa' => 'required|string',
        ]);

        // Dapatkan obat berdasarkan ID
        $medis = RekamMedis::findOrFail($NIK);

        // Simpan perubahan
        $medis->update([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Nama_Dokter' => $request->input('Nama_Dokter'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
            'Hasil_Pemeriksaan' => $request->input('Hasil_Pemeriksaan'),
            'Saran' => $request->input('Saran'),
            'Tanggal_Periksa' => $request->input('Tanggal_Periksa'),
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
    }

    public function destroy($NIK) {
        $medis = RekamMedis::findOrFail($NIK);

        $medis->delete();

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
        ;
    }

    public function cetakMedis()
    {
        $cetakMedis = RekamMedis::all();
        return view('rekam_medis.cetak-medis', compact('cetakMedis'));
    }
}