<?php 

include "koneksi.php";
$id = $_GET['id_buku'];
if( isset($_POST["submit"])){
    $id_buku = $_POST["id_buku"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];

    mysqli_query($koneksi, "update tb_buku set id_buku='$id_buku', category='$kategori', book_name='$nama_buku', price=$harga, stock=$stok, id_publisher='$penerbit'  where id_buku='$id'");

    if( mysqli_affected_rows($koneksi) > 0){
        echo "<script>alert('Data berhasil di update');
        document.location.href = 'admin.php';</script>";
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
    <a class="nav-link active" href="admin.php">BUKU</a>
   
  </li>
  <li class="nav-item">
    <a class="nav-link" href="publisherView.php">PENERBIT</a>
  </li>
</ul>
<br>
      <h1 align="center">Edit Data Buku</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
         <td><label for="id_buku" class="form-label mt-4">ID Buku</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="id_buku" name="id_buku" aria-describedby="emailHelp" value="<?php echo $id ?>" required></td>
    </tr>
    <tr>
         <td><label for="kategori" class="form-label mt-4">Kategori</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="kategori" name="kategori" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="nama_buku" class="form-label mt-4">Nama Buku</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="nama_buku" name="nama_buku" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="harga" class="form-label mt-4">Harga</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="harga" name="harga" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="stok" class="form-label mt-4">Stok</label>
         <input type="text" size="60" class="form-control mt-2 ms-3" id="stok" name="stok" aria-describedby="emailHelp" required></td>
    </tr>
    <tr>
         <td><label for="penerbit" class="form-label mt-4">Penerbit</label>
         <select name="penerbit" id="penerbit" class="form-control mt-2 ms-3" >
         <?php 
    $data = mysqli_query($koneksi, "SELECT * FROM tb_publisher");
    while($row = mysqli_fetch_assoc($data)):
    ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['publisher_name'];?></option>
            <?php endwhile;?>
         </select>
         
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