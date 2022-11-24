<?php

if (isset($_GET['p'])) {
  if ($_GET['p'] == 'tampil') {
    echo $_POST['nama'];
    echo "<br/>";
    echo $_POST['password'];

  }else if ($_GET ['p'] == "pesan"){
    echo "halo apa kaabr".$_POST['nama'];
    echo"<br/>";
    echo "password nya " .$_POST['password'];
  
  }else if ($_GET ['p'] == "aman"){
  
    if (!empty( $_POST['nama'])) {;
        echo $_POST['nama'];
      } else {
        echo "nama anda belum dimasukan";
}
    echo "<br/>";
    if (!empty( $_POST ['password'])){
    echo $_POST ['password'];
   } else {
      echo "password kosong";
  }
} else if ($_GET ['p'] == "gambar"){
  $size = getimagesize($_FILES["berkas"]["tmp_name"]);
  $image ="data" .$size['mime']. "based64,";
        base64_decode(file_get_contents($_FILES['berkas']['tmp_name']));

  echo "<image src='".$image."'width='720'>";
}
}
else{
  echo "anda tidak bisa akses";
}


?>