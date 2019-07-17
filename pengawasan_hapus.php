<?php
// Membaca data dari URL
$Kode	= $_GET['id'];
if(isset($Kode)){
	// Skrip menghapus data dari tabel database
	$mySql = "DELETE FROM tb_pekerjaan WHERE no_wp='$Kode'";
	$myQry = mysqli_query($koneksidb, $mySql) or die ("Error query".mysqli_error());

	// Refresh
	echo "<meta http-equiv='refresh' content='0; url=?open=Pengawasan-Data'>";
}
else {
	echo "Data yang dihapus tidak ada";
}
?>
