<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="abc.php" method="POST" name="biodata" onSubmit="return validasi()">
	<table>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" name="nik"></td>
		</tr>
		<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>
				<select name="jabatan" id="">
					<option value="pilih" selected>--pilih--</option>
					<option value="BM">Branch Manager</option>
					<option value="INS">Instruktur</option>
					<option value="ADM">Admin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>
</form>
Script JavaScript :

<script>

function validasi(){
	var x = document.forms["biodata"]["nama"].value;
	if (x == null || x == "") {
		alert("Nama Tidak Boleh Kosong");
		return false;
	}
	var x = document.forms["biodata"]["nik"].value;
	if (x == null || x == "") {
		alert("Nik Harus Angka");
		return false;
	}
	var x = document.forms["biodata"]["umur"].value;
	if (x == null || x == "") {
		alert("Umur Tidak Boleh Kosong");
		return false;
	}
	var x = document.forms["biodata"]["jabatan"].value == "pilih";
	if (x == null || x == "") {
		alert("Anda Belom Memilih Jabatan");
		return false;
	}
}
</script>
  </body>
</html>
