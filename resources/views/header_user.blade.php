<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="{{asset('newbiz/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="/">My Order</a></li>
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