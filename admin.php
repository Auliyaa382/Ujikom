<?php

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
    <a class="nav-link active" href="admin.php">BUKU</a>
    <?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT id_buku, category, book_name, price, stock, publisher_name FROM `tb_buku` INNER JOIN tb_publisher ON id_publisher=id");	
    ?>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="publisherView.php">PENERBIT</a>
  </li>
</ul>
<br>
<a href="addBook.php" type="button" class="btn btn-success ms-3 md-3">Tambah Data Buku</a>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <td><b>ID Buku</b></td>
        <td><b>Kategori</b></td>
        <td><b>Nama Buku</b></td>
        <td><b>Harga</b></td>
        <td><b>Stok</b></td>
        <td><b>Penerbit</b></td>
        <td><b>Kelola</b></td>
    </tr>
    </thead>
    <?php 
    while($row = mysqli_fetch_assoc($data)):
    ?>
    <tbody>
    <tr>
        <td><?php echo $row['id_buku'];?></td>
        <td><?php echo $row['category'];?></td>
        <td><?php echo $row['book_name'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['stock'];?></td>
        <td><?php echo $row['publisher_name'];?></td>
        <td>
            <a type="button" class="btn btn-warning" href="editBook.php?id_buku=<?php echo $row['id_buku'];?>">Edit</a>
            <a type="button" class="btn btn-danger" href="deleteBook.php?id_buku=<?php echo $row['id_buku'];?>">Delete</a>   
    </td>
    </tr>
    </tbody>
    <?php endwhile;?>
    </table>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>