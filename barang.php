<?php include_once ('template_atas.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
        <title>Aplikasi Perhitungan PPh 22</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<form method="post">
<?php
	$arr_barang = array("0,1%"=>"kertas",
	"0,25%"=>"Semen", "0,3%"=>"Baja",
	"0,45%"=>"Otomotif");
	$nmbrg   = $_POST["nmbarang"] ;
	$ppn =$_POST["ppn"];
	//$ratepajak =$_POST["ratepajak"];
	$hargabruto =$_POST["hargabruto"];
	$perkalian =$ppn*$hargabruto;
	?>
<center>
<div class="form">
<table border="2">
	<tr>
	<td>Nama Barang</td>
	<td><input type="text" name="nmbarang" value="<?=$arr_barang[$nmbrg];?>" readonly/>
	</td>
	</tr>
	<tr>
	<td>PPN</td>
	<td><input type="text" name="ppn" value="<?=$ppn;?>" readonly/></td>
	</tr>
	<tr>
	<td>Rate Pajak</td>
	<td><input type="text" name="ratepajak" value="<?=$nmbrg;?>" readonly/></td>
	</tr>
	<tr>
	<td>Harga Bruto</td>
	<td><input type="text" name="hargabruto" value="<?=$hargabruto;?>" readonly/></td>
	</tr>
	<tr>
	<td>PPH 22</td>
	<td><input type="text" name="pph22" value="<?=$perkalian;?>" readonly/></td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="button" value="Hitung" name="proses" />
	<input type="reset" value="Reset" name="reset" />
	<input type="button" value="Keluar"/>
	</td>
	</tr>
</table>
</form>
</center>
</div> 
</body>
<?php include_once ('template_bawah.php') ; ?>
</html>