
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>IMK CRUD</title>
  </head>
  <body>
      <div class="container">
          <h2 class="text-center">FORMULIR DATA MAHASISWA</h2>
          <div class="card">
              <div class="card-header">
                  <div class="card-header bg-primary text-white">Formulir Mahasiswa</div>
              </div>
              <div class="card-body">
                  <form method="post" action="">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nomor Pokok Mahasiswa : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="npm"
                                value="<?php echo $result['npm']; ?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                               value="<?php echo $result['nama']; ?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Email: </label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                             value="<?php echo $result['email']; ?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Alamat : </label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"  value="<?php echo $result['alamat']; ?>" required></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Jurusan : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="jurusan"
                               value="<?php echo $result['jurusan']; ?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Fakultas : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="fakultas"
                             value="<?php echo $result['fakultas']; ?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Agama : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="agama"
                            value="<?php echo $result['agama']; ?>" required> 
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">No Telepon : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="no_tlp"
                            value="<?php echo $result['no_tlp']; ?>" required>
                      </div>
                      <button type="submit" class="btn btn-success" name="bubah">Ubah</button>
                      <button type="reset" class="btn btn-danger">Reset</button>

                  </form>
              </div>
          </div>
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
