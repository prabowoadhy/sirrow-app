<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Laporan Tahunan</h1>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">

					<div class="col-md-2">
						<select class="form-control" id="tahun">
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						</select>
					</div>
					<div class="col-md-6">
						<a class="btn btn-primary btn-sm" onclick="sisiptahun()">Kalkulasi</a>
						<a class="btn btn-primary btn-sm" onclick="printTahun()">Print Content</a>
					</div>
				</div>
<br style="border-bottom:solid 1px #000;"></br>
<div id="printLap" style="width:100%; height:100%; overflow: hidden;">
  <iframe id="framUe" src="laporan_tahunan.php" style="overflow: hidden; border: 0px solid #fff; width: 133%; height: 700px; margin-bottom: -5px; -ms-zoom:0.75; -moz-transform:scale(0.75); -moz-transform-origin:0.0; -o-transform:scale(0.75); -o-transform-origin:0 0; -webkit-transform:scale(0.75); -webkit-transform-origin:0 0; "></iframe>
</div>
</div>
</div>
</div>
</div>
