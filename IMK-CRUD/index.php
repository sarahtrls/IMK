<?php
  //koneksi database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "mahasiswa";

  $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
  
//Tombol simpan 
   
  if(isset($_POST['bsimpan']))
  {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $fakultas = $_POST["fakultas"];
    $agama = $_POST["agama"];
    $no_tlp = $_POST["no_tlp"];

    $simpan = mysqli_query($koneksi, "INSERT INTO mhs VALUES('$npm','$nama','$email','$alamat','$jurusan', '$fakultas','$agama','$no_tlp')");
    if($simpan)
        {
            echo "<script>
            alert('data berhasil ditambah!');
            document.location.href = 'index.php';
          </script>";
        }
    else
    {
        echo "<script>
            alert('data gagal ditambah!');
            document.location.href = 'index.php';
          </script>";
    }
  } 

?>
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
                              placeholder="Masukkan NPM" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                              placeholder="Masukkan Nama Lengkap" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Email: </label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                              placeholder="Masukkan email" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Alamat : </label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Jurusan : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="jurusan"
                              placeholder="Masukkan Jurusan" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Fakultas : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="fakultas"
                              placeholder="Masukkan Fakultas" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Agama : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="agama"
                              placeholder="Masukkan Agama" required> 
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">No Telepon : </label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="no_tlp"
                              placeholder="Masukkan No telepon" required>
                      </div>
                      <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                      <button type="reset" class="btn btn-danger">Reset</button>

                  </form>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-header bg-success text-white">Data Mahasiswa</div>
              </div>
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
                              <a href="edit.php?npm=<?php echo $data['npm']; ?>" class="btn btn-warning"> EDIT </a>
                              <a href="hapus.php?npm=<?php echo $data['npm']; ?>" class="btn btn-danger"> HAPUS </a>
                          </td>
                      </tr>
                      <?php endwhile; //penutup perulangan?>
              </div>
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
