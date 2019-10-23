<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Kegiatan Panti</title>

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
                    <form action="/Diri/inKegiatan" method="post" class="register-form">
                        {{ csrf_field() }}
                        <h2>Form Pendaftaran Kegiatan Panti</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="id">Id :</label>
                                <input type="text" name="id" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="nama">Pemberi Kegiatan :</label>
                                <input type="text" name="pemberi_kegiatan" required="required" />
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama">Nama Kegiatan :</label>
                                <input type="text" name="nama_kegiatan" required="required" />
                            </div>
                        <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <textarea name="alamat" required="required" width="10 px" height="8 px"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nama_orangtua">Hari :</label>
                                <input type="text" name="hari" required="required" />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="pendidikan">Waktu :</label>
                                <input type="text" name="tanggal_jam" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="status">Status :</label>
                                <input type="text" name="status" required="required" />
                            </div>
                        </div>
                            <br><br>
                           <!--  <input type="submit" value="Reset All" class="submit" name="reset" id="reset" /> -->
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('colorlib-regform-15/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('colorlib-regform-15/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>