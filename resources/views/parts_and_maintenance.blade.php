@extends('layouts.app')

@section('title')
	AOE | Parts And Maintenance
@endsection
@section("head")
	<style type="text/css">
		#partes-and-maintenance-container{
			margin-top:25px;
			font-family: 'Yantramanav', sans-serif;
			color: #282C72;
		}
		.solution-title-h3{
			margin-top:10px;
		}
		.solution-text-col{
			
		}
		#partes-and-maintenance-container span{
			font-size:1.2em;
			display: inline;
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
			border-top: 1px solid #eaebff;
			border-radius: 0;
		}

		.panel-body{
			min-height: auto!important;
			text-align: center;
			padding:8px;
		}

		.thumbnail .btn{
			border-radius: 0;
		}

	</style>
@endsection
@section('content')

	<div class="container" id="partes-and-maintenance-container">
		<div class="row text-center">
			<h2>Parts And Maintenance</h2>
			<hr>
		</div>

		<div class="row">
			<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">			
				<h3>
					Get top performance with genuine Consumables and Parts
				</h3>
				
				<p>
					<span>AOE CO.</span>
					has many years experience of maintaining MFP devices. To ensure continued high performance we
					<span style="text-decoration: underline;">RECOMMEND</span>
					the use of 
					<span style="color:#E51E25">SHARP</span>
					genuine consumables and parts, this assures the highest levels of reliability and minimum downtime
				</p>

				<p>
					<span style="color:#E51E25">SHARP</span>
					<span>MFP</span>
					devices are made to deliver clear, clean images and trouble free performance,  what you get out of your overall 
					<span>MFP</span>
					depends on what you put in it. Overall 
					<span>MFP</span>
					performance is dependent upon  the precise interaction of factory designed toner, developer and drum. If you want top performance from your 
					<span style="color:#E51E25">SHARP</span> 
					<span>MFP</span>, be sure to use genuine 
					<span style="color:#E51E25">SHARP</span>
					supplies and parts  provided by 
					<span>AOE CO.</span> and authorized  dealers.
				</p>


				
			</div>

			
		</div>

		<div class="row">			
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				
				<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 ">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/parts_and_maintenance/fusing_unit.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/parts_and_maintenance/fusing_unit.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h3>
		                			FUSING UNIT
		                		</h3>
								<p>Maintenance of fusing unit</p>
		                	</div>
		                </div>
		                <div class="clearfix"></div>
		            </div>	        	
	        	</div>

	        	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/parts_and_maintenance/pwbs.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/parts_and_maintenance/pwbs.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h3>
		                			PWBs
		                		</h3>
								<p>Genuine parts</p>
		                	</div>
		                </div>
		                <div class="clearfix"></div>
		            </div>	        	
	        	</div>

	        	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/parts_and_maintenance/laser_unit.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/parts_and_maintenance/laser_unit.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h3>
		                			Laser
		                		</h3>
								<p>Laser unit</p>
		                	</div>
		                </div>
		                <div class="clearfix"></div>
		            </div>	        	
	        	</div>

	        	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/parts_and_maintenance/drum.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/parts_and_maintenance/drum.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h3>
		                			Genuine DRUM
		                		</h3>
								<p>Genuine consumables</p>
		                	</div>
		                </div>
		                <div class="clearfix"></div>
		            </div>	        	
	        	</div>

			</div>			
		</div>

		
	</div>
@endsection
