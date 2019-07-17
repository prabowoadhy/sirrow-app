<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laporan Per Item Pengawasan</title>
    <link href="css/styles_cetak.css" rel="stylesheet" type="text/css">
  </head>
  <body style="background-color:#eee;">
    <div id="warp" style="width:800px; margin:20px auto; padding:20px; border: #000 solid 1px;background-color:#fff;">
    <table style="border-collapse: collapse;width: 100%;">
    <tr>
    	<td style="border-bottom: 1px #000 solid;"><img src="images/mitra_logo.jpg" style="height:120px; margin-left:20px;"></td>
    	<td  style="border-bottom: 1px #000 solid;" align="center"><h1 style="font-size:44px;margin-bottom: -20px;margin-top:0px;"> MITRA ASLI 72 KSO </h1>
    	<h4>Jln Trijaya XI No. 09 Madiun Telp. (0351) 471502 Email : pt.mksm.mdn@gmail.com</h4></td>
    </tr>
    <tr>
    </table>
    <center><h2>Laporan Pengawasan Pekerjaan</h2></center>
    <table width="800" border="0" cellspacing="1" cellpadding="4" class="table-print">
      <tr style="background-color:#eee;">
    		<td colspan="3"><p><strong>DATA PENGADU</strong></p></td>
    	</tr>
    	<tr>
        <td width="100px"> No. Aduan  </td>
        <td width="10"> : </td>
        <td width="254" valign="top"><strong><?php echo $kolomData['id_laporan']; ?></strong></td>
      </tr>
      <tr>
        <td> Tgl. Aduan  </td>
        <td> : </td>
        <td valign="top"><?php echo $kolomData['waktu']; ?></td>
      </tr>
      <tr>
        <td> Pengadu </td>
        <td> : </td>
        <td valign="top"><?php echo $kolomData['nama_pengadu']; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table>
    <table width="800">
    	<tr>
    		<td colspan="3" style="background-color:#eee;"><p><strong>ISI ADUAN </strong></p></td>
    	</tr>
    <tr>
    	<td width="100px" valign="top">Instansi </td>
    	<td width="10"  valign="top"> : </td>
    	<td width="254"><?php echo $kolomData['nama_instansi']; ?></td>
    </tr>
    <tr>
    	<td valign="top">Judul </td>
    	<td width="10"  valign="top"> : </td>
    	<td width="254"><?php echo $kolomData['judul']; ?></td>
    </tr>
    <tr>
    	<td valign="top">Keterangan </td>
    	<td  valign="top"> : </td>
    	<td><?php echo $kolomData['keterangan']; ?></td>
    </tr>
    <tr>
    	<td valign="top">Foto </td>
    	<td valign="top"> : </td>
    	<td><?php if ($kolomData['gambar']=="") { ?>Gambar Tidak Tersedia<?php } else {?><img src="../images/<?php echo $kolomData['gambar']; ?>" height="200px"><?php }?></td>
    </tr>
    </table>
    <br><br><br>
    <div class="ttd" style="margin-left: 550px;">

    <p>Madiun, <?php echo Indonesia2Tgl(date("Y-m-d")); ?></p>
    <p>Suprapto</p>
    <br><br><br><br><br>
    </div>
    <img src="images/btn_print.png" height="20" onClick="javascript:window.print()" />

    </div>

  </body>
</html>
