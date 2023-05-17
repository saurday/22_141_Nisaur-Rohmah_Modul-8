<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<a href="konten.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Dosen</td>
				<td><input type="text" name="dosen"></td>
			</tr>
			<tr>			
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>			
				<td>Ket</td>
				<td><input type="text" name="ket"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>