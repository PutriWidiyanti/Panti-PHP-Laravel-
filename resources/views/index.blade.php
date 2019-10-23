<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan Laravel</title>
</head>
<body>

	<h3>Biodata</h3>
	<a href="/Diri/tambah">+Tambah Data </a>
	<a href="/home">login</a>

	<br/>
	<br/>

	<table border ="1">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		@foreach ($Diri as $p)

		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nama}}</td>
			<td>{{$p->alamat}}</td>
			<td>
				<a href="/Diri/edit/{{$p->id}}">Ubah</a>
				<a href="/Diri/hapus/{{$p->id}}">Hapus</a>
			</td>
		</tr>
			
		@endforeach
		

	</table>
</body>
</html>