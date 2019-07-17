<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengguna</h1>
			</div>
		</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
			<div class="bootstrap-table fixed-table-toolbar pull-left"><a href="?open=Add-User" class="btn btn-primary"><svg class="glyph stroked blank document" style="height:25px; width:25px; margin:0 0 0px 0;"><use xlink:href="#stroked-blank-document"/></svg>Tambah Data</a></div>
			  <thead>
    <tr>
			<th data-sortable="true">NIP</th>
    <th data-sortable="true">Nama</th>
		<th data-sortable="true">Jabatan</th>
    <th data-sortable="true">Username</th>
    <th colspan="2">Pilihan</th>
  </tr> </thead>
  <tbody>
    <?php
 $sql_query="SELECT * FROM tb_pegawai";
 $result_set=mysqli_query($koneksidb,$sql_query);
 if ($result_set) {
 	// code...

 while($row=mysqli_fetch_array($result_set))
 {
  ?>
	<tr>
		<td><?php echo $row['nip']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['jabatan']; ?></td>
		<td><?php echo $row['user_login']; ?></td>
  <td align="center"><a href="?open=Edit-User&amp;edit_id=<?php echo $row['id_']; ?>"onclick="return confirm('Are you sure?');"><img src="images/edit.png" align="EDIT" /></a>  |  <a href="?open=User-Delete&delete_id=<?php echo $row['id_']; ?>"onclick="return confirm('Yakin Ingin Menghapus ?');"><img src="images/delete.png" align="DELETE"/></a></td>
        </tr>
        <?php
 } }
 ?>
</tbody>
</table>

</div>
</div>
</div>
</div>
