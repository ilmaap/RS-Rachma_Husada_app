<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rekam Medis Pasien - RS Rachma Husada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rajal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a href="/pasien_rajal">
                           <i class='bx bx-handicap icon'></i>
                            <span class="text nav-text">Rawat Jalan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
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
                    <img src="images/profil.jpg" alt="profil" width="50" height="50"
                        class="d-inline-block align-text-top">
                    {{-- Bootstrap --}}
                </a>
            </div>
        </nav>

        <div class="content">
            <div class="card card-info card-outline">
                <div class="keterangan">
                    <h2> Tambah Pasien Rawat Jalan</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route ('pasien_rajal.simpan')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <span>Nama Pasien</span>
                            <input type="text" id="Nama_Pasien" name="Nama_Pasien" class="form-control"
                                placeholder="Nama Pasien"></input>
                        </div>
                        <div class="form-group">
                            <span>NIK</span>
                            <input type="number" id="NIK" name="NIK" class="form-control" placeholder="NIK"></input>
                        </div>
                        <div class="form-group">
                            <span>Jenis Kelamin </span>
                            <textarea type="text" id="Jenis_Kelamin" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Alamat</span>
                            <textarea type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Keluhan</span>
                            <textarea type="text" id="Keluhan" name="Keluhan" class="form-control" placeholder="Keluhan"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Ruang Pemeriksaan</span>
                            <input type="text" id="Ruang_Pemeriksaan" name="Ruang_Pemeriksaan" class="form-control" placeholder="Ruang Pemeriksaan"></input>
                        </div>
                        <div class="tombol">
                            <div class="form-group">
                                <a href="/pasien_rajal" class="btn btn-success batal-btn"> Batal</a>
                                <button type="submit" class="btn btn-succes simpan-btn">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

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


        // modeSwitch.addEventListener("click", () => {
        //     body.classList.toggle("dark");

        //     if (body.classList.contains("dark")) {
        //         modeText.innerText = "Light mode";
        //     } else {
        //         mod eText.innerText = "Dark mode";

        //     }
        // });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
