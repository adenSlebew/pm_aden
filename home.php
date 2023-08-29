<?php
session_start();
if (!isset($_SESSION['nik'])) {
  header("Location:login.php");
}





$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");



//var_dump($data);

//if($koneksi){
//  echo "koneksi berhasil";

//}else{
//  echo "gagal koneksi";
//}
$nik = $_SESSION['nik'];
$query = $koneksi->query ("select * from pengaduan where nik='$nik'");
$data  = $query->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <link rel="stylesheet" href= "BS/css/bootstrap.min.css">
</head>
<style>
  .home{
    color: black;
    text-decoration: none;
  }
</style>
<body>
<?php require "navbar.php" ?>
  </div>
</nav>
    <div class="container">
    <table class="table">
      
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Tanggal Laporan</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){?>
    <tr>
      <td><?= $pengaduan['id_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><img src="img/<?= $pengaduan['foto']?>" style="width:auto;height:50px;"> </td>
      <td>
      <a href="halaman_edit.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto" style="padding:4px 30px;">Edit</a>
      <a href="proses_hapus.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-sm btn-danger ml-auto" style="padding:4px 20px; margin-left:10px;">Hapus</a></td>
    </tr>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<!-- ?php
session_start();
echo $_SESSION['username']; ?
-->

<!-- ?php
session_start();
echo $_SESSION['nik']; ? 
-->
</body>
</html>