<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Register</title>
    <link rel="stylesheet" href="/css/registersatu.css">
</head>
<body>
    <div class="rs-container">
        <img class="logo" src="/assets/logo_rs-removebg-preview.png" alt="">
        <h3>RS. Rachma Husada</h3>
    </div>
    <br>
    <main>
        <section class="registrasi">
            <h2 class="registrasi1">Registrasi Pasien</h2>
            <p class="registrasi2">Masukkan Informasi Pasien</p>
                <div class="data-diri">
                    <h3 class="data">Data Diri</h3>
                    <div class="form-group">
                        <label for="nama-pasien">Nama Pasien</label>
                        <input type="text" id="nama-pasien" name="nama_pasien" placeholder="Masukkan nama pasien">
                    </div> 
                    <div class="form-group">
                        <label for="nik-pasien">NIK</label>
                        <input type="number" id="nik-pasien" name="nik_pasien" placeholder="Masukkan NIK pasien">
                    </div>
                </div>
                <div class="data-kunjungan">
                    <div class="form-group">
                        <label for="jenis-kelamin">Jenis Kelamin</label>
                        <select id="jenis-kelamin" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal-masuk">Tanggal Masuk</label>
                        <input class="tanggal" type="date" id="tanggal-masuk" name="tanggal-masuk">
                    </div>
                </div>
                <div class="button">
                    <a href="{{ url('kembali') }}"><button class="kembali" type="submit">Kembali</button></a>
                    <a href="{{ url('register2') }}"><button class="selanjutnya" type="submit">Selanjutnya</button></a>
                </div>
        </section>
    </main>
</body>
</html>
