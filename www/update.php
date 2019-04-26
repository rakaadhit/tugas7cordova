<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $nomormeja=$_POST['nomormeja'];
 $q=mysqli_query($con,"UPDATE `barang` SET `nama`='$nama',`harga`='$harga',`jumlah`='$jumlah',`nomormeja`='$nomormeja' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>