<?php
if(isset($_GET['edit_id']))
{
 $id = $_GET['edit_id'];
 $sql_query="SELECT * FROM tb_pegawai WHERE id_= '$id' ";
 $result_set=mysqli_query($koneksidb, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
 $passL=$fetched_row['pass_login'];
}
if(isset($_POST['btnUbah']))
{
 // variables for input data

 $nama = $_POST['nama'];
 $level = $_POST['level'];
 $username = $_POST['username'];
 $passwordB = $_POST['passwordB'];
 // $passwordL = $_POST['passwordL'];



 if (trim($passwordB)=="") {
			$sqlSub = " pass_login='$passL'";
		}
		else {
			$sqlSub = "  pass_login ='".md5($passwordB)."'";
		}

 $sql_query = "UPDATE tb_pegawai SET user_login	= '$username', $sqlSub,
						nama	= '$nama', jabatan = '$level'
				WHERE id_ ='$id'";
 // sql query execution function
 $myQry = mysqli_query($koneksidb,$sql_query) or die ("Gagal query".mysqli_error($koneksidb));
 if($myQry)
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diubah ');
  window.location.href='index.php?open=Data-User';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Error !! Gagal Mengubah Data ');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Ubah Data Pengguna</h1>
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
                                  <label>Nama</label>
                                  <input class="form-control" name="nama" Value="<?php echo $fetched_row['nama']; ?>">
                              </div>
                              <div class="form-group">
                                  <label>Username</label>
                                  <input class="form-control" name="username" Value="<?php echo $fetched_row['user_login']; ?>">
                              </div>
                              <!-- <div class="form-group">
                                  <label>Password Lama</label>
                                  <input class="form-control" name="passwordL" type="password" placeholder="Kosongkan Jika tidak ingin mengubah">
                              </div> -->
                              <div class="form-group">
                                  <label>Password Baru</label>
                                  <input class="form-control" name="passwordB" type="password" placeholder="Kosongkan Jika tidak ingin mengubah">
                              </div>
                      </div>
                      <div class="col-lg-6">

                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level">
                              <?php
                              $data = ["Pengawas Pekerjaan","Pengawas K3","admin"];
                              foreach ($data as $key) {
                                if ($key==$fetched_row['jabatan']) {
                                  echo "<option value='$key' selected>$key</option>";
                                } else {
                                  echo "<option value='$key'>$key</option>";
                                }
                              }
                              ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default" name="btnUbah">Simpan</button>
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
