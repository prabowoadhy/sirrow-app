<?php
$delete_id	= $_GET['delete_id'];
// delete condition
if(isset($delete_id))
{
 $sql_query="DELETE FROM tb_pegawai WHERE id_='$delete_id'";
 $myQ=mysqli_query($koneksidb, $sql_query) or die (mysqli_error($koneksidb));
 if ($myQ) {
   // code...
   echo "<meta http-equiv='refresh' content='0; url=?open=Data-User'>";
 }
}
// delete condition
?>
