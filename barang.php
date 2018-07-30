
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
    <title>PPH 22 Hasil Produksi</title>

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
			<h3>HITUNG</h3>
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
			<form class="form-horizontal">
			<div class="form-group">
			<div class="col-sm-6">
				<label for="namaBarang" class="col-sm-4 control-label">Nama Barang</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="namaBRG" name="nmbarang" value="<?=$nmbarang;?>" readonly/>
					</div>
			</div>	
			<div class="col-sm-6">
				<label for="ppN" class="col-sm-4 control-label">PPN</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" placeholder="pajak" id="ppn" name="ppn">
					</div>
			</div>
			</div> </br> </br></br>
			<div class="form-group">
			<div class="col-sm-6">
				<label for="ratePajak" class="col-sm-4 control-label">Rate Pajak</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control"   name="ratepajak" id="ratepajak" value="<?=$ratepajak;?>" readonly/>
					</div></br>
			</div>	
			<div class="col-sm-6">
				<label for="hargaBruto" class="col-sm-4 control-label">Harga Bruto</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" placeholder="harga" id="hargabruto" name="hargabruto">
					</div>
			</div>
			</div></br> </br></br>
			<div class="form-group">
			<div class="col-sm-6">
				<label for="satuan" class="col-sm-4 control-label">Jumlah</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control"  placeholder="jumlah satuan" name="satuan" id="satuan" > 
					  <label for="satuan" class="control-label">*Rim/Zak/Kg/per</label>
					</div>
			</div>	
			</div></br> </br></br>
			<div class="form-group">
			<div class="col-sm-6">
				<div class="col-sm-offset-9 col-sm-3">
					  <button type="submit" name="proses" class="btn btn-primary">HITUNG</button>
					</div>
			</div>	
			<div class="col-sm-6">
				<div class="col-sm-offset-1 col-sm-11">
					  <button type="reset" name="hapus" class="btn btn-primary">RESET</button>
					</div>
			</div>
			</div></br> </br></br>
			</form>
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