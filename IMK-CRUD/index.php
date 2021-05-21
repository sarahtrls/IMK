
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
      <div class="container">
          <h2 class="text-center">FORMULIR INPUT DATA MAHASISWA</h2>
          <div class="card mt-3">
              <div class="card-header">
                  <div class="card-header bg-primary text-white">Formulir Data Mahasiswa</div>
              </div>
              <div class="card-body">
                  <form method="post" action="">
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Nomor Pokok Mahasiswa : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan NPM"
                              name="npm" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Nama Lengkap : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Nama Lengkap"
                              name="nama" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Email : </label>
                          <input type="email" class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan Email" name="email" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Alamat : </label>
                          <input type="text" textarea class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan Alamat" name="alamat" required></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Jurusan : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan Jurusan" name="jurusan" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Fakultas : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan Fakultas" name="fakultas" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Agama : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan Fakultas" name="agama" required>
                      </div>
                      <div class="mb-3">
                          <label for="formGroupExampleInput" class="form-label">Nomor Handphone : </label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                              placeholder="Masukan No Handphone" name="no_tlp" required>
                      </div>
                      <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                      <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                  </form>
                  
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-header bg-success text-white">Daftar Mahasiswa</div>
              <div class="card-body">
                  <table class="table table-bordered table-striped">
                      <tr>
                          <th>No.</th>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Fakultas</th>
                          <th>Agama</th>
                          <th>No_tlp</th>
                          <th>Aksi</th>
                      </tr>
                      <?php
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * from mhs order by npm desc");
                        while($data = mysqli_fetch_array($tampil)) :?>
                      <tr>
                          <td><?=$no++;?></td>
                          <td><?=$data['npm']?></td>
                          <td><?=$data['nama']?></td>
                          <td><?=$data['email']?></td>
                          <td><?=$data['alamat']?></td>
                          <td><?=$data['jurusan']?></td>
                          <td><?=$data['fakultas']?></td>
                          <td><?=$data['agama']?></td>
                          <td><?=$data['no_tlp']?></td>
                          <td>
                              <a href="#" class="btn btn-warning"> EDIT </a>
                              <a href="#" class="btn btn-danger"> HAPUS </a>
                          </td>
                      </tr>
                      <?php endwhile; //penutup perulangan?>

                      </div>
                      </div>
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
