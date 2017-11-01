<div class="container" id="language_container">
    <div class="language_nav text-right">
        <a href="{{ action('LanguagesController@switchToArabic') }}">العربية</a> |
        <a href="{{ action('LanguagesController@switchToEnglish') }}">English</a>        
    </div>
</div>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container" >
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
                <a class="navbar-brand hvr-hang" href="{{ url('/') }}">
                    <img src="{{ asset('images/branding_image.png') }}" class="img-responsive" alt="Image">
                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                
                <li class="{{ Request::routeIs('welcome')? " active":"" }}" >
                    <a href="{{url('/')}}" class="hvr-underline-from-left">Home</a>
                </li>

                    
                <li class="dropdown {{ Request::is('products/*')? "active":"" }}">
                    <a href="#" class="dropdown-toggle hvr-underline-from-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Products 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::routeIs('lineup')? "active":"" }}">
                            <a href="{{action('ProductsController@getProductLineup')}}">Products Lineup</a>
                        </li>
                        <li class="{{ Request::routeIs('23ppm')? "active":"" }}">
                            <a href="{{action('ProductsController@get23Ppm')}}">23 PPM and Up</a>
                        </li>
                        <li class="{{ Request::routeIs('20ppm')? "active":"" }}">
                            <a href="{{action('ProductsController@get20Ppm')}}">20 PPM Models</a>
                        </li>
                        <li class="{{ Request::routeIs('HV_Production_MFP')? "active":"" }}">
                            <a href="{{action('ProductsController@getHvProductionMfp')}}">HV Production MFP</a>
                        </li>                       
                    </ul>
                </li>



                <li class="{{ Request::routeIs('solutions')? "active":"" }}">
                    <a href="{{action('SolutionsController@getSolutions')}}" class="hvr-underline-from-left">Solutions</a>
                </li>


                <li class="{{ Request::routeIs('parts_and_maintenance')? "active":"" }}">
                    <a href="{{action('PartsAndMaintenanceController@getPartsAndMaintenance')}}" class="hvr-underline-from-left">Parts And Maintenance</a>
                </li>
                <li class="{{ Request::routeIs('contact_us')? "active":"" }}">
                    <a href="{{action('ContactUsController@getContactUs')}}" class="hvr-underline-from-left">Contact Us</a>
                </li>
                
            </ul>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-4 text-center" style="float:right;margin-top:15px">

                <a href="#" style="font-size: .5em; text-decoration: none;">
                    <span class="hvr-icon-spin fa-facebook" >
                        Facebook
                    </span>
                </a>

                <a href="#" style="font-size: .5em; text-decoration: none;">
                    <span class="hvr-icon-spin  fa-twitter">
                        Twitter
                    </span>
                </a>

                <a href="#" style="font-size: .5em; text-decoration: none;">
                    <span class="hvr-icon-spin fa-google-plus">
                        Google pluse &nbsp
                    </span>
                </a>
                                   
            </div>    

            <!-- Right Side Of Navbar -->
           
        </div>
    </div>
</nav>
