@extends('layouts.app')

@section('title')
	Multicolor 26~30 PPM | AOE
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
			<h2> Multicolor 26~30 PPM</h2>
			<hr>
		</div>
		<div class="row">


            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/3640N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/3640N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			MX-2640N
		                		</h4>
								Digital Full Colour Multifunctional System : Copy  / Network Print / Network scan / SharpDesk
								10.1-inch colour LCD touchscreen
								Breathtaking Image Quality with Sharp’s second-generation Mycrostoner-HG (High Grade) and an improved imaging system combine to allow the full spectrum of colour reproduction in crisp, sharp detail
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/C300.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/C300.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			MX-C300
		                		</h4>
								Small in size but big on style and performance, this compact colour A4 MFP—with a footprint of just 429 × 509 mm—can bring convenient three-in-one functionality to any workplace. Ideal for streamlining the business operations of small workgroups in large offices or as the solo document performer in SOHO, small shops, and more, the MX-C300/C250 copies, prints, and scans with ease.
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/3560N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/3560N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			MX-3060N
		                		</h4>
								Next-Generation Colour MFPs for
								Simply Better Business
								Link to Public Cloud and Mobile
								Printing Services
								Copy+Network Print + Network Scan + Fax(Option)
								35 ppm / 10.1-Inch Colour LCD Touchscreen / Easy Printing / Scanning with USB Drives / Multi-Layered Security
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

        </div>
	</div>
@endsection
