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
								<a href="{{url('/')}}" class="footer-nav-a">Home</a>					
							</li>
							<li class="{{ Request::routeIs('parts_and_maintenance')? "active":"" }}">
								<a href="{{action('PartsAndMaintenanceController@getPartsAndMaintenance')}}" class="footer-nav-a">Parts And Maintenance</a>					
							</li>
							<li class="{{ Request::routeIs('contact_us')? "active":"" }}">
								<a href="{{action('ContactUsController@getContactUs')}}" class="footer-nav-a">Contact Us</a>					
							</li>
						</ul>
					</div>

					<div class="col-xs-8 col-xs-offset-4		col-sm-3 col-sm-offset-0     col-md-2 col-md-offset-0      col-lg-2 col-lg-offset-0">
						<span class="footer-nav-a">Products</span>
						<ul class="footer-nav-ul">
							<li class="{{ Request::routeIs('lineup')? "active":"" }}">
								<a href="{{action('ProductsController@getProductLineup')}}">
									Lineup
								</a>
							</li>
							<li class="{{ Request::routeIs('23ppm')? "active":"" }}">
								<a href="{{action('ProductsController@get23Ppm')}}">
									23 PPM and Up
								</a>
							</li>
			                <li class="{{ Request::routeIs('20ppm')? "active":"" }}">
			                	<a href="{{action('ProductsController@get20Ppm')}}">
			                		20 PPM Models
			                	</a>
			                </li>
			                <li class="{{ Request::routeIs('HV_Production_MFP')? "active":"" }}">
			                	<a href="{{action('ProductsController@getHvProductionMfp')}}">
			                		HV Production MFP
			                	</a>
			                </li>
						</ul>
					</div>

					<div class="col-xs-8 col-xs-offset-4		col-sm-2 col-sm-offset-0     col-md-2 col-md-offset-0      col-lg-2 col-lg-offset-0">
						<ul class="footer-nav-ul-1">
							<li class="{{ Request::routeIs('solutions')? "active":"" }}">
								<a href="{{action('SolutionsController@getSolutions')}}" class="footer-nav-a">Solutions</a>					
							</li>
						</ul>
					</div>

					<div class="col-xs-8 col-xs-offset-2		col-sm-4 col-sm-offset-5    col-md-1 col-md-offset-0      col-lg-1 col-lg-offset-0" style="font-size: 1em;border-left: 2px solid #282C72">					

		                <span class="text-center">
	                        <a href="https://www.facebook.com/aoeegypt" class="navbar-link fa fa-facebook"  style="margin-right: 5px" target="_blank">
	                            <span style="font-size: .3em;font-weight:bold">
	                                Facebook
	                            </span>
	                        </a>
	                    
	                        <a href="#" class="navbar-link fa fa-twitter" style="margin-right: 5px">
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