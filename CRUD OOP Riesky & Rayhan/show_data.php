<?php 	
include('koneksi.php');
$db = new database();
$data_siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  
<table border="1">
		<tr>
      <th>No</th>
			<th>Nis</th>
			<th>MTK</th>
			<th>Inggris</th>
			<th>DPK</th>
      <th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['Nis']; ?></td>
				<td><?php echo $row['MTK']; ?></td>
				<td><?php echo $row['Inggris']; ?></td>
				<td><?php echo $row['DPK']; ?></td>
				<td>
					<!-- <a href="edit.php?id=<?php echo $row['Nis']; ?>&action=update">Update</a> -->
					<!-- <a href="delete.php?id=<?php echo $row['Nis']; ?>&action=hapus">Delete</a> -->
          <a href="delete.php?id=<?php echo $row['Nis']; ?>&action=hapus">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
    <tr>
  </tr>
	</table>
      <td><a href ='add_data.php'>Tambah Data</a></td>
</body>
</html>