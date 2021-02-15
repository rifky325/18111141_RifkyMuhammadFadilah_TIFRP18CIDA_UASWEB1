<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email= $_POST["email"];
$kota_lahir= $_POST["kota_lahir"];
$tgl_lahir= $_POST["tgl_lahir"];
$pekerjaan= $_POST["pekerjaan"];


$q = $database_connection ->prepare ("UPDATE `register` SET `username` = ?, `email` = ?, `kota_lahir` = ?, `tgl_lahir` = ?, `pekerjaan` = ? WHERE `register`.`username` = ?;");
$q->execute ([$username, $email, $kota_lahir, $tgl_lahir, $pekerjaan, $username]);
header("Location: ../edit_profile.php");
?>