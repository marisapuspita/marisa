<?php
if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) 
	{
		case 'verifikasi_pengaduan':
			include 'verifikasi_pengaduan.php';
			break;
		case 'detail_pengaduan':
			include 'detail_pengaduan.php';
			break;

	}
}
else
{
	?>
	Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat, Aplikasi ini di buat untuk melaporkan pengaduan masyarakat dalam pelanggaran atau peyimpangan kejadian yang ada pada masyarakat di Kabupaten Aceh Tamiang<br><br>
	Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama']; 

	include '../koneksi.php';
	$sql=$mysqli -> query("select * from pengaduan where status='0'");
	if ($cek=mysqli_num_rows($sql)) 
	{
	?>
	<br>
	<br>
		<div class="col-xl-4 col-md-4 mb-2">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
<?php
}}
?>
