<div class="container" id="language_container">
    <div class="language_nav text-left">
        <a href="{{ action('LanguagesController@switchToArabic') }}">العربية</a> |
        <a href="{{ action('LanguagesController@switchToEnglish') }}">English</a>
    </div>
</div>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container" >
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span> القائمة
                <span class="icon-bar center-block"></span>
                <span class="icon-bar "></span>
                <span class="icon-bar center-block"></span>
            </button>

            <!-- Branding Image -->
            <div id="branding_div">
                <a class="navbar-brand hvr-hang" href="{{ action('WelcomeController@getWelcome') }}">
                    <img src="{{ asset('images/branding_image.png') }}" class="img-responsive" alt="Image">
                </a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                <li class="{{ Request::routeIs('welcome')? " active":"" }}" >
                    <a href="{{action('WelcomeController@getWelcome')}}" class="hvr-underline-from-left"> الرئيسية </a>
                </li>


                <li class="dropdown {{ Request::is('products/*')? "active":"" }}">
                    <a href="#" class="dropdown-toggle hvr-underline-from-left" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         المنتجات
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li role="presentation" class="dropdown-header dropdown-header-multicolor">
                            <strong style="color:#e80047"> طابعات متعددة الألوان </strong>
                        <li>
                        <li class="{{ Request::routeIs('Multicolor_2025_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMulticolor2025')}}">20~25  ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Multicolor_2630_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMulticolor2630')}}">26~30  ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Multicolor_3140_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMulticolor3140')}}">31~40  ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Multicolor_41_plus_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMulticolor41Plus')}}">41+  ورقة بالدقيقة </a>
                        </li>


                        <li role="presentation" class="divider hr-modification"></li>


                        <li role="presentation" class="dropdown-header dropdown-header-monochrome"> طابعات أحادية اللون </li>

                        <li class="{{ Request::routeIs('Monochrome_2025_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMonochrome2025')}}">20~25 ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Monochrome_2630_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMonochrome2630')}}">26~30 ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Monochrome_3140_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMonochrome3140')}}">31~40 ورقة بالدقيقة </a>
                        </li>
                        <li class="{{ Request::routeIs('Monochrome_41_plus_PPM')? "active":"" }}">
                            <a href="{{action('ProductsController@getMonochrome41Plus')}}">41+ ورقة بالدقيقة </a>
                        </li>




                        <li role="presentation" class="divider hr-modification"></li>



                        <li class="{{ Request::routeIs('HV_Production_MFP')? "active":"" }}" >
                            <a href="{{action('ProductsController@getHvProductionMfp')}}" id="hv-production">طابعات متعددة الوظائف<br>
 ذو حجم إنتاج مرتفع</a>
                        </li>




                    </ul>
                </li>




                <li class="{{ Request::routeIs('solutions')? "active":"" }}">
                    <a href="{{action('SolutionsController@getSolutions')}}" class="hvr-underline-from-left"> الحلول المكتبية </a>
                </li>


                <li class="{{ Request::routeIs('parts_and_maintenance')? "active":"" }}">
                    <a href="{{action('PartsAndMaintenanceController@getPartsAndMaintenance')}}" class="hvr-underline-from-left"> قطع الغيار والصيانة </a>
                </li>
                <li class="{{ Request::routeIs('contact_us')? "active":"" }}">
                    <a href="{{action('ContactUsController@getContactUs')}}" class="hvr-underline-from-left"> إتصل بنا </a>
                </li>

            </ul>
            <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-4 text-center" style="float:right;margin-top:15px">

                <a href="https://www.facebook.com/aoeegypt" style="font-size: .5em; text-decoration: none;" target="_blank">
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
                        &nbsp Google pluse
                    </span>
                </a>

            </div>

            <!-- Right Side Of Navbar -->

        </div>
    </div>
</nav>
