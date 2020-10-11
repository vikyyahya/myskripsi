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

                        <h1 class="text-dark">Design Interior</h1>


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
                                Konsep Desain
                            </h5>

                        </div>
                        <!-- /.card-header -->
                        <form action="/design-interior/pembayaran/{{$produk->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <textarea name="konsep" class="textarea" placeholder="Tambahkan keterangan disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="ml-3">
                                    <input type="checkbox" class="form-check-input" value="">Dp Rp 200.000,00
                                </div>
                                <label>Centang untuk melanjutkan pemesanan</label>
                            </div>
                            <input type="submit" value="Submit" class="pull-right btn btn-primary m-3">
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #intro -->

    <main id="main">



    </main>

    <!--==========================
    Footer
  ============================-->
    @include('footer_user')
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

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