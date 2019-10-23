<!DOCTYPE html>
<html lang="en">
<head>
	<title>Donatur Tetap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('Table_Fixed_Header/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Table_Fixed_Header/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<br><br>
	<h1 align="center">Data Donatur Tetap</h1>
	<div class="limiter">
		<div class="container-table100">
			<h4 align="center"><a href="/Diri/inputDonatur">Tambah Data Donatur Tetap</a></h4>
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<!-- <thead> -->
								<tr class="row100 head">
									<!-- <th class="cell100 column1">Nama Lengkap</th> -->
									<th class="cell100 column2">Id Donatur</th>
									<th class="cell100 column3">Nama Donatur</th>
									<th class="cell100 column4">Alamat Donatur</th>
									<th class="cell100 column5">Handphone/Telp</th>
									<th class="cell100 column6">Action</th>
								</tr>

							<!-- </thead> -->
						</table>
					</div>
					@foreach ($donatur as $p)
					<div class="table100-body js-pscroll">
						<table>
							<!-- <tbody> -->
								<tr class="row100 body">
									<!-- <td class="cell100 column1">Boxing</td> -->
									<td class="cell100 column2">{{$p->id_donatur}}</td>
									<td class="cell100 column3">{{$p->nama_donatur}}</td>
									<td class="cell100 column4">{{$p->alamat}}</td>
									<td class="cell100 column5">{{$p->telp}}</td>
									<td class="cell100 column6">

										<a href="/Diri/ubahDonatur/{{$p->id_donatur}}">Ubah</a>
										<a href="/Diri/hapusDonatur/{{$p->id_donatur}}">Hapus</a>

									</td>

								</tr>

								
							<!-- </tbody> -->
							
						</div>
						@endforeach
					</table>

					</div>

				</div>
				<h3><a href="/Diri/formAdmin">Kembali</a></h3>
			</div>
		</div>

				
<!--===============================================================================================-->	
	<script src="{{ asset('Table_Fixed_Header/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Table_Fixed_Header/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Table_Fixed_Header/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Table_Fixed_Header/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('Table_Fixed_Header/js/main.js') }}"></script>

</body>
</html>