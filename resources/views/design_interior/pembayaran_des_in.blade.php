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

                        <h1 class="text-dark">{{$type}}</h1>


                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- main -->
            <div class="row mt-2 mb-2">


                <div class="col-md-4">
                    <img src="{{asset('uploads/').'/'.$produk->gambar }}" style="width: 350px; height: 350px; background-color: rgba(0,0,255,0.1);" alt="...">
                    <label>Harga : Rp. {{$produk->harga}}</label>
                    <label>Keterangan : {{$produk->diskripsi}}</label>

                </div>

                <div class="col-md-8">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h5 class="card-title">
                                Pembayaran Desain
                            </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="m-3">
                            <label> <b>Terima kasih telah melakukan pemesanan</b></label>
                            <br />
                            <label> <b>No Order Kamu adalah</b></label>
                            <br />
                            <h5><b>{{$id_order}}</b></h5>
                            <br />

                            silahkan menyelesaikan order tersebut
                            <br />
                            Pembayaran dapat dilakukan melalui :
                            <br />
                            <b>BCA : 200300330</b>
                            <br />
                            <b>BRI : 16002929393939</b>

                            <div>

                            </div>

                            <a href="/konfirmasipembayaran" class="btn btn-primary mt-5">Konfirmasi Pembayaran</a>
                        </div>
                    </div>
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