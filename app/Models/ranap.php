<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranap extends Model
{
    use HasFactory;
    protected $table = "ranaps";
    protected $primaryKey = "NIK";
    protected $fillable = [
        'Nama_Pasien', 'NIK', 'Jenis_Kelamin', 'Alamat', 'Keluhan', 'Dokter', 'Nama_Kamar', 'Kelas_Kamar'
    ];
}
