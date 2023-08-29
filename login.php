<?php
session_start();
if (isset($_SESSION['nik'])) {
    header("Location:home.php");
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="style1.css">
    </head>
   
    <body>
        <div class="login">
          <h2>Login</h2>
            <form action="proses_login.php" method="POST">
                <div class="mb-3">
                    <label for="username"class="form-label">Username</label><br>
                    <input type="username"class="form-control"id="username" name="username"><br>
                </div>
                <div class="mb-3">
                    <label for="password"class="form-label">Password</label><br>
                    <input type="password"class="form-control"id="password" name="password"><br>
                </div>
                    <button type="submit" name="" class="login-btn" style="margin-bottom: 15px;">Login</button>
                    <a link href="daftar.php"><button type="button" class="login-btn" > Gak Punya Akun?</button></a>
            </form>
        </div>     
    </body>
</html>