<?php

$id = $_GET['id'];

require_once('koneksi.php');

$sql = "DELETE FROM tb_pegawai WHERE id = $id;";


if(mysqli_query($con,$sql)){
	echo 'Berhasil Hapus Pegawai';
}else{
	echo 'Gagal Hapus Pegawai';
}

mysqli_close($con);
?>