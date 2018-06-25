<?php include_once ('template_atas.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
        <title>Aplikasi Perhitungan PPh 22</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
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
//$ppn = $_POST["ppn"];
//$ratepajak = $_POST["ratepajak"];
//$hargabruto = $_POST["hargabruto"];*/
//$perkalian =($ppn*$ratepajak*$hargabruto)/100;
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
</body>
<?php include_once ('template_bawah.php') ; ?>
</html>