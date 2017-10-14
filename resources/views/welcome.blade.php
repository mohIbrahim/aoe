@extends('layouts.app')

@section('content')    
{{-- carousel  --}}
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel"> 

		<ol class="carousel-indicators" >
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active"> <img src="{{ asset('images/welcome-page/3a98ea_fa96ba23431244c69d0142659f857262.png') }}" style="width:100%" alt="First slide">
				
			</div>


			<div class="item"> <img src="http://via.placeholder.com/1000x300" style="width:100%" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 style="font-size: 3.7vw">Inter-operator solutions</h1>
												
					</div>
				</div>
			</div>


			<div class="item"> <img src="http://via.placeholder.com/1000x300" style="width:100%" data-src="" alt="Second    slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 style="font-size: 3.7vw">Telecom Solutions</h1>
					</div>
				</div>
			</div>

			<div class="item"> <img src="http://via.placeholder.com/1000x300" style="width:100%" data-src="" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 style="font-size: 3.7vw">IT Consultancy</h1>
					</div>
				</div>
			</div>

			<div class="item"> <img src="http://via.placeholder.com/1000x300" style="width:100%" data-src="" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 style="font-size: 3.7vw">Green Technology</h1>
					</div>
				</div>
			</div>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>

	</div>
		
	
{{-- End carousel  --}}

	<div class="container">


		 <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4" style="border:1px solid gray;">
			<img src="{{asset('images/welcome-page/about_us.png')}}" class="img-responsive" alt="Image"> 
		 	<h3>
		 		ABOUT US
		 	</h3>
		 	<div class="text-justify">
			 	<p>
			 		Arabian Office Equipments Co is the authorised retailers for all SHARP MFPs in Egypt.
			 	</p>
			 	<p>
			 		AOE is a well established reputable company that has been providing office equipments solutions to the public and private sector since the 70s.
			 	</p>
			 	<p>
			 		Explore our website for products that will help make your office more efficient and easier to connect.
			 	</p>
		 	</div>
		 </div>


		 <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4">
		 	<img src="{{asset('images/welcome-page/out_vision.png')}}" class="img-responsive" alt="Image"> 
		 	<h3>
		 		OUR VISION
		 	</h3>
		 	<div class="text-justify">
		 		
			 	<p>
			 		To stay a market leading company in providing office equipments solutions to the egyptian market.
			 	</p>
			 	
		 	</div>
		 </div>


		 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		 	<h3>
		 		SOLUTIONS
		 	</h3>
		 	<div class="text-justify">
		 		<ul>
		 			<li>
		 				<p>
			 				Usability
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Sharp OSA
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Eco-Friendliness
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Device Management
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Security
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Document Management
			 			</p>
		 			</li>

		 			<li>
		 				<p>
			 				Expandability
			 			</p>
		 			</li>
		 		</ul>			 	
			 	
		 	</div>
		 </div>



	</div>

	



  
@endsection
