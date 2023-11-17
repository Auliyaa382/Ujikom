<?php

include "koneksi.php";
 
$id = $_GET['id_buku'];
mysqli_query($koneksi, "DELETE FROM tb_buku WHERE id_buku = '$id'");

 if(mysqli_affected_rows($koneksi) > 0) {
	echo "<script>alert('Data berhasil dihapus');
	document.location.href = 'admin.php';</script>";
} else{
	echo "<script>alert('Data gagal di hapus')</script>";
}
?>