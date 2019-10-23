<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Data Donatur Tetap</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-15/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-15/css/style.css')}}">
    <link href="{{ asset('colorlib-regform-15/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('sierra/img/annajiyah2.jpg')}}" alt="">
                </div>
                <div class="signup-form">
                    @foreach ($donatur as $p)
                    <form action="/Diri/upDonatur" method="post" class="register-form">
                        {{ csrf_field() }}
                        <h2>Form Ubah Data Donatur Tetap</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="id_donatur">Id Donatur :</label>
                                <input type="text" name="id_donatur" required="required" value="{{$p->id_donatur}}" />
                            </div>
                            <div class="form-group">
                                <label for="nama_donatur">Nama Donatur :</label>
                                <input type="text" name="nama_donatur" required="required" value="{{$p->nama_donatur}}" />
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="alamat">Alamat Donatur :</label>
                                <textarea name="alamat" required="required">{{$p->alamat}}</textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="telp">Handphone/Telp :</label>
                                <input type="text" name="telp" required="required" value="{{$p->telp}}" />
                            </div>
                        </div>
                            <br><br>
                           <!--  <input type="submit" value="Reset All" class="submit" name="reset" id="reset" /> -->
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('colorlib-regform-15/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('colorlib-regform-15/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>