<?php
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
include_once "library/cek_session.php";
include_once "library/inc.cekuser.php";
date_default_timezone_set("Asia/Jakarta");
if($_GET) {
	if($_GET['open']){
		$open = $_GET['open'];
	} else {
		$open="Home";
	}
} else {
	$open="Home";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->


    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
<style>
.sidebar ul.nav .active a, .sidebar ul.nav li.parent a.active, .sidebar ul.nav .active > a:hover, .sidebar ul.nav li.parent a.active:hover, .sidebar ul.nav .active > a:focus, .sidebar ul.nav li.parent a.active:focus {
	background-color:#007ac4;
}
.breadcrumb {
    background: #b2dfdb;
}
</style>
<script>
function print2() {
	window.open('laporan_pengawasan.php?print=TRUE', width=330,height=330,left=100, top=25);
}
function printContent(el){
var restorepage = document.body.innerHTML;
var printcontent = document.getElementById(el).outerHTML;
document.body.innerHTML = printcontent;
window.print();
document.body.innerHTML = restorepage;
}
}
</script>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#007bc3; border:0;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="?open" style="width:70px;"><img alt="Brand" src="images/mitra_logo.jpg" class="img-circle" style="height:40px;"></a><h4 class="navbar-text" style="font-family: initial; margin:5px 0 0 10px; "><strong>Mitra Asli KSO </strong><br><small><span style="color:#FFF"> Jln Trijaya XI No. 09 Madiun Telp. (0351) 471502 Email : pt.mksm.mdn@gmail.com</span></small></h4>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<svg class='glyph stroked male user '><use xlink:href='#stroked-male-user'/></svg><?php echo $_SESSION['nama_sirow'] ?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">

							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<!--<input type="text" class="form-control" placeholder="Search">-->
			</div>
		</form>

	  <?php include "menu.php"; ?>


</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="?open=Home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><?php echo $open;?></li>
			</ol>
		</div><!--/.row-->
	<?php include "buka_file.php"; ?></div>
	<div id="myModal" class="modal">

	  <!-- The Close Button -->
	  <span class="close">&times;</span>

	  <!-- Modal Content (The Image) -->
	  <img class="modal-content" id="img01">

	  <!-- Modal Caption (Image Text) -->
	  <div id="caption"></div>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	    modal.style.display = "block";
	    modalImg.src = this.src;
	    captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";

		$('#calendar1').datepicker({
			format:'dd-mm-yyyy'
		});

		$('#calendar2').datepicker({
			format:'dd-mm-yyyy'
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script type="text/javascript">
	$(function() {
	    $("#gambar").on("change", function()
	    {
	        var files = !!this.files ? this.files : [];
	        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

	        if (/^image/.test( files[0].type)){ // only image file
	            var reader = new FileReader(); // instance of the FileReader
	            reader.readAsDataURL(files[0]); // read the local file

	            reader.onloadend = function(){ // set image data as background of div
	                $("#imagePreview").css("background-image", "url("+this.result+")");
	            }
	        }
	    });
	});
	function sisipBulan(){
		var par1 = document.getElementById('bulan').value;
	var thn = document.getElementById('tahun').value;
		$('#framUe').attr('src', 'laporan_bulanan.php?mulai='+thn+'-'+par1+'-1&sampai='+thn+'-'+par1+'-31');
	}

	function sisiptahun(){
	var thn = document.getElementById('tahun').value;
		$('#framUe').attr('src', 'laporan_tahunan.php?mulai='+thn);
	}

	function printMinggu() {
		var par1 = document.getElementById('mulai1').value;
		var par2 = document.getElementById('akhir1').value;
		window.open('laporan_pengawasan.php?print=TRUE&mulai='+par1+'&sampai='+par2);
	}
	function printBulan(){
		var par1 = document.getElementById('bulan').value;
	var thn = document.getElementById('tahun').value; window.open('laporan_bulanan.php?print=TRUE&mulai='+thn+'-'+par1+'-1&sampai='+thn+'-'+par1+'-31');
	}

	function printTahun(){
	var thn = document.getElementById('tahun').value; window.open('laporan_tahunan.php?print=TRUE&mulai='+thn);
	}
	function sisip(){
		var par1 = document.getElementById('mulai1').value;
		var par2 = document.getElementById('akhir1').value;

		$('#framUe').attr('src', 'laporan_pengawasan.php?mulai='+par1+'&sampai='+par2);
		document.getElementById('mulai1').value = par1;
		document.getElementById('akhir1').value = par2;
	}
	</script>

</body>

</html>
