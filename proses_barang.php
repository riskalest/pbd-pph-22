<?php include_once ('template_atas.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
        <title>Aplikasi Perhitungan PPh 22</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<form action="simpan.php" method="post"> 
<center>
<div class="form">
<?php
$nmbarang = $_POST["nmbarang"];
$ppn = $_POST["ppn"];
$ratepajak = $_POST["ratepajak"];
$hargabruto = $_POST["hargabruto"];
$perkalian =($ppn*$ratepajak*$hargabruto)/100;
?>
<input type="hidden" name="idbarang" value="<?php echo $idbarang;?>" />
<table border="1">
	<tr>
	<td>Nama Barang</td>
	<td><input type="text" name="nmbarang" value="<?=$nmbarang;?>" readonly/></td>
	</tr>
	<tr>
	<td>PPN</td>
	<td><input type="text" name="ppn" id="ppn" value="<?=$ppn;?>" readonly/></td>
	</tr>
	<tr>
	<td>Rate Pajak</td>
	<td><input type="text" name="ratepajak" id="ratepajak" value="<?=$ratepajak;?>" readonly/></td>
	</tr>
	<tr>
	<td>Harga Bruto</td>
	<td><input type="text" name="hargabruto" id="hargabruto" value="<?=$hargabruto;?>" readonly/></td>
	</tr>
	<tr>
	<td>PPH 22</td>
	<td><input type="text" name="pph22" id="pph22" value="<?=$perkalian;?>" readonly/></td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" value="SIMPAN"/>
	</td>
	</tr>
</table>
</form>
</center>
</div> 
</body>
<?php include_once ('template_bawah.php') ; ?>
</html>