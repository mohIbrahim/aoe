@extends('layouts.app')

@section('title')
	AOE | HV Production MFP
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
			min-height: 600px!important;
		}

		.thumbnail .btn{
			border-radius: 0;
		}


	</style>
@endsection
@section('content')

	<div class="container">
		<div class="row text-center">
			<h2> HV Production MFP UP TO  120 PPM</h2>
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
		                			M1204
		                		</h4>
		                		<h4>
		                			90, 105 and 120 PPM
		                		</h4>
								<p>High Volume Production</p>
								<p>Pages per minute: 120 B/w</p>
								<p>Outstanding production machine engineered to deliver First-class Reliability and performance.</p>
								<p>Extensive finishing options include 100-sheet stapling, Saddle stitch, Multi-folding, Curl correction, Trimming and insertion capabilities</p>
								<p>120 OPM 1-sided and 200 OPM 2-Sided scan speed in colour and B/w with standard 250-sheet DSPF</p>
								<p>Tiltable 10.1" colour LCD panel with finger swipe touch control offers superior</p>
								<p>Designed to ensure easy servicing and maximum uptime with full front access to key component</p>
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
		                			M754N | M654N
		                		</h4>
		                		<h4>
		                			65 and 75 PPM
		                		</h4>

								<p>Print, Copy, Scan, Fax, File</p>
								<p>Pages per minute: 75 B/W</p>
								<p>Paper capacity: STD 3200 Max 6700 sheets</p>
								<p>High Performance with advanced finishing</p>
								<p>10.1" Tiltable colour LCD panel with multi touch finger swipe touch control</p>
								<p>Web browsing option for access to the internet directly form the control panel</p>
								<p>Industry-leading security solutions for ultimate data/document protection</p>
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	       
	        
        
        </div>
	</div>
@endsection
