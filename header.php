<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Aplikasi Helpdesk</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<!-- Start navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="tiket.php" data-toggle="tooltip" data-placement="bottom" title="Tambah Data Tiket"><span class="glyphicon glyphicon-list"></span> Tiket</a></li>
			<li><a href="kategori.php" data-toggle="tooltip" data-placement="bottom" title="Tambah Data Kategori" ><span class="glyphicon glyphicon-user"> Kategori</a></li>
				<li><a href="cabang.php" data-toggle="tooltip" data-placement="bottom" title="Tambah Data Cabang" ><span class="glyphicon glyphicon-user"> Cabang</a></li>
					<li><a href="user.php" data-toggle="tooltip" data-placement="bottom" title="Tambah Data User" ><span class="glyphicon glyphicon-user"> User</a></li>
		  </ul>
			</form>
		</div>
	  </div>
	</nav>
	<!-- End navbar -->