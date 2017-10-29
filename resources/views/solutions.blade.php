@extends('layouts.app')

@section('title')
	AOE | Product Lineup
@endsection
@section("head")
	<style type="text/css">
		#solutions-container{
			margin-top:25px;
			font-family: 'Yantramanav', sans-serif;
			color: #282C72;
		}
		.solution-title-h3{
			margin-top:0px;
		}
		.solution-text-col{
			
		}

	</style>
@endsection
@section('content')

	<div class="container" id="solutions-container">
		
		<div class="row">


			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/usability.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>

					<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0 solution-text-col">

						<h3  class="solution-title-h3">	
							Usability
						</h3>
						<p>
							Sharp MFPs were designed with true user-friendliness in mind. Many models offer a wide, clear touchscreen LCD, a retractable keyboard, and universal design features that ensure accessibility by all users.
						</p>
					</div>



				</div>



				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/security.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>

					<div class="col-xs-12col-sm-12 col-md-8 col-lg-8 solution-text-col">

						<h3  class="solution-title-h3">	
							Security
						</h3>
						<p>
							Sharp’s industry-leading security solutions employ multiple levels of security functions—both standard equipped and optional—covering a broad range of network and data security needs.
						</p>
					</div>



				</div>

				





			</div>

        </div>
	</div>
@endsection
