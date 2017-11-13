@extends('layouts.app')
@section('title')
	AOE | Contact Us
@endsection
@section('head')
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style type="text/css">
		#contact-us-container{
			font-family: 'Yantramanav', sans-serif;
			color: #282C72;
		}
		form input ,select{
			border-top: none!important;
			border-right: none!important;
			border-left: none!important;
			border-bottom:1px solid #282C72!important;
			color: #282C72!important;
		}

		form textarea{
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


	<div class="container-fluid" id="contact-us-container" >

		<div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1" >
			<div class="container-fluid">
				<h1 class="text-center">
					Contact Us
				</h1>
				<hr>

				<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-0" >


					{!! Form::open(['method'=>'POST', 'action'=>'ContactUsController@sendAnEmail']) !!}
						@include('errors.list')
						<div class="form-group">
							<h3 style="color:red;display:inline">*</h3>{{ Form::label('name', 'Name')}}
							{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Name.']) }}
						</div>

						<div class="form-group">
							<h3 style="color:red;display:inline">*</h3>{{ Form::label('email', 'E-Mail')}}
							{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Your E-Mail.']) }}
						</div>

						<div class="form-group">
							<h3 style="color:red;display:inline">*</h3>{{ Form::label('branch', 'Branch Name.') }}
							{{ Form::select('branch', ['AOE Egypt Headquarter', 'AOE Egypt Downtown Showroom', 'AOE Egypt 1St Settlement'], null, ['class'=>'form-control', 'placeholder'=>'Select Branch Name.']) }}
						</div>

						<div class="form-group">
							<h3 style="color:red;display:inline">*</h3>{{ Form::label('subject', 'Subject')}}
							{{ Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Enter Message Subject.']) }}
						</div>

						<div class="form-group">
							<h3 style="color:red;display:inline">*</h3>{{ Form::label('message', 'Message') }}
							{{ Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Message']) }}
						</div>

						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6LdImzYUAAAAAGPkZhFjkf30ZwWEfPMbP8h_fgVI"></div>
						</div>

						<button type="submit" class="btn btn-primary pull-right">Send</button>

					{!! Form::close() !!}
				</div>


				<div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-0">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<table class="table table-condensed table-hover">
								<h3>AOE Egypt Headquarter</h3>
								<tbody>
									<tr>
										<td><strong>Address:</strong></td>
										<td>29  Abd El Khalik  Tharwat St. Cairo. Egypt</td>
									</tr>
									<tr>
										<td><strong>Tel:</strong></td>
										<td>
											<span>+202 2395 6938</span>
											<span>+202 2395 6942</span>
											<span>+202 2395 6943</span>
											<span>+202 2395 6945</span>
										</td>
									</tr>
									<tr>
										<td><strong>Fax:</strong></td>
										<td>+202 2395 6937</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<iframe style="width: 100%; height: 234px;border: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3453.5260080544876!2d31.2418657840601!3d30.05045344055262!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf07405da29ff0c5e!2sAOE!5e0!3m2!1sen!2sus!4v1509443810741" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

					</div>
					<div class="row">

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<table class="table table-condensed table-hover">
								<h3>AOE Egypt Downtown Showroom</h3>
								<tbody>
									<tr>
										<td><strong>Address:</strong></td>
										<td>24 Abd El Khalik Tharwat St. Downtown, Cairo. Egypt</td>
									</tr>
									<tr>
										<td><strong>Tel:</strong></td>
										<td>
											+202 2393 0047
										</td>
									</tr>
									<tr>
										<td><strong>Fax:</strong></td>
										<td>+202 2393 9653</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<iframe  style="width: 100%; height: 234px;border: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1726.7636389566949!2d31.24170034722331!3d30.05041702444715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840bfa515870d%3A0xf07405da29ff0c5e!2sAOE!5e0!3m2!1sen!2sus!4v1509444073171" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

					</div>

					<div class="row">

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<table class="table table-condensed table-hover">
								<h3>Soon</h3>
								<h3>AOE Egypt 1St Settlement</h3>
								<tbody>
									<tr>
										<td><strong>Address:</strong></td>
										<td></td>
									</tr>
									<tr>
										<td><strong>Tel:</strong></td>
										<td>
											+202
										</td>
									</tr>
									<tr>
										<td><strong>Fax:</strong></td>
										<td>+202 </td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<iframe  style="width: 100%; height: 234px;border: none;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27643.071277169627!2d31.426090000000002!3d29.997131000000003!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1509444755176" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

					</div>
				</div>

			</div>



		</div>

	</div>


@endsection
