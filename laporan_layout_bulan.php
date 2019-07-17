<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Laporan Bulanan</h1>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<select class="form-control" id="bulan">
						<?php
						$namaBln = array("1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni",
										 "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
						$val = ["00","01","02","03","04","05","06","07","08","09","10","11","12"];
					 for ($i=1; $i < 13; $i++) {
						 if (date("m")==$val[$i]) {
						 	$selected="selected";
						} else {
							$selected="";
						}
						echo '<option value="'.$val[$i].'" '.$selected.'>'.$namaBln[$i].'</option>';
						}

						?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control" id="tahun">
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						</select>
					</div>
					<div class="col-md-6">
						<a class="btn btn-primary btn-sm" onclick="sisipBulan()">Kalkulasi</a>
						<a class="btn btn-primary btn-sm" onclick="printBulan()">Print Content</a>
					</div>
				</div>
<br style="border-bottom:solid 1px #000;"></br>
<div id="printLap" style="width:100%; height:100%; overflow: hidden;">
  <iframe id="framUe" src="laporan_bulanan.php" style="overflow: hidden; border: 0px solid #fff; width: 133%; height: 700px; margin-bottom: -5px; -ms-zoom:0.75; -moz-transform:scale(0.75); -moz-transform-origin:0.0; -o-transform:scale(0.75); -o-transform-origin:0 0; -webkit-transform:scale(0.75); -webkit-transform-origin:0 0; "></iframe>
</div>
</div>
</div>
</div>
</div>
