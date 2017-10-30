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
			text-align: justify;
		}
		.solution-title-h3{
			margin-top:10px;
		}
		.solution-text-col{
			
		}

	</style>
@endsection
@section('content')

	<div class="container" id="solutions-container">
		<div class="row text-center">
			<h2> Solutions</h2>
			<hr>
		</div>
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

        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/device_management.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>
					<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0 solution-text-col">
						<h3  class="solution-title-h3">	
							Device Management
						</h3>
						<p>
							Seamless integration into office networks, simple configuration, and several options for easy remote control make machine administration easy.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/document_management.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>
					<div class="col-xs-12col-sm-12 col-md-8 col-lg-8 solution-text-col">
						<h3  class="solution-title-h3">	
							Document Management
						</h3>
						<p>
							Designed to facilitate document distribution, Sharp’s workflow and document management applications enable companies to efficiently organise and manage the flow of information, both internally and externally.
						</p>
					</div>
				</div>
			</div>
        </div>

        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/sharp_osa.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>
					<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0 solution-text-col">
						<h3  class="solution-title-h3">	
							Sharp OSA
						</h3>
						<p>
							(Open Systems Architecture)
							Sharp OSA is a development platform that allows third-party software developers to customise Sharp MFPs for integration with critical network applications.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/expandability.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>
					<div class="col-xs-12col-sm-12 col-md-8 col-lg-8 solution-text-col">
						<h3  class="solution-title-h3">	
							Expandability
						</h3>
						<p>
							Sharp MFPs offer a wide spectrum of expandability, not just with their own optional hardware and software but also via Web browsers and external devices.
						</p>
					</div>
				</div>
			</div>
        </div>

        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<img src="{{asset('images/solutions/eco_friendliness.webp')}}" class="img-responsive img-rounded" alt="Image">
					</div>
					<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0 solution-text-col">
						<h3  class="solution-title-h3">	
							Eco-Friendliness
						</h3>
						<p>
							Energy-saving technologies incorporated into the design, resource-saving production processes, and outstanding environmental performance make Sharp MFPs the epitome of eco-friendliness.
						</p>
					</div>
				</div>				
			</div>
        </div>

	</div>
@endsection
