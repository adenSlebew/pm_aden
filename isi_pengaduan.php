<!DOCTYPE html>
<html lang="en">
<head>
  <title>Isi Pengaduan</title>
  <link rel="stylesheet" href= "BS/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'?>
<div class="p-3 mb-2 bg-secondary text-white">
<div class="container" style="margin-top:40px;">
<div class="mb-3">
  <form action="proses_pengaduan.php"method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="isi_laporan"></textarea>
</div>
<label for="inputGroupFile02" class="form-label">Foto</label>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">
</div>
<button type="submit" class="btn btn-dark" style="padding:6px 40px;">Kirim</button>
<a href="home.php" class="btn btn-dark">Kembali</a>
</div>
</form>
</div>
</body>
</html>
