<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$query = $koneksi->query("select * from masyarakat where username='$username' AND password='$password'");
$data = $query->fetch();

$jumlahBaris = $query->rowCount();

if($jumlahBaris > 0){

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $_SESSION['nik'] = $data['nik'];
  header("location:home.php");
}else{
  header("location:login.php");
}

