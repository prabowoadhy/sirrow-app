<?php
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
$instansi = $_SESSION['akses_sirow'];

?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengawasan</h1>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">

			  <thead>
			  <tr>
          <th data-sortable="true">No WP</th>
  				<th data-sortable="true">Tanggal</th>
  				<th data-sortable="true">Pengawasan</th>
  				<th data-sortable="true">Pengawas K3</th>
  				<th data-sortable="true">Pekerjaan</th>
  				<th data-sortable="true">Lokasi</th>
  				<th>Foto</th>
  				<th>Opsi</th>`
			  </tr>
			  </thead>
			  <tbody>
			  <?php
				$mySql = "SELECT * from tb_pekerjaan";
				$myQry = mysqli_query($koneksidb,$mySql) or die ("error Query".mysqli_error($koneksidb));
				$nomor = 0;
				while ($myData = mysqli_fetch_array($myQry)) {
					$nomor++;
					$Kode = $myData['id_'];
					?>
			  <tr>
				<td><?php echo $myData['no_wp']; ?></td>
				<td><?php echo $myData['tanggal']; ?></td>
				<td><?php echo $myData['pengawas_pekerjaan']; ?></td>
				<td><?php echo $myData['pengawas_k3']; ?></td>
				<td><?php echo $myData['pekerjaan']; ?></td>
        <td><?php echo $myData['lokasi']; ?></td>
				<td><?php if ($myData['foto']=="") {?> gambar tidak tersedia<?php } else {?> <a id="myImg" href="images_upload/<?php echo $myData['foto']; ?>">
					<img id="myImg" src="images_upload/<?php echo $myData['foto']; ?>" style="height:40px;"></a> <?php } ?></td>
				<td>
          <div class="btn-group btn-group-sm" role="group" aria-label="...">
            <a class="btn btn-warning btn-sm" href="?open=Cek-Map&lat=<?php echo $myData['koor_lat']; ?>&ln=<?php echo $myData['koor_lon']; ?>">Cek Map</a>
						<a target="_self" onclick="return confirm("ANDA YAKIN AKAN MENGHAPUS DATA KATEGORI INI ... ?")" class="btn btn-danger btn-sm" href="?open=Pengawasan-Hapus&id=<?php echo $myData['no_wp']; ?>">Hapus</a>
          </div></td>
			  </tr>
			  <?php
				} ?>
			  </tbody>
			</table>
			<script>
		$(function () {
			$('#hover, #striped, #condensed').click(function () {
				var classes = 'table';

				if ($('#hover').prop('checked')) {
					classes += ' table-hover';
				}
				if ($('#condensed').prop('checked')) {
					classes += ' table-condensed';
				}
				$('#table-style').bootstrapTable('destroy')
					.bootstrapTable({
						classes: classes,
						striped: $('#striped').prop('checked')
					});
			});
		});

		function rowStyle(row, index) {
			var classes = ['active', 'success', 'info', 'warning', 'danger'];

			if (index % 2 === 0 && index / 2 < classes.length) {
				return {
					classes: classes[index / 2]
				};
			}
			return {};
		}
	</script>
			</div>
		</div>
	</div>
</div>
