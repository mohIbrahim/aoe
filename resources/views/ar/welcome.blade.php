@extends('ar.layouts.app')
@section('title')
	مرحبــاً | الشركة العربية لمهمات المكاتب
@endsection
@section('content')
{{-- carousel  --}}

{{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators" >
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>

	</ol>

	<div class="carousel-inner">

		<div class="item active"> <img src="{{ asset('images/welcome-page/3a98ea_fa96ba23431244c69d0142659f857262.png') }}" style="width:100%" alt="First slide">

		</div>


		<div class="item"> <img src="http://via.placeholder.com/1000x300" style="width:100%" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="font-size: 3.7vw">Inter-operator solutions</h1>

				</div>
			</div>
		</div>




	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>

</div> --}}
{{-- End carousel  --}}
	<div id="wrapper">

		<div class="container" style="margin-top: 25px">
			<img src="{{asset('images/welcome-page/3a98ea_fa96ba23431244c69d0142659f857262.png')}}" class="img-responsive" alt="Image" style="margin:0 auto">


			<a class="btn btn-primary btn-lg center-block" href="{{ action('ContactUsController@getContactUs') }}" role="button" id="contact-us-btn">
				إتصل بنا اليوم!
			</a>
		</div>
		<div id="container-two" class="container">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2		col-sm-8 col-sm-offset-2		col-md-6 col-md-offset-0		col-lg-5 col-lg-offset-1 ">
					<img src="{{asset('images/welcome-page/about_us.png')}}" class="img-responsive" alt="Image">
				</div>
				<div class="col-xs-10 col-xs-offset-1		col-sm-12 col-sm-offset-0		col-md-6 col-md-offset-0		col-lg-5 col-lg-offset-0">
					<h3>
						 من نحنُ
					</h3>
					<div class="">
						<p>
							الشركة العربية لمهمات المكاتب تعتبر الوكيل الوحيد والحصري لماكينات طباعة شركة
<span style="color:red; display:inline">	   شــارب</span>
	 في جمهورية مصر العربية.
						</p>
						<p>
							شركة العربية هي شركة ذات سمعة طيبة، وقد تم توفير حلول المعدات المكتبية للقطاعين العام والخاص منذ سبعنيات القرن الماضي.


						</p>
						<p>
							استكشف موقعنا الالكتروني لإيجاد المنتجات التى من شأنها أن تساعدك كي تجعل مكتبك أكثر كفاءة وأسهل في الإتصال
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1		hidden-sm		hidden-md		hidden-lg">
					<img src="{{asset('images/welcome-page/our_vision.png')}}" class="img-responsive" alt="Image">
				</div>

				<div class="col-xs-10 col-xs-offset-1		col-sm-6 col-sm-offset-0		col-md-6 col-md-offset-0		col-lg-4 col-lg-offset-1">
					<h3>
						رؤيتنا
					</h3>
					<div class="">
						<p>
							إبقاء الشركة رائدة تسويقياً في توفير حلول المعدات المكتبية للسوق المصرية.
						</p>
					</div>
				</div>

				<div class="hidden-xs		col-sm-6 col-sm-offset-0		col-md-6 col-md-offset-0		col-lg-5 col-lg-offset-1">
					<img src="{{asset('images/welcome-page/our_vision.png')}}" class="img-responsive" alt="Image">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1		col-sm-8 col-sm-offset-0		col-md-6 col-md-offset-0		col-lg-5 col-lg-offset-1 ">
					<img src="{{asset('images/welcome-page/solutions.png')}}" class="img-responsive" alt="Image">
				</div>

				<div class="col-xs-8 col-xs-offset-2		col-sm-4 col-sm-offset-0		col-md-6 col-md-offset-0		col-lg-5 col-lg-offset-0">
					<h3>
						الحلول المكتبية

					</h3>
					<div class="welcome-page">
						<ul>
							<li>
								سهولة الاستخدام
							</li>

							<li>
								بنية الأنظمة المفتوحة من شارب

							</li>

							<li>
								أنظمة صديقة للبيئة

							</li>

							<li>
								التحكم وإدارة التشغيل
							</li>

							<li>
								تأمين البيانات

							</li>

							<li>
								إدارة الملفات

							</li>

							<li>
								التطوير والتوسعة
							</li>
						</ul>
						<a class="btn btn-primary btn-sm pull-left" href="{{action('SolutionsController@getSolutions')}}" role="button">أعرف أكثر</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
