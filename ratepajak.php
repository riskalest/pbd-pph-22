<?php include_once ('template_atas.php'); ?>
<body><h1>Tarif PPH 22 Hasil Produksi:</h1>
	<h1>
    <form action="barang.php" method="post">
	PPH 22 Hasil produksi adalah pajak yang dikenakan untuk barang hasil produksi.
	<?php
	$arr_barang = array("0,1%"=>"kertas",
	"0,25%"=>"Semen", "0,3%"=>"Baja",
	"0,45%"=>"Otomotif")
?>
<pre>
Nama Barang <select name="nmbarang">
	<?php
		foreach($arr_barang as $ratepjk => $nama_barang){
			echo "<option value='$ratepjk'>$nama_barang</option>" ;}?>
</select>
PPN	    <input type="text" name="ppn" />
Harga Bruto <input type="text" name="hargabruto" />
PPH 22	    <input type="text" name="pph22">
	<input type="submit" value="Hitung" name="proses" /><input type="reset" value="Reset" name="reset" />
</pre></form>
</h1>
</body>
<?php include_once ('template_bawah.php') ; ?>