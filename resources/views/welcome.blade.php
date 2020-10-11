<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pt Kreasi Artha Makmur.</title>
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

    <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="#intro" class="scrollto"><img src="{{asset('newbiz/img/logo.png')}}" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#artikel">Artikel</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#order">Order</a></li>
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#contact">Contact Us</a></li>

                    @if (Route::has('login'))
                    @auth
                    @if (Auth::user()->level == 1)
                    <li> <a href="{{ url('/home') }}">Dashboard</a></li>

                    @endif

                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li> <a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                    @endif


                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-img">
                <img src="{{asset ('newbiz/img/intro-img.jpg')}}" alt="" class="img-fluid">
            </div>

            <div class="intro-info">
                <h2>We Always<br><span>Give Solutions</span><br>for your business!</h2>
                <div>
                </div>

            </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      Artikel Section
    ============================-->
        <section id="artikel">
            <div class="container">

                <header class="section-header">
                    <h3>Artikel</h3>
                    <p>Kami adalah tim desainer rumah dengan basic arsitektur. Berpengalaman sejak 2015,
                        puluhan desain sudah kami kerjakan, dan hasilnya sangat memuaskan.</p>
                </header>

                <div class="row artikel-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                            Kebanyakan kami mengerjakan design interior dan perumahan serta perkantoran.
                            Kosep pelayanan design kami adalah design yang berkualitas dengan harga yang terjangkau.
                        </p>
                    </div>
                </div>

                <div class="row artikel-extra">
                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="{{asset ('newbiz/img/artikel-img.jpg')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                        <h3><a href="">Design Exterior</a></h3>
                        <p>
                            Design ekterior bangunan merupakan suatu karya arsitekture yang membuat tampilan konsep dan gaya
                            dari suatu masa, budaya serta teknologi masyarakat.
                        </p>
                        <p>
                            Melalui media srsitekture manusia menciptakan bangunan yang digunakan untuk kehidupan mereka melalui karya ilmiah
                            arsitekture inilah manusia membuat pilihan untuk mengolah sebuah bangunan agar tampak lebih indah dan memenuhi fungsi utamanya.
                            Exterior banunan merupakan kulit terluar yang jelas terlihat dari pencapaian ketiga factor tersebut yaitu masa, budaya dan teknologi
                        </p>
                    </div>
                </div>

                <div class="row artikel-extra">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="{{asset ('newbiz/img/artikel-extra-1.jpg')}}" class="img-fluid mb-4" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h3><a href="">Design Interior</a></h3>
                        <p>
                            Pengertian desain interior atau interior desain adalah sebuah hal yang berkenana dengan bidang kreatif
                            beserta solusi-solusi teknis yang diterapkan kedalam struktur yang dibangun.
                            Desain interior sendiri ditujukan untuk mencapai lingkungan di dalam sebuah ruang.
                        </p>
                        <p>
                            Keberadaan hal tersebut bersifat fungsional, diantaranya untuk meningkatkan kualitas kehidupan dan budaya
                            penghuninya serta memunculkan kesan memimiliki estetika dalam sebuah ruangan sehingga dapat terlihat lebih menarik.
                        </p>
                        <p>
                            Dalam desain interior sendiri, terdapat tiga hal yang tidak terlepas dari hal terseut
                            serta dijadikan sebagai acuannya, yaitu: ruang, alat, manusia
                        </p>
                    </div>
                </div>

                <div class="row artikel-extra">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                        <img src="{{asset ('newbiz/img/artikel-extra-2.jpg')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                        <h3><a href="">Design Logo & Branding</a></h3>
                        <p>
                            Design logo sangat berpengaruh pada branding suatu produk,
                            maka dari itu, buatlah logo perusahaan Anda dengan sangat bagus sehingga bukan hanya mudah diingat,
                            tetapi juga bisa mencitrakan produk produk yang Anda jual.
                        </p>
                        <p>
                            Logo merupakan representasi dari perusahaan – mendefinisikan identitas dan visi misinya.
                            Dengan adanya sebuah logo,konsumen bisa dengan sangat mudah memilih barang mana yang akan mereka beli.
                        </p>
                        <p>
                            Logo juga merupakan bagian yang tidak dapat dipisahkan dari strategi branding perusahaan.
                            Setiap konsumen memiliki pendapat yang kuat mengenai brand kesayangan
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- #artikel -->

        <!--==========================
      About Us Section
    ============================-->
        <section id="about" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p>Kami adalah tim desainer rumah dengan basic arsitektur. Berpengalaman sejak 2015,
                        puluhan desain sudah kami kerjakan, dan hasilnya sangat memuaskan. Kami memberikan service sesuai kebutuhan anda, dengan konsep yang anda inginkan
                        kami dapat mewujudkan impian anda.</p>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Exterior Rumah</a></h4>
                            <p class="description">Rumah idaman adalah indah terlihat dari luar
                                serta rahan dari segala cuaca tropis di Indonesia</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Interior</a></h4>
                            <p class="description">Menjadikan hunian anda nyaman untuk ditempati dengan menyesuaikan
                                karekter pemilik rumah dan tema yang diinginkan</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Design Logo</a></h4>
                            <p class="description">Untuk memulai bisnis baru harus memuliki identitas perusahaan dan bisnis yang dimiliki,
                                Anda dapat memberikan informasi untuk kami wujudkan menjadi logo yang diinginkan</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">Branding</a></h4>
                            <p class="description">Masih untuk support usaha bisnis anda dengan memperkenalkan produk anda melalui branding atau poster</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #about -->

        <!--==========================
      Why Us Section
    ============================-->
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>Kepercayaan yang kami pegang untuk berbisnis.</p>
                </header>

                <div class="row row-eq-height justify-content-center">

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-diamond"></i>
                            <div class="card-body">
                                <h5 class="card-title">Estimasi Biaya Terjangkau</h5>
                                <p class="card-text">Sebelum anda memilih order, anda akan ditampilkan estimasi biaya yang anda butuhkan,
                                    ini dapat membatu anda untuk mempersiapkan dana dengan hasil yang diinginkan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-language"></i>
                            <div class="card-body">
                                <h5 class="card-title">Koperatif</h5>
                                <p class="card-text">Komunikasi yang mudah dapat mempermudah anda untuk menuangkan ide yang diinginkan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-object-group"></i>
                            <div class="card-body">
                                <h5 class="card-title">Mengubah Design</h5>
                                <p class="card-text">Gambar visualisasi itu sangat penting.
                                    karena dengan gambar visualisasi yang realistik anda dapat mengetahui seperti apa desain eksterior atau interior rumah anda.. </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section>

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Coffee Shop</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset('newbiz/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Minimalis Design</a></h4>
                                <p>Exterior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Smart Home Type</a></h4>
                                <p>Exterior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Transmart</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Farm Market</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">AEON Mall</a></h4>
                                <p>Sign Logo</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Toyota Showroom</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Showroom VW</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset ('newbiz/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Sinarmas Office</a></h4>
                                <p>Interior</p>
                                <div>
                                    <a href="{{asset ('newbiz/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->


        <section id="testimonials" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">

                            <div class="testimonial-item">
                                <img src="{{asset ('newbiz/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset ('newbiz/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset ('newbiz/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset ('newbiz/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset ('newbiz/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </section><!-- #testimonials -->

        <!--==========================
      Order Section
    ============================-->
        <section id="order">
            <div class="container">
                <div class="section-header">
                    <h3>Order</h3>
                    <p>Silakan order sesuai dengan kebutuhan anda saat ini, pastikan sudah membaca cara untuk memesan dan rules pemesanan, Terima Kasih.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="member">
                            <a href="/design-exterior">
                                <img src="{{asset ('newbiz/img/order-1.jpeg')}}" class="img-fluid" alt="">
                            </a>
                            <div class="member-info">
                                <div class="member-info-content">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <a href="/design-interior">
                                <img href="/design-interior" src="{{asset ('newbiz/img/order-2.jpeg')}}" class="img-fluid" alt="">

                            </a>
                            <div class="member-info">
                                <div class="member-info-content">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <a href="/design-logo">
                                <img src="{{asset ('newbiz/img/order-3.jpeg')}}" class="img-fluid" alt="">
                            </a>
                            <div class="member-info">
                                <div class="member-info-content">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #order -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-header">
                    <h3>Our CLients</h3>
                    <p>Beberapa client kami yang mempercayakan berbagai project kepada kami.</p>
                </div>

                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-3.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-4.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-5.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-6.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-7.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset ('newbiz/img/clients/client-8.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact">
            <div class="container-fluid">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe width="600" height="400" src="https://maps.google.com/maps?hl=en&amp;q=daanmogot 47+()&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://googlemapsembed.net/" rel="nofollow">Google Maps Embed</a> </small></div>
                            <style>
                                .nvs {
                                    position: relative;
                                    text-align: right;
                                    height: 325px;
                                    width: 643px;
                                }

                                #gmap_canvas img {
                                    max-width: none !important;
                                    background: none !important
                                }
                            </style>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p>Jl.Daan Mogot No 47, Jakarta Barat</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p>kreasi.artha@gmail.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p>+62 8999 2746 24</p>
                            </div>
                        </div>

                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send
                                        Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>Kreasi Artha Makmur</h3>
                        <p>Memberikan solusi mudah dan cepat kepada anda yang membutuhkan design rumah atau usaha anda. Dengan memesan
                            design secara online dapat memberikan efisiensi waktu. Anda jug adapat berkomunikasi langsung via chat online.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            DKI Jakarta <br>
                            Ruko Daan Mogot <br>
                            Jl. Daan Mogot Raya 47<br>
                            Jakarta Barat <br>
                            <strong>Phone:</strong> +62 8999 2746 24<br>
                            <strong>Email:</strong> kreasi.artha@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Kreasi Artha MAkmur</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

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