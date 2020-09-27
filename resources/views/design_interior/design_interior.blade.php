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

    <!--==========================
  Header
  ============================-->
    @include('header_user')

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
            <div class="row mt-2 mb-2">
                @foreach ($design_interior as $set)
                <div class="card ml-2 " style="width: 16rem">
                    <img src="{{asset('uploads/').'/'.$set->gambar }}" class="card-img-top" alt="...">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">{{$set->title}}</h5>
                        <p class="card-text">{{$set->diskripsi}}</p>
                        <a href="/design-interior/detail/{{$set->id}}" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
                @endforeach

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
    <script src="{{asset ('nembiz/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset ('nembiz/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset ('nembiz/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset ('newbiz/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset ('newbiz/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset ('newbiz/js/main.js')}}"></script>

</body>

</html>