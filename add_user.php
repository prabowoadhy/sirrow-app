<?php
if(isset($_POST['btnSimpan']))
{
 // variables for input data
$nip = $_POST['nip'];
 $nama = $_POST['nama'];
 $level = $_POST['level'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql_query = "INSERT INTO `tb_pegawai` (`nip`,`nama`, `user_login`, `pass_login`, `jabatan`) VALUES('$nip', '$nama','$username','".md5($password)."','$level')";
 $myQry=mysqli_query($koneksidb, $sql_query) or die ("Gagal query".mysqli_error($koneksidb));
 if($myQry){

  ?>
  <script type="text/javascript">
  alert('Data Berhasil Ditambahkan ');
  window.location.href='index.php?open=Data-User';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Error !! Gagal Menambahkan Data ');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Tambah Pengguna Baru</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Data Pengguna
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-6">
                          <form role="form" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label>NIP</label>
                                <input class="form-control" name="nip" required>
                            </div>
                              <div class="form-group">
                                  <label>Nama</label>
                                  <input class="form-control" name="nama" required>
                              </div>
                              <div class="form-group">
                                  <label>Username</label>
                                  <input class="form-control" name="username" required>
                              </div>
                              <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" name="password" type="password" required>
                              </div>
                      </div>
                      <div class="col-lg-6">

                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="level">
                                <option value="Pengawas Pekerjaan">Pengawas Pekerjaan</option>
                                <option value="Pengawas K3">Pengawas K3</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default" name="btnSimpan">Simpan</button>
                      </div>
                  </div>
              </form>
                  <!-- /.row (nested) -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
