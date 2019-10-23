<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container mt-5">
	<div class="row">
	<div class="col-md-12">
		
	@if($message = Session::get('sukses'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert"></button>
		<strong>{{$message}}</strong>
	</div>	
	@endif
	</div>	

	</div>	

	</div>
</body>
</html>