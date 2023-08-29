<?php
include "koneksi.php";
$id = $_GET['id_pengaduan'];
$query = $koneksi->query ("select * from pengaduan where id_pengaduan='$id'");
$data  = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit</title>
    <link rel="stylesheet" href= "BS/css/bootstrap.min.css">
</head>
<style>
  .home{
    color: black;
    text-decoration: none;
  }
  body{
    background-color: gray;
  }
  label{
    font-family: sans-serif;
  }
</style>
<body><br>
     <div class="container">
      <?php foreach($data as $pengaduan){?>

    <form action="proses_update.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" method="POST">
     <div class="mb-3">
     <label for="exampleFormControlTextarea1" class="form-label"><b>Edit</b></label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required><?php echo $pengaduan['isi_laporan']?></textarea>
      </div>
      <?php }?>
     <button type="submit" class="btn btn-dark" style="padding:6px 40px;">Edit</button>
</form>
  </div>
</body>
</html>