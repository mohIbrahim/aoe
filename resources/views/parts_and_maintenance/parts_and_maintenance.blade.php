@extends('layouts.app')

@section('title')
	AOE | Parts And Maintenance
@endsection
@section('head')
	<style>
		#partes-and-maintenance-container{
			margin-top:25px!important;
			font-family: 'Yantramanav', sans-serif!important;
			color: #282C72;
		}
		.solution-title-h3{
			margin-top:10px!important;
		}
		.solution-text-col{

		}
		#partes-and-maintenance-container span{
			font-size:1.2em!important;
			display: inline!important;
		}


		.thumbnail{
			padding:0px!important;
			padding-top: 2px!important;
			border:2px solid #eaebff!important;
			border-bottom:6px solid #eaebff!important;

			border-radius: 0px!important;
			background: #fff!important;


		}
		.panel-default{
			border:none!important;
			border-top: 1px solid #eaebff!important;
			border-radius: 0!important;
		}

		.panel-body{
			min-height: auto!important;
			text-align: center!important;
			padding:8px!important;
		}

		.thumbnail .btn{
			border-radius: 0!important;
		}

	</style>
@endsection
@section('content')
	<div class="container" id="partes-and-maintenance-container">
		<div class="row text-center">
			<h2>Parts And Maintenance</h2>
		</div>
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
				<hr>
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
		{!! Form::open(['method'=>"GET", 'action'=>'PartsAndMaintenanceController@takeOrder']) !!}
			<div class="row">
				@include('errors.list')
				<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3 ">
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
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('parts_names', 'Pick this part')!!}
								{!!Form::checkbox('parts_names[]', 'fusing_unit')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
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
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('parts_names', 'Pick this part')!!}
								{!!Form::checkbox('parts_names[]', 'pwbs')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
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
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('part_name', 'Pick this part')!!}
								{!!Form::checkbox('part_name', 'laser_unit')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
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
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('part_name', 'Pick this part')!!}
								{!!Form::checkbox('part_name', 'drum')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>
		        	</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3 ">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/pf_roller.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/pf_roller.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			PF roller
			                		</h3>
									<p>Genuine parts</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('part_name', 'Pick this part')!!}
								{!!Form::checkbox('part_name', 'pf_roller')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/ps_and_rubber.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/ps_and_rubber.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			PS & Rubber Rol.
			                		</h3>
									<p>Genuine parts</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
							<div class="form-group" style="margin: 5px auto; width:90%">
								{!!Form::label('part_name', 'Pick this part')!!}
								{!!Form::checkbox('part_name', 'ps_and_rubber')!!}
								{!!Form::submit('Make Order', ['class'=>'btn btn-primary btn-xs pull-right'])  !!}
							</div>
			            </div>``
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/gears.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/gears.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			Gears
			                		</h3>
									<p>Genuine parts</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/toner.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/toner.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			Toner
			                		</h3>
									<p>genuine consumables</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3 ">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/color_toner.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/color_toner.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			COLOR TONER
			                		</h3>
									<p>Genuine consumables</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/developer.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/developer.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			DEVELOPER
			                		</h3>
									<p>Genuine consumables</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/toner_cartridge.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/toner_cartridge.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			TONER CRTRDG
			                		</h3>
									<p>Genuine consumables</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/belt.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/belt.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			BELT
			                		</h3>
									<p>TRANSFER BELT</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

		        	<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6 col-md-offset-0 col-lg-3">
		        		<div class="thumbnail hvr-float" >
			                <a href="{{asset('images/parts_and_maintenance/dram_blade.jpg')}}" target="_blank" >
			                	<img src="{{asset('images/parts_and_maintenance/dram_blade.jpg')}}" class="img-responsive" alt="...">
			                </a>
			                <div class="panel panel-default">
			                	<div class="panel-body">
			                		<h3>
			                			DRUM BLADE
			                		</h3>
									<p>Genuine parts</p>
			                	</div>
			                </div>
			                <div class="clearfix"></div>
			            </div>
		        	</div>

				</div>
			</div>
		{!! Form::close() !!}
	</div>
@endsection
