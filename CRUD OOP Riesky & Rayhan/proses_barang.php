<?php 
include('koneksi.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['Nis'],$_POST['MTK'],$_POST['Inggris'],$_POST['DPK']);
	header('location:show_data.php');
}
?>