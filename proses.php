<?php
include "koneksi.php";
$aksi = $_POST['aksi'];
switch($aksi){
	case "tambah" :
		$kode	= $_POST['kode'];
		$obat	= $_POST['obat'];
		$jenis	= $_POST['jenis'];
		$a = mysql_query("INSERT INTO obat VALUES ('$kode', '$obat', '$jenis') ");
		if($a == true){
			echo "<script>alert('Tambah data sukses.');</script>";
		}else{
			echo "<script>alert('Tambah data gagal.');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="3;URL=index.php" />