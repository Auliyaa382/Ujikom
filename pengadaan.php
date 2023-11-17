<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pengadaan</title>
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
      <a class="nav-link" href="#">Pengadaan</a>
    </li>
  </ul>
</nav>

<h1 align="center">Pengadaan Buku</h1>

<br>
    <table class="table table-striped table-hover">
    <thead>
    <tr>
        <td><b>Nama Buku</b></td>
        <td><b>Penerbit</b></td>
        <td><b>Stok</b></td>
    </tr>
    </thead>

    <?php 
	$data = mysqli_query($koneksi, "select * from tb_buku INNER JOIN tb_publisher ON id_publisher=id order by stock asc");		
    while($row = mysqli_fetch_assoc($data)):?>
    <tbody>
    <tr>
        <td><?php echo $row['book_name'];?></td>
        <td><?php echo $row['publisher_name'];?></td>
        <td><?php echo $row['stock'];?></td>
    </tr>
    </tbody>
    <?php endwhile;?>
    </table>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>