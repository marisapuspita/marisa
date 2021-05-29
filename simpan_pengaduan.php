<?php
include 'koneksi.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=$mysqli -> query("insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$st')");
move_uploaded_file($file, "img/".$ft);

if ($sql) 
{
	?>
	<script type="text/javascript">
		alert('Data Berasil disimpan, Terimakasi sudah menulis laporan');
		window.location="masyarakat.php";
	</script>
<?php
}
?>