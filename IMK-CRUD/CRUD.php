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

<!-- SKIP -->
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

<!--SKIP--!>
<?php
  //koneksi database

  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "mahasiswa";
  
  $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

  if(isset($_POST['bubah']))
  {
      $npm = $_POST["npm"];
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $alamat = $_POST["alamat"];
      $jurusan = $_POST["jurusan"];
      $fakultas = $_POST["fakultas"];
      $agama = $_POST["agama"];
      $no_tlp = $_POST["no_tlp"];
  
      $query = mysqli_query($koneksi, "UPDATE mhs SET
          nama='$nama',
          email='$email',
          alamat='$alamat',
          jurusan='$jurusan',
          fakultas='$fakultas',
          agama='$agama',
          no_tlp='$no_tlp'
          WHERE npm='$npm'");
  
      echo "<script>
              alert('data berhasil diubah!');
              document.location.href = 'index.php';
            </script>";
  }

  $npm = $_GET["npm"];
  $mhs = mysqli_query($koneksi, "SELECT * FROM mhs WHERE npm = '$npm'");
  $result = mysqli_fetch_array($mhs);

?>
