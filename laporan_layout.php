<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Laporan</h1>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3"><input type="date" class="form-control" id="mulai1" name="mulai" placeholder="Mulai"></div>
					<div class="col-md-3"><input type="date" class="form-control" id="akhir1" name="akhir" placeholder="Akhir"></div>
					<div class="col-md-6">
						<a class="btn btn-primary btn-sm" onclick="sisip()">Kalkulasi</a>
						<a class="btn btn-primary btn-sm" onclick="printMinggu()">Print Content</a>
					</div>
				</div>
<!-- <a class="btn btn-primary btn-sm" href="laporan_pengawasan.php?print=TRUE" target="_blank">Print Content</a><br style="border-bottom:solid 1px #000;"></br> -->
<div id="printLap">
  <iframe id="framUe" src="laporan_pengawasan.php" style="overflow: auto; border: 0px solid #fff; width: 100%; height: 550px; margin-bottom: -5px;"></iframe>
</div>
</div>
</div>
</div>
</div>
