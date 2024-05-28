<?php

namespace App\Http\Controllers;

use App\Models\Ranap;
use Illuminate\Http\Request;

class RanapController extends Controller
{
    public function ranap()
    {
        $rsRanap = Ranap::latest();
        if (request('search')) {
            $rsRanap->where('Nama_Pasien', 'like', '%' . request('search') . '%');
        }

        $rsRanap = Ranap::paginate(5);
        //$rsRanap = $rsRanap->get(); // Eksekusi kueri

        return view('pasien_ranap.ranap', compact('rsRanap'));
    }

    public function cetakRanap()
    {
        $cetakRanap = Ranap::all();
        return view('pasien_ranap.cetak-ranap', compact('cetakRanap'));
    }

    public function create()
    {
        return view('pasien_ranap.create-ranap');
    }
    public function store(Request $request)
    {
        // dd($request->all())
        Ranap::create([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Dokter' => $request->input('Dokter'),
            'Nama_Kamar' => $request->input('Nama_Kamar'),
            'Kelas_Kamar' => $request->input('Kelas_Kamar'),
        ]);

        return redirect('/pasien_ranap');
    }
    public function update(Request $request, $NIK)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'Nama_Pasien' => 'required|string',
            'NIK' => 'required|numeric',
            'Jenis_Kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'Alamat' => 'required|string',
            'Keluhan' => 'required|string',
            'Dokter' => 'required|string',
            'Nama_Kamar' => 'required|string|in:Anggrek,Mawar,Melati,Tulip',
            'Kelas_Kamar' => 'required|string|in:Kelas VIP, Kelas A, Kelas B, Kelas C',
        ]);

        // Ranap berdasarkan NIK
        $ranap = Ranap::findOrFail($NIK);

        // Simpan perubahan
        $ranap->update([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Dokter' => $request->input('Dokter'),
            'Nama_Kamar' => $request->input('Nama_Kamar'),
            'Kelas_Kamar' => $request->input('Kelas_Kamar'),
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
    }
    public function destroy($NIK) {
        $ranap = Ranap::findOrFail($NIK);

        $ranap->delete();

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan.');
        ;
    }
}
