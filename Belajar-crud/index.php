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
$query = "SELECT * FROM mahasiswa";

// tampilkan data sql query
$result = mysqli_query($con,$query);
$mahasiswa= [];
if ($result){
    //tampil data satu satu
    while($row= mysqli_fetch_assoc($result)){
        $mahasiswa[]=$row;
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
    <title>data mahasiswa</title>
</head>
<body>
    <h1> data mahasiswa<h1>
        <table border="1" style="width: 100%;">
            <tr>
                <th> NIM</th>
                <th>Nama</th>
            </tr>
            <?php foreach($mahasiswa as $value): ?>
            <tr>
                <td><?php echo $value ["nim"]; ?></td>
                <td> <?php echo $value ["nama"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>