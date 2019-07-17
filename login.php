<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | SIROW</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php
  //ini digunakan untuk mengecek apakah session login username ada
  session_start();
  if (!empty($_SESSION['username_sirow'])) {
   //jika ada redirect ke halaman index
   header('location:index.php?open=Home');
  }
 ?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="cek_login.php" method="post">
                    <?php
   //kode php ini kita gunakan untuk menampilkan pesan eror
   if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
     echo '<h3 class="error">Username dan Password belum diisi!</h3>';
    } else if ($_GET['error'] == 2) {
     echo '<h3 class="error">Username belum diisi!</h3>';
    } else if ($_GET['error'] == 3) {
     echo '<h3 class="error">Password belum diisi!</h3>';
    } else if ($_GET['error'] == 4) {
     echo '<h3 class="error">Data tidak cocok, silakan cek Level, Username dan Password!</h3>';
    } else if ($_GET['error'] == 5) {
     echo '<h3 class="error">Level belum dipilih !</h3>';
    }
   }
  ?>
						<fieldset>

							<div class="form-group">
							<label>Username</label>
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
							<label>Password</label>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							
							<a class="submit"><input class="btn btn-primary" type="submit" name="commit" value="Login"></a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
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
</body>

</html>
