
<!DOCTYPE html>
<html lang="en">
<?php 
	include "koneksi.php";
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="style.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
		<div id="header">
			<h1>PPH 22</h1>
		</div>	
	</div>
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Home</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="tentang_pph22.php">Tentang PPH 22 <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PPH 22 hasil produksi <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="ratepajak.php">Tarif PPH 22</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-form navbar-right">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container">
		<div id="main-content" class="col-sm-12">
			<h3>MAIN CONTENT</h3>
			<script src="code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			  <script type="text/javascript">
				$(document).ready(function(){
					var ppn  = parseInt($("#ppn").val());
					var ratepajak  = parseInt($("#ratepajak").val());
					var hargabruto  = parseInt($("#hargabruto").val());
					var total =((ppn*hargabruto)/100);
					$("#pph22").val(total);
				  });
				});
			  </script> 
			  
			<form method="post" action="proses_barang.php" >
			<center>
			<div class="form">
			<?php
			$idbarang = $_GET["idbarang"];
			include "koneksi.php";
			$sql = "select * from barang where idbarang = '$idbarang'";
			$hasil = mysqli_query($kon, $sql);
			if(!$hasil) die("Gagal query...");

			$data = mysqli_fetch_array($hasil);
			$nmbarang = $data["nmbarang"];
			$ppn = $data["ppn"];
			$ratepajak = $data["ratepajak"];
			$hargabruto = $data["hargabruto"];
			?>
			<input type="hidden" name="idbarang" value="<?php echo $idbarang;?>" />
			<table border="1">
				<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nmbarang" value="<?=$nmbarang;?>" readonly/></td>
				</tr>
				<tr>
				<td>PPN</td>
				<td><input type="text" name="ppn" id="ppn" /></td>
				</tr>
				<tr>
				<td>Rate Pajak</td>
				<td><input type="text" name="ratepajak" id="ratepajak" value="<?=$ratepajak;?>" readonly/></td>
				</tr>
				<tr>
				<td>Harga Bruto</td>
				<td><input type="text" name="hargabruto" id="hargabruto" /></td>
				</tr>
				<tr>
				<td colspan="2" align="center">
				<input type="submit" value="HITUNG" name="proses" />
				<input type="reset" value="Reset" name="reset" />
				</td>
				</tr>
			</table>
			</form>
			</center>
			</div> 
		</div>
	</div>
			<hr style="background-color: red;">
			Developer; 2018, Riska Lestari</p>
			<p>163210009</p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>