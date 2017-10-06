<? //filename: proses_mtk.php 
 
 include("db.php");
 
 if($_GET['action'] == "add"){
 	//2. Query 
 	$query = "INSERT INTO matakuliah (kode_mtk, nama_mtk)
 			VALUES('$_POST[kode_mtk]', '$_POST[nama_mtk]')";
 }else if($_GET['action'] == 'edit'){
 	//2. Query 
 	$query = = "UPDATE matakuliah 
 				SET kode_dosen = '$_POST[kode_mtk]',
 					nama = '$_POST[nama_mtk]',
 				WHERE id = $_POST[id]";
 }else if($_GET['action'] == "delete"){
 	$query = "DELETE FROM matakuliah 
 				WHERE id=$_GET[id]";
 }
 
 mysqli_query($koneksi, $query);
 
 //Redirect ke template.php
 header('Location: template.php?page=matakuliah');