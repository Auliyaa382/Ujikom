<?php

include "koneksi.php";
 
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_publisher WHERE id = '$id'");

 if(mysqli_affected_rows($koneksi) > 0) {
	echo "<script>alert('Data berhasil dihapus');
	document.location.href = 'publisherView.php';</script>";
} else{
	echo "<script>alert('Data gagal di hapus')</script>";
}
?>