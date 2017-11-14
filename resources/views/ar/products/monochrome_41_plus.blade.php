@extends('layouts.app')

@section('title')
	Monochrome 41+ PPM | AOE
@endsection
@section("head")
	<style type="text/css">
		.container{
			font-family: 'Yantramanav', sans-serif;
			color: #282C72;
		}

		.thumbnail{
			padding:0px;
			padding-top: 2px;
			border:2px solid #eaebff;
			border-bottom:6px solid #eaebff;

			border-radius: 0px;
			background: #fff;


		}
		.panel-default{
			border:none;
			border-top: 1px solid #282C72;
			border-radius: 0;
		}

		.panel-body{
			min-height: 350px!important;
		}

		.thumbnail .btn{
			border-radius: 0;
		}


	</style>
@endsection
@section('content')

	<div class="container">
		<div class="row text-center">
			<h2> Monochrome 41+ PPM</h2>
			<hr>
		</div>
		<div class="row">
	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/MX-M1204.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/MX-M1204.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h4>
		                			MX-M1204 | MX-M1054 | MX-M904
		                		</h4>
								High-Volume Performance Power
								This series can deliver 120, 105, or 90 cpm/ppm of beautiful, high-quality B/W documents.
								Expandable Document Solutions
								A Variety of Options for Flexible Configuration
								A Heavy-Duty Productivity Booster
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/mx-m754n.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/mx-m754n.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">

		                		<h4>
		                			MX-M754N | MX-M654N
		                		</h4>

								The high-performing MX-M754N/M654N boasts everything needed to bring exceptional document workflow at a speed of 75 / 65 ppm.
								Speedy Document Feeding
								10.1-Inch Colour LCD Touchscreen
								Seamless Document Management
								Sharp OSA allows integration with cloud-based applications ..And many more.
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/M564N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/M564N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			MX-M464N | MX-M564N
		                		</h4>
								Productive Performance
								Eco Friendliness
								Ease of Use
								COPYING & NETWORK PRINTING ( 56 PPM)
								VERSATILE OPERATION:
								Versatile Paper Handling
								Image Editing Functions
								A3 Colour Network Scanning
								High-Speed Faxing (OPTION)
								...and many more
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

        </div>
	</div>
@endsection
