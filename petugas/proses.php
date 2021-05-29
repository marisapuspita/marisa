<?php 
include '../koneksi.php';
$sql=$mysqli -> query("update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sql) 
{
  header('location:petugas.php?url=verifikasi_pengaduan');
}
?>