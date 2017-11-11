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
		input ,select{
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
        <div class="row">
          <div class="col-lg-8">
              @foreach ($partsNames as $key => $partName)
                  <div class="row">
                      <div class="col-lg-4">
                          <img src="{{asset('images/parts_and_maintenance/'.$partName.'.jpg')}}" alt="" class="img-responsive">
                      </div>
                      <div class="col-lg-4">
                          <h3>{{$partName}}</h3>
                      </div>
                      <div class="col-lg-3">
                          <div class="form-group">
                            {!! Form::label('quantity', 'Quantity') !!}
                            {!! Form::text('quantity', null, ['class'=>'form-control', 'placeholder'=>'Enter The Quantity.']) !!}

                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                  <h3 style="color:red;display:inline">*</h3>{!! Form::label('name', 'Name:') !!}
                  {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Name.']) !!}
              </div>
              <div class="form-group">
                  <h3 style="color:red;display:inline">*</h3>{!! Form::label('phone', 'Phone:') !!}
                  {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Phone Number.']) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('company', 'Company Name:') !!}
                  {!! Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Enter The Company Name.']) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('area', 'Area:') !!}
                  {!! Form::text('area', null, ['class'=>'form-control', 'placeholder'=>'Enter The Area.']) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('city', 'City:') !!}
                  {!! Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'Enter The City.']) !!}
              </div>
              <div class="form-group">
                  <h3 style="color:red;display:inline">*</h3>{!! Form::label('message', 'Your Message:') !!}
                  {!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'']) !!}
              </div>
              <button type="button" class="btn btn-primary">
                Send your request
              </button>
          </div>
        </div>
    </div>

@endsection
