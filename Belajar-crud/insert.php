<?php
// tangkap data
  if (isset ($_POST["submit"])){
    $nim =  $_POST["nim"];
    $nama = $_POST["nama"];
    $id_jurusan = $_POST["id_jurusan"];
    $tpt_lahir = $_POST["tpt_lahir"];
    $tgl_lahor = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];
    
    $con = mysqli_connect("localhost","root","","fakultas");

    //cek koneksi
    if(mysqli_connect_errno()) {
        echo "koneksi gagal".mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }
  //buat sql query
  $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
          values ('$id_jurusan ','$nim ' , '$nama ', '$gender ', '$tpt_lahir ', '$tgl_lahor ', '$alamat ') ";
  
  if (mysqli_query($con,$sql)){
      echo"data berhasil";
  } else{
    echo"error". mysqli_error();
  }
  
  mysqli_close($con);
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
</head>
<body>
    <form action="" method="post">
      NIM: <input type="text" name="nim"><br>
      nama: <input type="text" name="nama"><br>
      ID jurusan: <input type="number" name="id_jurusan"><br>
      Jenis kelamin <input type="text" name="gender"><br>
      Tempat lahir <input type="text" name="tpt_lahir"><br>
      Tanggal Lahir (YYYY-MM-DD) <input type="text" name="tgl_lahir"><br>
      alamat <input type="text" name="alamat"><br>
      <button type="submit" name="submit"> tambah data</button>
    </form> 
</body>
</html>