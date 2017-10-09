<div class="container-fluid language_nav text-right">
    <a href="{{ action('LanguagesController@switchToArabic') }}">العربية</a> | 
    <a href="{{ action('LanguagesController@switchToEnglish') }}">English</a>  
</div>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>Menu
                <span class="icon-bar center-block"></span>
                <span class="icon-bar "></span>
                <span class="icon-bar center-block"></span>
            </button>

            <!-- Branding Image -->
            <div id="branding_div">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/branding_image.png') }}" class="img-responsive" alt="Image">
                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                
                <li class="active">
                    <a href="#">الرائيسية</a>
                </li>

                    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        المنتاجات 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">23 PPM and Up</a></li>
                        <li><a href="#">22 PPM Models</a></li>
                        <li><a href="#">HV Production MFP</a></li>                       
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        الحلول 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Office Solutions</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#">قطع الغيار و الصيانة</a>
                </li>
                <li>
                    <a href="#">إتصل بنا</a>
                </li>
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                
                <div class="hidden-xs hidden-sm hidden-md col-lg-12">
                    <p class="navbar-text">
                                          
                        <a href="#" class="navbar-link fa fa-facebook" id="nav-social-facebook" style="font-size: 1.8em; text-decoration: none; color: #3b5998;"></a>
                        <a href="#" class="navbar-link fa fa-twitter" style="font-size: 1.8em; text-decoration: none; color: #0084b4;"></a>
                        <a href="#" class="navbar-link fa fa-google-plus" style="font-size: 1.8em; text-decoration: none; color: #EA4335;"></a>
                    </p>                    
                </div>    
                <!-- Authentication Links -->
                {{-- @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif --}}
            </ul>
        </div>
    </div>
</nav>
