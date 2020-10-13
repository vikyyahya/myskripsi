<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT Artha Kreasi Makmur</title>
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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset ('lte3/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset ('lte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset ('lte3/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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
                        <h1 class="text-dark">My Order</h1>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="row">
                <div class="col">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title"> Data order
                            </h3>
                            <div class="card-tools">

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @foreach($order ?? '' as $s)

                            <div class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="progress-label">
                                        <span>{{$s->produks->nama_produk}}</span>
                                    </div>
                                    <div class="progress-percentage">
                                        <span>{{$s->progress}}</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-default" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$s->progress}};"></div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- main -->

            <!-- /.card -->

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


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset ('lte3/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset ('lte3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset ('lte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset ('lte3/dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset ('lte3/dist/js/demo.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{asset ('lte3/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset ('lte3/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset ('lte3/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset ('lte3/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset ('lte3/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- file -->
    <script src="{{asset ('lte3/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>

    <!-- PAGE SCRIPTS -->
    <script src="{{asset ('lte3/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{asset ('lte3/dist/js/pages/dashboard2.js')}}"></script>

</body>

</html>