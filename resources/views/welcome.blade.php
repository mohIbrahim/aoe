@extends('layouts.app')

@section('content')
    

    <div id="myCarousel" class="carousel slide" data-ride="carousel"> 

		<ol class="carousel-indicators" >
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active"> <img src="http://via.placeholder.com/1000x300" style="width:100%" alt="First slide">
				
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
  
@endsection
