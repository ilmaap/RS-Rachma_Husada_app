<?php

namespace App\Http\Controllers;

use App\Models\Rajal;
use App\Models\Resepobat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RajalController extends Controller
{
    public function rajal()
    {
        $rsRajal = Rajal::latest();
        if (request('search')) {
            $rsRajal->where('Nama_Pasien', 'like', '%' . request('search') . '%');
        }

        $rsRajal = $rsRajal->get(); // Eksekusi kueri

        return view('pasien_rajal.rajal', compact('rsRajal'));
    }

    public function create()
    {
        return view('pasien_rajal.create-rajal');
    }
    public function store(Request $request)
    {
        // dd($request->all())
        Rajal::create([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
        ]);

        return redirect('/pasien_rajal');
    }

    public function update(Request $request, $NIK)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'Nama_Pasien' => 'required|string',
            'NIK' => 'required',
            'Jenis_Kelamin' => 'required|string',
            'Alamat' => 'required|string',
            'Keluhan' => 'required|string',
            'Ruang_Pemeriksaan' => 'required|string',
        ]);

        // Dapatkan obat berdasarkan ID
        $rajal = Rajal::findOrFail($NIK);

        // Simpan perubahan
        $rajal->update([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
    }

    public function destroy($NIK) {
        $rajal = Rajal::findOrFail($NIK);

        $rajal->delete();

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
        ;
    }
}
