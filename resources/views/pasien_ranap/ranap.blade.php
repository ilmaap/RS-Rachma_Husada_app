<!-- // TES COMMIT GITHUB (boleh dihapus) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_ranap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <img src="/images/logo.png" alt="">

                <div class="text logo-text">
                    <span class="name">RS.Rachma <br> Husada</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/beranda">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Beranda</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-menu icon'></i>
                            <span class="text nav-text">Data Master</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bed icon'></i>
                            <span class="text nav-text">Kamar</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-doughnut-chart icon'></i>
                            <span class="text nav-text">Pasien</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-clinic icon'></i>
                            <span class="text nav-text">Pemeriksaan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-accessibility icon'></i>
                            <span class="text nav-text">Rawat Jalan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/pasien_ranap">
                            <i class='bx bx-first-aid icon'></i>
                            <span class="text nav-text">Rawat Inap</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-first-aid icon'></i>
                            <span class="text nav-text">Resep Obat</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-log-out icon' id="log_out"></i>
                            <span class="text nav-text">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="#">
                    <img src="images/profil.jpg" alt="profil" width="50" height="50" class="d-inline-block align-text-top">
                    {{-- Bootstrap --}}
                </a>
            </div>
        </nav>

        <div class="content">
            <div class="card card-info card-outline">
                <div class="keterangan">
                    <h2> Rawat Inap</h2>
                </div>

                <div class="card-header border-0 bg-white d-flex justify-content-end">
                    <div class="card-tools ms-auto">
                        <a href="/create-ranap" class="btn btn-success">
                            <i class='bx bxs-user-plus'></i> Tambah Pasien <i class="fas fa-plus-square"></i>
                        </a>
                    </div>
                </div>

                <div class="cetak">
                    <div class="cetak pdf">
                        <a href="/cetak-ranap" class="btn btn-success print-btn"> Cetak <i class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-3">
                            <form action="/pasien_ranap">
                                <div class="input-group mb-s input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Kelas Kamar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @php
                        $mulai=1;
                        @endphp
                        @foreach ($rsRanap as $index => $item)
                        <tbody>
                            <tr>
                                <td>{{ $index + $rsRanap->firstItem() }}</td>
                                <td>{{ $item->Nama_Pasien }}</td>
                                <td>{{ $item->NIK }}</td>
                                <td>{{ $item->Jenis_Kelamin }}</td>
                                <td>{{ $item->Alamat }}</td>
                                <td>{{ $item->Keluhan }}</td>
                                <td>{{ $item->Dokter }}</td>
                                <td>{{ $item->Nama_Kamar }}</td>
                                <td>{{ $item->Kelas_Kamar }}</td>                                
                                <td>
                                <a href="#" class="btn btn-success btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->NIK }}">
                                    Edit <i class="fas fa-plus-square"></i></a>
                                <a href="#" class="btn btn-outline-light btn-sm hapus-btn" data-id="{{ $item->NIK }}" data-nama="{{ $item->NIK }}" data-bs-toggle="modal" data-bs-target="#modalHapus-{{ $item->NIK }}"> Hapus <i class="fas fa-plus-square"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="card-footer border-0 bg-white d-flex justify-content-start">
                        {{ $rsRanap->links() }}
                    </div>
                    <!-- <div class="navigasi">
                        <button class="sebelum" type="button">Sebelumnya</button>
                        <button class="sesudah" type="button">Selanjutnya</button>
                    </div> -->
                </div>
                <!-- Modal Edit -->
                @foreach ($rsRanap as $item)
                <div class="modal fade" id="exampleModal-{{ $item->NIK }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pasien Rawat Inap</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('pasien_ranap.update', $item->NIK) }}" method="POST" onsubmit="return validateForm()">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <span>Nama Pasien</span>
                                        <input type="text" id="Nama_Pasien" name="Nama_Pasien" class="form-control" placeholder="Nama Pasien" value="{{ $item->Nama_Pasien }}"></input>
                                    </div>
                                    <div class="form-group">
                                            <span>NIK</span>
                                            <input type="text" id="NIK" name="NIK" class="form-control" placeholder="NIK" maxlength="16" required value="{{ $item->NIK }}">
                                            <small id="nikError" class="form-text text-danger" style="display: none;">NIK harus berisi 16 digit angka.</small>
                                        </div>
                                        <script>
                                        document.getElementById('NIK').addEventListener('input', function (e) {
                                            var value = e.target.value;
                                            var errorMessage = document.getElementById('nikError');
                                            
                                            // Hapus karakter non-digit
                                            e.target.value = value.replace(/\D/g, '');
                                            
                                            // Validasi panjang NIK
                                            if (e.target.value.length !== 16) {
                                                errorMessage.style.display = 'block';
                                            } else {
                                                errorMessage.style.display = 'none';
                                            }
                                        });
                                        </script>
                                    <!-- <div class="form-group">
                                        <span>NIK</span>
                                        <textarea type="number" id="NIK" name="NIK" class="form-control" placeholder="NIK">{{ $item->NIK }}</textarea>
                                        </div> -->
                                    <div class="form-group">
                                            <span><label for="Jenis_Kelamin">Jenis Kelamin</label></span>
                                            <select class="form-select" id="Jenis_Kelamin" name="Jenis_Kelamin">
                                            <option value="Laki-laki" {{ $item->Jenis_Kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $item->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <span>Alamat</span>
                                        <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" value="{{ $item->Alamat }}"></input>
                                    </div>
                                    <div class="form-group">
                                        <span>Keluhan</span>
                                        <textarea id="Keluhan" name="Keluhan" class="form-control" placeholder="Keluhan">{{ $item->Keluhan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <span>Dokter</span>
                                        <input type="text" id="Dokter" name="Dokter" class="form-control" placeholder="Nama Dokter" value="{{ $item->Dokter }}"></input>
                                    </div>
                                    <div class="form-group">
                                        <span><label for="Nama_Kamar">Nama Kamar</label></span>
                                        <select class="form-select" id="Nama_Kamar" name="Nama_Kamar">
                                        <option value="Anggrek" {{ $item->Nama_Kamar == 'Anggrek' ? 'selected' : '' }}>Anggrek</option>
                                        <option value="Mawar" {{ $item->Nama_Kamar == 'Mawar' ? 'selected' : '' }}>Mawar</option>
                                        <option value="Melati" {{ $item->Nama_Kamar == 'Melati' ? 'selected' : '' }}>Melati</option>
                                        <option value="Tulip" {{ $item->Nama_Kamar == 'Tulip' ? 'selected' : '' }}>Tulip</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span><label for="Kelas_Kamar">Kelas Kamar</label></span>
                                        <select class="form-select" id="Kelas_Kamar" name="Kelas_Kamar">
                                        <option value="Kelas VIP" {{ $item->Kelas_Kamar == 'Kelas VIP' ? 'selected' : '' }}>Kelas VIP</option>
                                        <option value="Kelas A" {{ $item->Kelas_Kamar == 'Kelas A' ? 'selected' : '' }}>Kelas A</option>
                                        <option value="Kelas B" {{ $item->Kelas_Kamar == 'Kelas B' ? 'selected' : '' }}>Kelas B</option>
                                        <option value="Kelas C" {{ $item->Kelas_Kamar == 'Kelas C' ? 'selected' : '' }}>Kelas C</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @foreach ($rsRanap->reverse() as $item)
            <!-- Awal Modal Hapus -->
            <div class="modal fade" id="modalHapus-{{ $item->NIK }}" tabindex="{{ $item->NIK }}" aria-labelledby="modalHapusLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <i class='bx bxs-trash' style="font-size: 2rem"></i><br>
                            <span>Hapus Data</span>
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-light batal-btn" data-bs-dismiss="modal">Batal</button>
                            <!-- Formulir DELETE untuk menghapus data -->
                            <form id="formHapus" action="{{ route('pasien_ranap.hapus', $item->NIK)}}" method="POST" onsubmit="return validateForm()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-light hapus-btn">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Hapus -->
            @endforeach
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>