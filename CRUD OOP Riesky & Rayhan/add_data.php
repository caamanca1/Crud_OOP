<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses_barang.php?action=add">
<table>
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td><input type="text" name="Nis" required/></td>
	</tr>
	<tr>
		<td>MTK</td>
		<td>:</td>
		<td><input type="text" name="MTK" required/></td>
	</tr>
	<tr>
		<td>Inggris</td>
		<td>:</td>
		<td><input type="text" name="Inggris" required/></td>
	</tr>
	<tr>
		<td>DPK</td>
		<td>:</td>
		<td><input type="text" name="DPK" required/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
  <tr>
    <td><a href = 'show_data.php'>Show Data</a></td>
  </tr>
</table>
</form>
</body>
</html>