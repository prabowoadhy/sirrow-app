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
  $sqlSub = "`tb_pekerjaan`.`tanggal` BETWEEN '".$_GET['mulai']."' AND '".$_GET['sampai']."'";
  $notif = "Per Bulan ".Indonesia2Bln($_GET['mulai'])." ".$thn=substr($_GET['mulai'],0,4);
} else {
  $sqlSub = "`tb_pekerjaan`.`tanggal` BETWEEN '2018-".date("m")."-1' AND '2018-".date("m")."-31'";
  $notif = "Per Bulan ".Indonesia2Bln(date("Y-m-d"))." ".$thn=substr(date("Y-m-d"),0,4);
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
    <center><h2>Laporan Pengawasan Pekerjaan <br><?php echo $notif; ?> </h2></center>
    <table width="100%" border="1px #000 solid" cellspacing="1" cellpadding="4" class="table-print">

      <thead>
      <tr>
        <th data-sortable="true">No WP</th>
        <th data-sortable="true">Tanggal</th>
        <th data-sortable="true">Pengawas Pekerjaan</th>
        <th data-sortable="true">Pengawas K3</th>
        <th data-sortable="true">Pekerjaan</th>
        <th data-sortable="true">Lokasi</th>
        <th data-sortable="true">Pekerja</th>
      </tr>
      </thead>
      <tbody>
      <?php
      include_once "library/inc.connection.php";
      include_once "library/inc.library.php";
      $mySql = "SELECT * from tb_pekerjaan where $sqlSub";
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
      <td><?php
        $id = $myData['no_wp'];
        $mySql1 = "SELECT * from tb_wp_pekerja where no_wp = '$id'";
        $myQry1 = mysqli_query($koneksidb,$mySql1) or die ("error Query".mysqli_error($koneksidb));
        while ($myData1 = mysqli_fetch_array($myQry1)) {
          echo $myData1['nama_pekerja'].", "; }?></td>
      </tr>
      <?php
      } ?>
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
