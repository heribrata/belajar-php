<?php
//buat koneksi
$con = mysqli_connect("localhost","root","","fakultas");

//cek koneksi
if(mysqli_connect_errno()) {
    echo "koneksi gagal".mysqli_connect_error();
}else{
    echo "koneksi berhasil";
}
//membaca data dari table mysql
$query = "SELECT * FROM mahasiswa WHERE id=2";

// tampilkan data sql query
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result){
    //tampil data satu satu
    while($row= mysqli_fetch_assoc($result)){
        $mahasiswa= $row;
    }
    mysqli_free_result($result);
}

//tutup koneksi
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update data mahasiswa</title>
</head>
<body>
  <h1> update data mahasiswa</h1>
  <?php //var_dump($mahasiswa); ?>
  <form action="" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>"><br>
        nama: <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>"><br>
        ID jurusan: <input type="number" name="id_jurusan" value="<?php echo $mahasiswa['id_jurusan']; ?>"><br>
        Jenis kelamin <input type="text" name="gender" value="<?php echo $mahasiswa['Jenis_Kelamin']; ?>"><br>
        Tempat lahir <input type="text" name="tpt_lahir" value="<?php echo $mahasiswa['Tempat_Lahir']; ?>"><br>
        Tanggal Lahir (YYYY-MM-DD) <input type="text" name="tgl_lahir" value="<?php echo $mahasiswa['Tanggal_Lahor']; ?>"><br>
        alamat <input type="text" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>"><br>
        <button type="submit" name="submit"> tambah data</button>
    </form> 
</body>
</html>