@extends('layouts.app')

@section('title')

@endsection

@section('head')
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style type="text/css">
	#parts_and_maintenance_container{
		font-family: 'Yantramanav', sans-serif;
		color: #282C72;
	}
	input[type=text] ,select{
		border-top: none!important;
		border-right: none!important;
		border-left: none!important;
		border-bottom:1px solid #282C72!important;
		color: #282C72!important;
	}

	textarea{
		border:1px solid #282C72!important;
	}


	::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		color:    #9294af!important;
	}
	:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		color:    #9294af!important;
		opacity:  1;
	}
	::-moz-placeholder { /* Mozilla Firefox 19+ */
		color:    #9294af!important;
		opacity:  1;
	}
	:-ms-input-placeholder { /* Internet Explorer 10-11 */
		color:    #9294af!important;
	}
	::-ms-input-placeholder { /* Microsoft Edge */
		color:    #9294af!important;
	}

	select {
		color: #282C72!important;
	}
	select option{
		color:    #282C72!important;
	}


	</style>
@endsection
@section('content')
	<div class="container" id="parts_and_maintenance_container">
		<div class="col-md-6 col-md-offset-4">
			<h1> Confirm your request!</h1>
		</div>
		{!! Form::open(['method'=>'POST', 'action'=>'PartsAndMaintenanceController@confirmTheOrder']) !!}
			<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<h3>#</h3>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h3>Part Image</h3>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h3>Part Name</h3>
					</div>

				</div>
				<hr />

				@foreach ($partsNames as $key => $partName)
					<div class="row">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<h4>{{$key+1}}</h4>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="{{asset('images/parts_and_maintenance/'.$partName.'.jpg')}}" alt="" class="img-responsive" style="max-width: 150px">
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<h4>{{$partName}}</h4>
							{!! Form::hidden('parts_names[]', $partName, null) !!}
						</div>
					</div>
					<hr />
				@endforeach
			</div>
			<div class="col-lg-4">
				@include('errors.list')
				<div class="form-group">
					<h3 style="color:red;display:inline">*</h3>{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Name.']) !!}
				</div>
				<div class="form-group">
					<h3 style="color:red;display:inline">*</h3>{!! Form::label('phone_number', 'Phone:') !!}
					{!! Form::text('phone_number', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Phone Number.']) !!}
				</div>
				<div class="form-group">
					<h3 style="color:red;display:inline">*</h3>{{ Form::label('email', 'E-Mail')}}
					{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Your E-Mail.']) }}
				</div>
				<div class="form-group">
					{!! Form::label('company', 'Company Name:') !!}
					{!! Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Enter The Company Name.']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('city', 'City:') !!}
					{!! Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'Enter The City.']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('area', 'Area:') !!}
					{!! Form::text('area', null, ['class'=>'form-control', 'placeholder'=>'Enter The Area.']) !!}
				</div>
				<div class="form-group">
					<h3 style="color:red;display:inline">*</h3>{!! Form::label('message', 'Your Message:') !!}
					{!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
				</div>
				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="6LeaXDgUAAAAAEQl5W6RcxmBCHRZ9B_mBPRSA90B"></div>
				</div>
				{!! Form::submit('Send Your Request', ['class'=>'btn btn-primary']) !!}

			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection
