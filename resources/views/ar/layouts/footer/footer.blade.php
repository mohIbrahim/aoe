<footer>
	<div id="footer-container" class="container">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >

				<div class="col-xs-5 col-xs-offset-3		col-sm-2 col-sm-offset-0    col-md-2  col-md-offset-0		col-lg-2 col-lg-offset-0">
					<img src="{{asset('images/branding_image.png')}}" class="img-responsive" alt="Image">
				</div>

				<span>
					<div class="col-xs-8 col-xs-offset-4		col-sm-4 col-sm-offset-0		col-md-2 col-md-offset-0		col-lg-2 col-lg-offset-0">
						<ul class="footer-nav-ul-1">
							<li class="{{ Request::routeIs('welcome')? " active":"" }}">
								<a href="{{action('WelcomeController@getWelcome')}}" class="footer-nav-a">الرئيسية</a>
							</li>
							<li class="{{ Request::routeIs('parts_and_maintenance')? "active":"" }}">
								<a href="{{action('PartsAndMaintenanceController@getPartsAndMaintenance')}}" class="footer-nav-a"> قطع الغيار والصيانة </a>
							</li>
							<li class="{{ Request::routeIs('contact_us')? "active":"" }}">
								<a href="{{action('ContactUsController@getContactUs')}}" class="footer-nav-a"> إتصل بنا </a>
							</li>
						</ul>
					</div>

					<div class="col-xs-8 col-xs-offset-4		col-sm-3 col-sm-offset-0     col-md-2 col-md-offset-0      col-lg-2 col-lg-offset-0">
						<span class="footer-nav-a">المنتجات</span>
						<span class="footer-nav-multicolor"> طابعات متعددة الألوان</span>
						<ul class="footer-nav-ul">
							<li class="{{ Request::routeIs('Multicolor_2025_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMulticolor2025')}}">20~25  ورقة بالدقيقة</a>
	                        </li>
	                        <li class="{{ Request::routeIs('Multicolor_2630_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMulticolor2630')}}">26~30  ورقة بالدقيق</a>
	                        </li>
	                        <li class="{{ Request::routeIs('Multicolor_3140_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMulticolor3140')}}">31~40  ورقة بالدقيق</a>
	                        </li>
	                        <li class="{{ Request::routeIs('Multicolor_41_plus_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMulticolor41Plus')}}">41+  ورقة بالدقيق</a>
	                        </li>
						</ul>


						<span class="footer-nav-monochrome">طابعات أحادية اللون</span>
						<ul class="footer-nav-ul">
							<li class="{{ Request::routeIs('Monochrome_2025_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMonochrome2025')}}"> 20~25 ورقة </a>
	                        </li>
	                        <li class="{{ Request::routeIs('Monochrome_2630_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMonochrome2630')}}"> 26~30 ورقة بالدقيقة </a>
	                        </li>
	                        <li class="{{ Request::routeIs('Monochrome_3140_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMonochrome3140')}}"> 31~40 ورقة بالدقيقة </a>
	                        </li>
	                        <li class="{{ Request::routeIs('Monochrome_41_plus_PPM')? "active":"" }}">
	                            <a href="{{action('ProductsController@getMonochrome41Plus')}}"> 41+ ورقة بالدقيقة </a>
	                        </li>
						</ul>

						<ul class="footer-nav-ul-1">
							<li class="{{ Request::routeIs('HV_Production_MFP')? "active":"" }}" >
								<a href="{{action('ProductsController@getHvProductionMfp')}}"  id="footer-hv-production"> طابعات متعددة الوظائف<br>
	 ذو حجم إنتاج مرتفع </a>
							</li>
						</ul>


					</div>

					<div class="col-xs-8 col-xs-offset-4		col-sm-2 col-sm-offset-0     col-md-2 col-md-offset-0      col-lg-2 col-lg-offset-0">
						<ul class="footer-nav-ul-1">
							<li class="{{ Request::routeIs('solutions')? "active":"" }}">
								<a href="{{action('SolutionsController@getSolutions')}}" class="footer-nav-a"> الحلول المكتبية </a>
							</li>
						</ul>
					</div>

					<div class="col-xs-8 col-xs-offset-2		col-sm-4 col-sm-offset-5    col-md-1 col-md-offset-0      col-lg-1 col-lg-offset-0" style="font-size: 1em;border-right: 2px solid #282C72">

		                <span class="text-center">
	                        <a href="https://www.facebook.com/aoeegypt" class="navbar-link fa fa-facebook"  style="margin-left: 5px" target="_blank">
	                            <span style="font-size: .3em;font-weight:bold">
	                                Facebook
	                            </span>
	                        </a>

	                        <a href="#" class="navbar-link fa fa-twitter" style="margin-left: 5px">
	                            <span style="font-size: .3em;font-weight:bold">
	                                Twitter
	                            </span>
	                        </a>

	                        <a href="#" class="navbar-link fa fa-google-plus">
	                            <span style="font-size: .3em;font-weight:bold">
	                                Google Plus
	                            </span>
	                        </a>
	                    </span>

					</div>

					<div class="hidden-xs		hidden-sm		col-md-3		col-lg-3">
						<img src="{{ asset('images/footer/MX-2630N.png') }}" class="img-responsive" alt="Image" style="position:absolute;top:-100px;">
					</div>
				</span>

			</div>

	</div>

</footer>
