<style type="text/css">
@media print{
	#tombol {
		display: none;
	}
}
</style>
<div id="tombol">
	<input type="button" value="Hitung Lagi"
		onClick="window.location.assign('ratepajak.php')">
	<input type="button" value="print" onClick="window.print()">
</div>
<?php
	$nmbarang = $_GET["nmbarang"];
	include "koneksi.php";
	$sqlTableHitung = "select * from hitung where nmbarang = $nmbarang";
	$hasilhitung = mysqli_query($kon, $sqlTableHitung);
	$rowhitung = mysqli_fetch_assoc($hasilhitung);
	
	echo "<pre>";
	echo "<h2>HASIL PERHITUNGAN</h2>";
	echo "TANGGAL : ".$rowhitung['tanggal']."<br/>";
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo " <th> Nama Barang </th>";
	echo " <th> PPh </th>";
	echo " <th> Tarif Pajak </th>";
	echo " <th> Harga Barang </th>";
	echo " <th> PPH22</th>";
	echo " <th> Tanggal </th>";
	echo "</tr>";
	
	echo "<tr>" ;
	echo " <td> ".$rowhitung['nmbarang']." </td>";
	echo " <td align='right'> ".$rowhitung['ppn']." </td>";
	echo " <td align='right'> ".$rowhitung['ratepajak']." </td>";
	echo " <td align='right'> ".$rowhitung['hargabruto']." </td>";
	echo " <td align='right'> ".$rowhitung['pph22']." </td>";
	echo " <td align='right'> ".$rowhitung['tanggal']." </td>";
	echo "</tr>";
echo "</table>";
echo "</pre>";
?>