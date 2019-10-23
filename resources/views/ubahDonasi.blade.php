<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Data Penerimaan Donasi</title>

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
                    @foreach ($donasi as $p)
                    <form action="/Diri/upDonasi" method="post" class="register-form">
                        {{ csrf_field() }}
                        <h2>Form Ubah Data Penerimaan Donasi</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="id">Id :</label>
                                <input type="text" name="id" required="required" value="{{$p->id}}" />
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Penerimaan :</label>
                                <input type="text" name="tanggal" required="required" value="{{$p->tanggal}}" />
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama_donatur">Nama Donatur :</label>
                                <input type="text" name="nama_donatur" required="required" value="{{$p->nama_donatur}}" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="jumlah_donasi">Jumlah Donasi :</label>
                                <input type="text" name="jumlah_donasi" required="required" value="{{$p->jumlah_donasi}}" />
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