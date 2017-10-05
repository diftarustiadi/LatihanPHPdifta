<? //filename: proses_dsn.php 
 
 include("db.php");
 
 if($_GET['action'] == "add"){
 	//2. Query 
 	$query = "INSERT INTO mahasiswa (kode_dosen, nama)
 			VALUES('$_POST[kode_dosen]', '$_POST[nama]')";
 }else if($_GET['action'] == 'edit'){
 	//2. Query 
 	$query = = "UPDATE mahasiswa 
 				SET kode_dosen = '$_POST[kode_dosen]',
 					nama = '$_POST[nama]',
 				WHERE id = $_POST[id]";