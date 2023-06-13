<?php
	$hostname	= "localhost"; 
	$username	= "root"; 
	$password	= ""; 
	$database	= "toko";

	$connect	= new mysqli($hostname, $username, $password, $database);
    $sql = "SELECT * FROM barang";
    $result = mysqli_query($connect, $sql);
    $json_array = array();    

	while($data = mysqli_fetch_array($result)){
        $json_array[] = $data;
    }
    echo json_encode($json_array);
?>