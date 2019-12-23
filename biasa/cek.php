<?php
$nama = $_POST['nama'];

if($nama == ""){
	header("location:index.php?nama=kosong");
}else{
	echo "Nama anda adalah". $nama;
}

$sekolah = $_POST['sekolah'];

if($sekolah == ""){
	header("location:index.php?sekolah=kosong");
}else{
	echo "sekolah anda adalah". $sekolah;
}

?>
