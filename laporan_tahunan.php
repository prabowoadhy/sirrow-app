<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laporan Per Item Pengawasan</title>
    <link href="css/styles_cetak.css" rel="stylesheet" type="text/css">
<?php
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
if (isset($_GET['mulai']) && $_GET['mulai']!=="") {
  // code...
  $sqlSub = "year(tanggal) = '".$_GET['mulai']."'";
  $notif = "Per Tahun ".($_GET['mulai']);
} else {
  $sqlSub = "year(tanggal) = '".date('Y')."'";
  $notif = "Per Tahun ".date('Y')."";
}

  if (isset($_GET['print'])) {
    if ($_GET['print']=="TRUE") {
      # code...
      echo '<script type="text/javascript">
        window.print();
        window.onfocus=function(){ window.close();}
      </script>';
    }
  }
 ?>

  </head>
  <body style="background-color:#eee;">
    <div id="warp" style="width:28.5cm; margin:20px auto; padding:20px; background-color:#fff;">
    <table style="border-collapse: collapse;width: 100%;">
    <tr>
    	<td style="border-bottom: 1px #000 solid;"><img src="images/mitra_logo.jpg" style="height:120px; margin-left:20px;"></td>
    	<td  style="border-bottom: 1px #000 solid;" align="center"><h1 style="font-size:44px;margin-bottom: -20px;margin-top:0px;"> MITRA ASLI 72 KSO </h1>
    	<h4>Jln Trijaya XI No. 09 Madiun Telp. (0351) 471502 Email : pt.mksm.mdn@gmail.com</h4></td>
      <td style="border-bottom: 1px #000 solid; width:180px;"><img src="" style="width:180px; margin-left:20px;" type="hidden"></td>
    </tr>
    <tr>
    </table>
    <center><h2>Laporan Pengawasan Pekerjaan</h2></center>
    <center><h2><?php echo $notif; ?> </h2></center>
    <table width="100%" border="1px #000 solid" cellspacing="1" cellpadding="4" class="table-print">

      <thead>
      <tr>
        <th data-sortable="true">No</th>
        <th data-sortable="true">Bulan Ke</th>
        <th data-sortable="true">Jenis Pengawasan</th>
        <th data-sortable="true">Jumlah Kegiatan</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $namaBln = array("1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni",
               "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
      $val = ["00","01","02","03","04","05","06","07","08","09","10","11","12"];
      $jumlp = 0;
     for ($i=1; $i < 13; $i++) { ?>
       <tr>
       <td style="text-align: center;"><?php echo $i; ?></td>
       <td><?php echo $namaBln[$i]; ?></td>
       <td style="text-align: center;">
       <?php
       $mySql = "SELECT month(tanggal) as bln, pekerjaan, COUNT(*) as jum FROM `tb_pekerjaan` WHERE month(tanggal)='$i' and $sqlSub GROUP BY pekerjaan ";
       $myQry = mysqli_query($koneksidb,$mySql) or die ("error Query".mysqli_error($koneksidb));
       $nomor = 0;
       $resul = mysqli_num_rows($myQry);
       if ($resul>0) {
       while ($myData = mysqli_fetch_array($myQry)) {

           $jumlp = $jumlp + $myData['jum'];
           // code...
?>
         <?php echo $myData['pekerjaan']; ?><br>
         <?PHP } } else {  ?>
         -
       <?php }  ?>
       </td>
       <td style="text-align: center;">
<?php
$mySql2 = "SELECT month(tanggal) as bln, pekerjaan, COUNT(*) as jum FROM `tb_pekerjaan` WHERE month(tanggal)='$i' and $sqlSub GROUP BY pekerjaan ";
$myQry2 = mysqli_query($koneksidb,$mySql2) or die ("error Query".mysqli_error($koneksidb));
$resul2 = mysqli_num_rows($myQry2);
if ($resul2>0) {
while ($myData2 = mysqli_fetch_array($myQry2)) { ?>
       <?php echo $myData2['jum']; ?> <br>
     <?php } } else { ?>
0
     <?php } ?>
     </td>
</tr>
       <?php
     } ?>
     <tr>
       <td colspan="3" style="text-align: center;">Jumlah</td>
       <td style="text-align: center;"><?php echo $jumlp; ?></td>
     </tr>
      </tbody>
    </table>
    <br><br><br>
    <div class="ttd" style="margin-left: 21cm;">

    <p>Madiun, <?php echo Indonesia2Tgl(date("Y-m-d")); ?></p>
    <br>
    <p><bold>SUPRAPTO</bold></p>
    </div>
    <!-- <img src="images/btn_print.png" height="20" onClick="javascript:window.print()" /> -->

    </div>

  </body>
</html>
