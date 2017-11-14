@extends('ar.layouts.app')

@section('title')
	 طابعات متعددة الألوان 20~25 ورقة بالدقيقة | الشركة العربية لمهمات المكاتب
@endsection
@section("head")
	<style type="text/css">
		.container{
			font-family: 'Cairo', sans-serif;
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
			<h2> طابعات متعددة الألوان 20~25 ورقة بالدقيقة</h2>
			<hr>
		</div>
		<div class="row">

            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/2010U.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/2010U.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			MX-2010U
		                		</h4>
								طباعة بالألوان ذات جودة عالية من خلال ترقية الميكروستونر ٢٠ ورقة بالدقيق،
								شاشة 7 بوصة تعمل باللمس آل-سي-دي،
								وظائف لتحرير الصور: تكبير لصفحات متعددة - تكرار للصور - عاكس للصور - تكبير ثنائى الاتجاه،
								طباعة من الشبكة
								 ماسح ضوئى ملون من خلال الشبكة لأوراق مقاس A3،
								نظام للمستخدمين يستوعب (1000 مستخدم)
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button"> المزيد من التفاصيل </a>
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
		                			MX-C250
		                		</h4>
								متعددة الوظائف - تصوير بالألوان
- طباعة مباشرة من فلاش ميمورى  طباعة من الشبكة -  مسح ملون من
 خلال الشبكة - وحدة دوبلكس مدمجة 25 نسخة / دقيقة
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button"> المزيد من التفاصيل </a>
		                <div class="clearfix"></div>
		            </div>
	        </div>

        </div>
	</div>
@endsection
