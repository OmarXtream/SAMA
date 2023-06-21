    <!-- HEADER -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{asset('frontend/images/logo-head.png')}}" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">المدونة</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('InfoForm') }}">حلول تمويلية</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('PropertiesMarkating') }}">تسويق عقار</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('PropertieRequest') }}">طلب عقار</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('property') }}">العقارات</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">الرئيسية</a></li>
                    </ul>

                    <ul class="navbar-nav ">
                        <li>
                                @guest

                            	<li class="nav-item"><a class="nav-link" href="{{route('login')}}"><i class="fa fa-key"></i> دخول</a></li>
                                @endguest

                                @auth

                                {{ ucfirst(Auth::user()->username) }}

                                <a style="display: inline;" class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons"></i><i class="fa fa-sign-out"></i>
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
    
                                @endauth

                            </li>
                    </ul>

                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
    <!-- END HEADER -->
