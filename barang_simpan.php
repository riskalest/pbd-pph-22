<?php
if(isset($_POST['idbarang'])){
	$idbarang = $_POST['idbarang'];
} 
$nmbarang = $_POST['nmbarang'];
$ppn = $_POST['ppn'];
$ratepajak = $_POST['ratepajak'];
$hargabruto = $_POST['hargabruto'];

include "koneksi.php";
if($simpan == "EDIT"){
	$sql = "update barang set
			nmbarang = '$nmbarang',
			ppn = $ppn,
			ratepajak = $ratepajak,
			hargabruto = $hargabruto,
			where idbarang = $idbarang ";
}else{
	$sql = "insert into barang (nmbarang,ppn,ratepajak,hargabruto) values ('$nmbarang',$ppn,$ratepajak,$hargabruto) ";
}
$hasil = mysqli_query($kon, $sql);

if(!$hasil){
	echo "Gagal Simpan, silahkan diulangi!<br />";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
	}else{
		echo "Simpan data berhasil";
	}
?>
<hr/>
<a href="barang_tampil.php" />DAFTAR HITUNG</a> ;