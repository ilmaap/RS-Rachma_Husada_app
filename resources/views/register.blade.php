<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #9AD0C2;">

  <h2 style="padding-top: 20px; padding-left: 50px;"><b>RS. Rachma Husada</b></h2>


  <br><br>
  <!-- //FORM Register -->
    <div class="container"  style="padding: 40px;">
    <div class="card">
      <div class="card-body">
        <div class="content" style="text-align: center;">
            <h2><b>Register Pasien</b></h2>
            <h5>Masukan Informasi Pasien</h5>
        </div>
        <br><br><br><br><br>
        
        <h6 style="padding-left: 12px; font-family: Mulish;">Detail Kontak</h6>
        <div class="container">
          <div class="row">
            <div class="col">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label" style="font-family: Mulish;">Nomor Telpon</label>
              <input type="email" class="form-control" style="width: 500px; font-family: Mulish;" id="exampleFormControlInput1" placeholder="No. Telpon">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label" style="font-family: Mulish;">Alamat</label>
              <input type="email" class="form-control" style="width: 500px; font-family: Mulish;" id="exampleFormControlInput1" placeholder="Alamat">
            </div>
            </div>
            <div class="col">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label" style="text-align: flex; font-family: Mulish;">Email</label>
              <input type="email" class="form-control" style="width: 500px; font-family: Mulish;" id="exampleFormControlInput1" placeholder="Alamat Email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label" style="text-align: flex; font-family: Mulish;">Kota/Kabupaten</label>
              <input type="email" class="form-control" style="width: 500px; font-family: Mulish;" id="exampleFormControlInput1" placeholder="Kota/Kabupaten">
            </div>
            </div>
            </div>
          </div>
          <br><br><br>
          <div class="d-flex justify-content-end mt-3">
            <button type="button" class="btn btn-success btn-sm me-2">Sebelumnya</button>
            <button type="button" class="btn btn-secondary btn-sm"><a href="registertiga.blade.php" style="text-decoration: none; color: #fff">Selanjutnya</a></button>
          </div>
          <br><br>
        </div>
      </div>
    </div>
    </div>

  <!-- END FROM Register -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
