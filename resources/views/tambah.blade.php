<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Biodata</h3>

	<a href="/Diri">Kembali</a>
	<br/>
	<br/>

	<form action="/Diri/store" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id" required="required"><br/>
		Nama <input type="text" name="nama" required="required"><br/>
		Alamat <textarea name="alamat" required="required"></textarea><br/>
		Nama Orang Tua/Wali <input type="text" name="nama_orangtua" required="required"><br/>
		Pendidikan <input type="text" name="pendidikan" required="required"><br/>
		Status <input type="text" name="status" required="required"><br/>
		Tanggal Masuk <input type="text" name="tanggal" required="required"><br/>
		<input type="submit" value="Simpan Data">

	</form>
</body>
</html>