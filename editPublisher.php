<?php 

include "koneksi.php";
$id = $_GET['id'];

if( isset($_POST["submit"])){
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $telepon = $_POST["telepon"];

    mysqli_query($koneksi, "update tb_publisher set id='$id', publisher_name='$name', address='$alamat', city='$kota', phone='$telepon'  where id='$id'");

    if( mysqli_affected_rows($koneksi) > 0){
        echo "<script>alert('Data berhasil di update');
        document.location.href = 'publisherView.php';</script>";
    } else{
        echo "<script>alert('Data gagal di update')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">UNIBOOKSTORE</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pengadaan.php">Pengadaan</a>
    </li>
  </ul>
</nav>
<h1 align="center">Pengelolaan Data</h1>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="admin.php">BUKU</a>
   
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="publisherView.php">PENERBIT</a>
  </li>
</ul>
<br>
      <h1 align="center">Edit Data Buku</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
         <td><label for="id" class="form-label mt-4">ID Penerbit</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="id" name="id" aria-describedby="emailHelp" value="<?php echo $id?>" required></td>
    </tr>
    <tr>
         <td><label for="nama" class="form-label mt-4">Nama Penerbit</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="nama" name="nama" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="alamat" class="form-label mt-4">Alamat</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="alamat" name="alamat" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="kota" class="form-label mt-4">Kota</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="kota" name="kota" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="telepon" class="form-label mt-4">Telepon</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="telepon" name="telepon" aria-describedby="emailHelp" required></td>
    </tr>     
    </tr>
    <tr>
         <td><button type="submit" class="btn btn-warning mt-3 pr-3 pl-3" style="margin-left: 15rem;" name="submit" value="UPDATE" >Simpan</button></td>
    </tr>
</table>
</form>
<br>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>