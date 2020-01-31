<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];

		$sql = "INSERT INTO tb_pegawai (nama,posisi, gajih) VALUES ('$name', '$desg', '$sal')";

		require_once('koneksi.php');

		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Pegawai';
		}else{
			echo 'Gagal Menambahkan Pegawai';
		}

		mysqli_close($con);
	}
?>