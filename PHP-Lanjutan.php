<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label> Nama</label>
    <input type="text" name="nama">
    <label> Jumlah</label>
    <input type="text" name="no">
    <input type="Submit" name="Submit" value="Submit">
  </form>
  <?php
    if(!empty ($_POST ['Submit'])) {

        switch($_POST['nama']){
          case "putu":
            $pesan = $_POST['nama']. "adalah orang bali";
          break;
          case "Budi":
            $pesan= $_POST['nama']. "adalah orang orang nameks";
          break;
          default:
            $pesan= $_POST['nama']. "anda adalah orang";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
          echo $pesan."<br>";
        }
    } else {
        echo "anda belum beruntung";
    }
  ?>
</body>
</html>
