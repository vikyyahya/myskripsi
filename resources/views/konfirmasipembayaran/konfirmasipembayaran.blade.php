<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewBiz Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset ('newbiz/img/favicon.png')}}" rel="icon">

    <link href="{{asset ('newbiz/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset ('newbiz/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- file -->
    <script src="{{asset ('lte3/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- Libraries CSS Files -->
    <link href="{{asset ('newbiz/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset ('newbiz/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset ('newbiz/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset ('newbiz/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset ('newbiz/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset ('newbiz/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('header_user')
    <!--==========================
    Intro Section
  ============================-->
    <section id="services" class="clearfix">
        <div class="container">
            <div class="content-header">
                <br>
                <div class="container-fluid">
                    <div class="row mb-2">

                        <h1 class="text-dark">Konfirmasi Pembayaran</h1>


                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- main -->
            <div class="row m-3">
                <div class="col-md-12">
                    <form action="/konfirmasipmb" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Konfirmasi Pembayaran</h3>
                            </div>

                            <div class="card-body">

                                @if ($sukses = Session::get('sukses'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <i class="icon fas fa-check"></i> {{ $sukses }}
                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger">
                                    {{implode('', $errors->all(':message'))}}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>No Order</label>
                                    <input type="text" name="id" value="" placeholder="" class="form-control" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nama Bank</label>
                                    <input type="text" name="nama_bank" placeholder="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>No Rekening</label>
                                    <input type="number" name="no_rekening" placeholder="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="date" name="tanggal_pembayaran" placeholder="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Upload Bukti Pembayaran</label>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>

                                </div>


                                <div class="card-footer">

                                    <a href="/user" class="btn btn-default">Batal</a>
                                    &nbsp;&nbsp;
                                    <input type="submit" value="Konfirmasi" class="pull-right btn btn-primary">

                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
    <!-- #intro -->

    <main id="main">



    </main>

    @include('footer_user')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset ('newbiz/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset ('newbiz/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset ('newbiz/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset ('newbiz/js/main.js')}}"></script>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
    <script src="{{asset ('lte3/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>

</body>

</html>


<!-- <div class="flex-center position-ref full-height">
  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{ url('/home') }}">Dashboard</a>
          @else
              <a href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth
      </div>
  @endif

  <div class="content">
      <div class="title m-b-md">
          Selamat Datang
      </div>

     
  </div>
</div> -->