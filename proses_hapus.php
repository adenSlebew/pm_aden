<?php
$id_pengaduan = $_GET['id_pengaduan'];

include('koneksi.php');
$query = $koneksi->query("DELETE FROM `pengaduan` WHERE id_pengaduan='$id_pengaduan'");

if($query)
{
    header("location:home.php");
}