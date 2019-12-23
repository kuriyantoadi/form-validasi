<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
</head>
<body>
	<center><h2>WWW.MALASNGODING.COM</h2></center>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()">
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="sekolah"></textarea>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var sekolah = document.getElementById("sekolah").value;
		if (nama != "" && email!="" && sekolah !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>
