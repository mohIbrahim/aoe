@extends('layouts.app')

@section('title')
	AOE | Product Lineup
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
			<h2> 20 Pages Per Minute</h2>
			<hr>
		</div>
		<div class="row">


			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/5620V.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/5620V.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			Sirius Light simplex
		                		<h4>
		                		<h4>
		                			5620V
		                		</h4>
								image-editing functions :
								ID Card Copy*, XY Zoom, Margin Shift*, Edge/Centre Erase ...etc
								continuous copy rate of 20 cpm
								Efficient, Network-Upgradeable Printing
								A3 Colour Scanning
								Digital auto exposure control, Text/Photo mode
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/6023N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/6023N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			Nova Light
		                		</h4>
		                		<h4>
		                			6023N | 6020N
		                		</h4>
								3-in-1 Performance (23PPM / 20PPM)
								Standard-equipped with network printing
								User-Friendly Control Panel
								Built-In Duplex Module and Optional RSPF
								Convenient A3 Colour Scanning
								Auto paper/magnification selection
								Auto tray switching
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/B200.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/B200.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			A-Jaguar(LED)
		                		</h4>
		                		<h4>
		                			B200
		                		</h4>
								SOPM ( 20ppm) and Electronic Sorting
								Timesaving 50-Sheet SPF
								Fast Printing with Sharp Technology
								Full-Colour Scanning
								One-Touch ID Card Copy
								Superb Image Quality
								Wide zoom range from 25% to 400%
								Space-saving wingless design
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>



        </div>
	</div>
@endsection
