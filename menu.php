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

?>
<ul class="nav menu">
	<li class="<?php if ($open=="Home"){ echo "active";}?>"><a href="?open=Home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Beranda</a></li>

	<li class="<?php if ($open=="Pengawasan-Data"){ echo "active";}?>"><a href="?open=Pengawasan-Data"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Data Pengawasan</a></li>
		<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Laporan
				</a>
				<ul class="children collapse" id="sub-item-1" style="">
		<li class="<?php if ($open=="Laporan-Layout"){ echo "active";}?>"><a href="?open=Laporan-Layout"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Laporan Mingguan</a></li>
		<li class="<?php if ($open=="Laporan-Bulan"){ echo "active";}?>"><a href="?open=Laporan-Bulan"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Laporan Bulanan</a></li>
		<li class="<?php if ($open=="Laporan-Tahun"){ echo "active";}?>"><a href="?open=Laporan-Tahun"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Laporan Tahunan</a></li>
		</ul>
		</li>
	<!-- <li class="<?php if ($open=="Laporan-Data"){ echo "active";}?>"><a href="?open=Laporan-Data"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Laporan</a></li> -->

		<li class="<?php if ($open=="Data-User"){ echo "active";}?>"><a href="?open=Data-User"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pengguna</a></li>

</ul>
