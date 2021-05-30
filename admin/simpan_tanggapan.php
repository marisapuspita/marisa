<?php 
include "../koneksi.php";
$id_pengaduan=$_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st='selesai';


$sql=$mysqli -> query("insert into tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
$update_st=$mysqli->query("update pengaduan set status='$st' where id_pengaduan='$id_pengaduan' ");

if ($sql) 
{
	?>
	<script type="text/javascript">
		alert('Data Dudah Ditanggapi');
		window.location="admin.php?url=verifikasi_pengaduan";
	</script>
<?php
}
?>