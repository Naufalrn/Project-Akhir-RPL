<?php
	include 'koneksi.php';

	$owner			= $_POST['owner'];
	$toko		    = $_POST['toko'];
    $alamat			= $_POST['alamat'];
	$cabang			= $_POST['cabang'];
	
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		header("location:index.html?alert=gagal_ekstensi");
	}else{
		if($ukuran < 10440700){		
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);
			mysqli_query($connect, "UPDATE profile SET owner = '$owner', toko = '$toko', alamat = '$alamat', cabang = '$cabang', foto = '$xx' WHERE id = 1;");
			
			header("location:profile.php?alert=berhasil");
		}else{
			header("location:index.html?alert=gagak_ukuran");
		}
	}



?>