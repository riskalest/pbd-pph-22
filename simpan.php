 <?php
include 'koneksi.php';
$nmbarang = $_POST["nmbarang"];
$ppn = $_POST["ppn"];
$ratepajak = $_POST["ratepajak"];
$hargabruto = $_POST["hargabruto"];
$pph22 = $_POST["pph22"];

$sql = "insert into hitung (nmbarang,ppn,ratepajak,hargabruto,pph22) values ('$nmbarang',$ppn,$ratepajak,$hargabruto,$pph22) ";
$hasil = mysqli_query($kon, $sql);

if(!$hasil){
	echo "Gagal Simpan, silahkan diulangi!<br />";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
	}else{
		echo "Data anda telah berhasil disimpan";
	}
?>