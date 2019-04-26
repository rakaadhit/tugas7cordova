<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $nomormeja=$_POST['nomormeja'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`,`jumlah`,`nomormeja`) VALUES ('$nama','$harga','$jumlah','$nomormeja')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>