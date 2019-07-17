<?php
if($_GET) {
	if($_GET['open']){
		$open = $_GET['open'];
	} else {
		$open="Home";
	}
} else {
	$open="Home";
}

if($_GET) {
	switch ($_GET['open']) {
		case 'Home' :
		if (!file_exists ("main.php")) die ("File tidak ada !");
		echo "<title>$open | SIROW</title>";
		include "main.php"; break;

		#MDATA PENGAWASAN
		case 'Pengawasan-Data' :
		if (!file_exists ("pengawasan_data.php")) die ("File tidak ada !");
		echo "<title>$open | SIROW</title>";
		include "pengawasan_data.php"; break;

		case 'Pengawasan-Hapus' :
		if (!file_exists ("pengawasan_hapus.php")) die ("File tidak ada !");
		echo "<title>$open | SIROW</title>";
		include "pengawasan_hapus.php"; break;

		#DATA PEGAWAI
		case 'Pegawai-Data' :
		if (!file_exists ("pegawai_data.php")) die ("File tidak ada !");
		echo "<title>$open | SIROW</title>";
		include "pegawai_data.php"; break;

		#Mlaporan
		case 'Laporan-Layout' :
		if (!file_exists ("laporan_layout.php")) die ("File tidak ada !");
		echo "<title>$open | SIROW</title>";
		include "laporan_layout.php"; break;

		case 'Laporan-Bulan' :
			if(!file_exists ("laporan_layout_bulan.php")) die ("File tidak ada!");
			include "laporan_layout_bulan.php"; break;

		case 'Laporan-Tahun' :
			if(!file_exists ("laporan_layout_Tahun.php")) die ("File tidak ada!");
			include "laporan_layout_Tahun.php"; break;

		#CekMAP
		case 'Cek-Map':
			# code...
			if (!file_exists ("cek_map.php")) die ("File tidak ada !");
			echo "<title>$open | SIROW</title>";
			include "cek_map.php"; break;
			break;

			#Mlaporan
			case 'Data-User' :
			if (!file_exists ("data_user.php")) die ("File tidak ada !");
			echo "<title>$open | SIROW</title>";
			include "data_user.php"; break;
			case 'Add-User' :
			if (!file_exists ("add_user.php")) die ("File tidak ada !");
			echo "<title>$open | SIROW</title>";
			include "add_user.php"; break;

			case 'Edit-User' :
			if (!file_exists ("edit_user.php")) die ("File tidak ada !");
			echo "<title>$open | SIROW</title>";
			include "edit_user.php"; break;

			case 'User-Delete' :
				if(!file_exists ("delete_user.php")) die ("File tidak ada!");
				include "delete_user.php"; break;

		default :
		if (!file_exists ("main.php")) die ("File Tidak ADa !");
		echo "<title>$open | SIROW</title>";
		include "main.php"; break;

		}
		}
		else {
			if (!file_exists ("main.php")) die ("File Tidak ada !");
			echo "<title>$open | SIROW</title>";
			include "main.php";
			}
?>
