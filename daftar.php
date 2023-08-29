<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="style02.css">
    </head>
    <body>
        <div class="daftar">
          <h2>daftar</h2>

            <form method="POST" action="proses_daftar.php"> 
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               

                <label>Nik</label>
                <br>
                <input name="nik" type="text" required >
                <br>
                <label>Nama</label>
                <br>
                <input name="nama" type="text" required >
                <br>
                <label>username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>telp</label>
                <br>
                <input name="telp" type="telp" required >
                <br>

                <button type="submit">Daftar</button>
                <a link href="login.php"><button type="button" > Kembali</button></a>