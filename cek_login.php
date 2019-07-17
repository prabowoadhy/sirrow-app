<?php
 //memanggil file koneksi database
 include 'library/inc.connection.php';

 //tangkap data dari form login
 $username = $_POST['username'];
 $password = md5($_POST['password']);
//  $akses = $_POST['akses'];

 //untuk mencegah sql injection
 //kita gunakan mysql_real_escape_string

 //cek data yang dikirim, apakah kosong atau tidak
 if (empty($username) && empty($password)) {
  //kalau username dan password kosong
  header('location:login.php?error=1');
  // break;
 } else if (empty($username)) {
  //kalau username saja yang kosong
  header('location:login.php?error=2');
  // break;
 } else if (empty($password)) {
  //kalau password saja yang kosong
  //redirect ke halaman index
  header('location:login.php?error=3');
  // break;
 }
 //mencari data dengan username dan password yang sama di dalam tabel tbl_user
 $sql="select * from tb_pegawai where user_login='$username' and pass_login='$password' and jabatan='admin'";
 $q = mysqli_query($koneksidb, $sql);
 $myData = mysqli_fetch_array($q) ;
 //mengecek apakah hasil pencarian data di atas ada
 $resul = mysqli_num_rows($q);
 if ( $resul>0) {
  session_start();
  //kalau username dan password sudah terdaftar di database
  //buat session dengan nama username dengan isi nama user yang login
  $_SESSION['username_sirow'] = $username;
  $_SESSION['nama_sirow'] = $myData['nama'];
  $_SESSION['akses_sirow'] = "admin";
  $_SESSION['id_sirow'] = $myData['id_user'];

  //redirect ke halaman index
  header('location:index.php?open=Home');
 } else {
  //kalau username ataupun password tidak terdaftar di database
  header('location:login.php?error=4');
 }
?>
