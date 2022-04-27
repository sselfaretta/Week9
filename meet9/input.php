<html>
<head><title>Input Biodata</title></head>

<center><h1>Masukkan Data Biodata Anda</h1></center>

<form method="POST" action="biodata.php">

<table>
<tr>
<td></td>
<td>NPM</td>
<td><input type="text" name="npm" size="20"></td>
</tr>

<tr>
<td></td>
<td>Nama Lengkap</td>
<td><input type="text" name="nama" size="20"></td>
</tr>

<tr>
<td></td>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal">
</tr>

<tr>
<td></td>
<td>Alamat</td>
<td><textarea cols="20" rows="5" name="alamat"></textarea></td>
</tr>

<tr>
<td></td>
<td>
	Jenis Kelamin</td>
<td>
	<input type="radio" name="jenis_kelamin" value="Pria" checked>
	Pria &nbsp;&nbsp;
	<input type="radio" name="jenis_kelamin" value="Wanita">
	Wanita</td>
</tr>

<td></td>
<td>
	Status
</td>
<td>
	<input type="radio" name="status" value="Menikah" checked>
	Menikah
	<input type="radio" name="status" value="Belum Menikah">
	Belum Menikah</td>
</tr>

<tr>
<td></td>
<td>Hobi</td>
<td><input type="text" name="hobi" size="20"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="btnKirim" value="Kirim"></td>

</table>
</form>
</body>
</html>