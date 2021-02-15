<?php
require_once "koneksi.php";
// print_r($_GET);exit;
$id_komentar = $_GET["id"];
//echo $id_komentar;
$q = $database_connection ->prepare ("DELETE FROM `komentar` WHERE `komentar`.`id_komentar` = ? ");
$q->execute ([$id_komentar]);
header("Location: ../halamansesudahlogin.php");
?>