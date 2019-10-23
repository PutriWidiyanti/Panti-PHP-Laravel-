<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h3>Ubah Data Diri</h3>

	<a href="/Diri">Kembali</a>


	@foreach ($Diri as $p)
	<form action="/Diri/update" method="post">
		{{ csrf_field()}}
		Id <input type="text" name="id" value="{{$p->id}}"><br/>
		Nama <input type="text" required="required" name="nama" value="{{$p->nama}}"><br/>
		Alamat <textarea required="required" name="alamat">{{$p->alamat}}</textarea><br/>
		Nama Orang Tua/Wali <input type="text" name="nama_orangtua" value="{{$p->nama_orangtua}}"><br/>
		Pendidikan <input type="text" name="pendidikan" value="{{$p->pendidikan}}"><br/>
		Status <input type="text" name="status" value="{{$p->status}}"><br/>
		Tanggal Masuk <input type="text" name="tanggal" value="{{$p->tanggal_masuk}}"><br/>
		<input type="submit" value="Simpan Perubahan">
	</form>
	@endforeach
</body>
</html>