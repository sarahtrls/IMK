<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "mahasiswa";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
 
// menangkap data id yang di kirim dari url
$npm = $_GET['npm'];
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"DELETE FROM mhs WHERE npm='$npm'");
if($hapus)
        {
            echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
          </script>";
        }
    else
    {
        echo "<script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
          </script>";
    } 
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
