@extends('layouts.app')

@section('title')
	AOE | Product Lineup
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
			<h2> 23 Pages Per Minute</h2>
			<hr>
		</div>
		<div class="row">


			<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/6031N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/6031N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			6031N | 6026N
		                		</h4>
								Network-Ready Solution
								3-in-1 Performance :
								Copy, Print, and Colour Scan
								Built-In Duplex Module and Optional RSPF
								Large Paper Capacity : up to 2100 sheets
								Convenient A3 Colour Scanning	
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/M314NV.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/M314NV.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			M314NV | M264NV
		                		</h4>
								Copy / Network Print / Network color Scan / SharpDesk
								Fast output of 31 ppm
								Standard 600 sheets paper capacity upgradable to  2100 sheets
								Built-In Stackless Duplex Module
								 ...and more
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/M315N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/M315N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			M315N | M265N
		                		</h4>
								Super-Efficient Output at 31 /26ppm
								Standard-Equipped RSPF and Duplex Module
								Inner Finisher and Job Separator Options
								Option extrapaper drawers gives a total  of 2,100 sheets.
								Other Key Features : Multi-Shot / N-up printing / Card Shot /Job Build ...
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
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
		                			C300 | C250
		                		</h4>
								Small in size but big on style and performance, this compact colour A4 MFP—with a footprint of just 429 × 509 mm—can bring convenient three-in-one functionality to any workplace. Ideal for streamlining the business operations of small workgroups in large offices or as the solo document performer in SOHO, small shops, and more, the MX-C300/C250 copies, prints, and scans with ease.
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/5623NV.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/5623NV.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			5623NV
		                		</h4>

								Speedy Copying with SOPM  23 PPM
								Built-In Duplex Module and Optional RSPF
								Versatile Editing Functions
								Speedy Network Printing
								A3 Colour Scanning over the Network*
								Large Paper Capacity (Up to 1100 sheets)
								Auto tray switching
								Cost-efficient Toner Save mode
								Pre-Heat and Auto Power Shut-Off modes
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/2500N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/2500N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			2500N | 2000U
		                		</h4>

								A3 Color Solution
								Copy / Network Print / network Scan
								RSPF(100 sheets) and Stackless Duplex Module
								Auto Colour Selection
								7.0-inch WVGA touchscreen
								colour LCD
								User Authentication covering up to 1,000 users
								Multi-Shot copying and N-up printing
								... Click on Photo for more details
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>

	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/3560N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/3560N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			3560N | 3060N
		                		</h4>
								Color Printing, Network Printing, Network Scanner, Optional Fax (White - Black).
								Ready to handle cloud services and applications such as Google Drive, One Drive and SharePoint Point Online.
								Speeds 30/35/40/60 copies / minutes.
								Easy to use imaging and scanning modes.
								Save function files / secure multi-layer data files and / friendly environment by controlling energy use.
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	



















































	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/MX-M1204.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/MX-M1204s.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body">
		                		<h4>
		                			M1204
		                		</h4>
								High-Volume Performance Power
								This series can deliver 120, 105, or 90 cpm/ppm of beautiful, high-quality B/W documents. 
								Expandable Document Solutions
								A Variety of Options for Flexible Configuration
								A Heavy-Duty Productivity Booster
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

								The high-performing MX-M754N/M654N boasts everything needed to bring exceptional document workflow at a speed of 75 / 65 ppm.
								Speedy Document Feeding
								10.1-Inch Colour LCD Touchscreen
								Seamless Document Management
								Sharp OSA allows integration with cloud-based applications ..And many more.
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>



	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/M564N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/M564N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			M364N | M464N | M564N
		                		</h4>
								Productive Performance
								Eco Friendliness
								Ease of Use
								COPYING & NETWORK PRINTING ( 56 PPM)
								VERSATILE OPERATION:
								Versatile Paper Handling
								Image Editing Functions
								A3 Colour Network Scanning
								High-Speed Faxing (OPTION)
								...and many more
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>




	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/B200.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/B200.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			B200
		                		</h4>
								SOPM ( 20ppm) and Electronic Sorting
								Timesaving 50-Sheet SPF
								Fast Printing with Sharp Technology
								Full-Colour Scanning
								One-Touch ID Card Copy
								Superb Image Quality
								Wide zoom range from 25% to 400%
								Space-saving wingless design
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>
	        </div>





	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/6023N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/6023N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			6023N | 6020N
		                		</h4>
								3-in-1 Performance (23PPM / 20PPM)
								Standard-equipped with network printing
								User-Friendly Control Panel
								Built-In Duplex Module and Optional RSPF
								Convenient A3 Colour Scanning
								Auto paper/magnification selection
								Auto tray switching
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>



	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/2010U.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/2010U.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			2010U
		                		</h4>
								High-quality colour via the upgraded Microstoner (20ppm)
								7.0 inch W-VGA touch screen LCD
								Image Editing Functions:
								Multi-Page Enlargement /Photo Repeat /Mirror Image /XY Zoom /B/W Reverse
								NETWORK-READY
								A3 Colour Network Scanning
								User Authentication (1000 users)	
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>




	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/5731.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/5731.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			5731 | 5726
		                		</h4>
								Speedy Copying (31 /26 ppm) and Quick First Copy Time
								Built-in Stackless Duplex Module
								Electronic Sorting and Offset Stacking
								Job Build for Large-Volume Scanning
								Versatile Editing Functions
								Digital Automatic Exposure
								25% to 400% zoom
								High-Quality Printing with Sharp Technology
								FAXING (option)	
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	        





	        
	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/M354U-N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/M354U-N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			M354U/N | M314U/N | M264U/N
		                		</h4>
								COPYING & NETWORK PRINTING
								A3 Colour Network Scanning*​
								Document Management on the Hard Disk
								Sharp OSA Network Scanner Tool :
								Sharp OSA Network Scanner Tool give everyone in the office easy one-touch scanning to their PC from any networked MFP
								 Copy / Print  at  35 / 31  ppm
								 * some functions require option with U model	
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>










	        
	        





	        







	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >
		                <a href="{{asset('images/products/3640N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/3640N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			3640N | 3140N | 2640N
		                		</h4>
								Digital Full Colour Multifunctional System : Copy  / Network Print / Network scan / SharpDesk
								10.1-inch colour LCD touchscreen
								Breathtaking Image Quality with Sharp’s second-generation Mycrostoner-HG (High Grade) and an improved imaging system combine to allow the full spectrum of colour reproduction in crisp, sharp detail
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>









	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/5141N.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/5141N.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                	

		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			5141N | 4141N
		                		</h4>
								Digital Full Colour Multifunctional System
								Enhanced operability, fast 51/41-ppm output, breathtaking image quality
								COPYING & NETWORK PRINTING
								A3 Colour Network Scanning
								MULTI-LAYERED SECURITY
								 ... AND MORE
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>


	        



	        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 col-lg-offset-0">
	        		<div class="thumbnail hvr-float" >	        			
		                <a href="{{asset('images/products/5620V.jpg')}}" target="_blank" >
		                	<img src="{{asset('images/products/5620V.jpg')}}" class="img-responsive" alt="...">
		                </a>
		                <div class="panel panel-default">
		                	<div class="panel-body" style="min-height: 300px">
		                		<h4>
		                			5620V
		                		</h4>
								image-editing functions :
								ID Card Copy*, XY Zoom, Margin Shift*, Edge/Centre Erase ...etc
								continuous copy rate of 20 cpm
								Efficient, Network-Upgradeable Printing
								A3 Colour Scanning
								Digital auto exposure control, Text/Photo mode
		                	</div>
		                </div>
		                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary btn-block" role="button">More details</a>
		                <div class="clearfix"></div>
		            </div>	        	
	        </div>




	        




	        







	        
	        
        
        </div>
	</div>
@endsection
