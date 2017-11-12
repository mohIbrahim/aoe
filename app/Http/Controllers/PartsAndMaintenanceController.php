<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Mail\PartsAndMaintenanceEmail;

class PartsAndMaintenanceController extends Controller
{
    public function getPartsAndMaintenance()
    {
    	return view('parts_and_maintenance.parts_and_maintenance');
    }

    public function takeOrder(Request $request)
    {
        $this->validate(
                            $request,
                            ['parts_names'=>'required'],
                            ['parts_names.required'=>'Please select the spare part that you want to make an order of it.']
                        );
        $partsNames = $request->input('parts_names');

        return view('parts_and_maintenance.order_confirmation', compact('partsNames'));
    }


	public function confirmTheOrder(Request $request)
	{
		$this->validate(
						   $request
						   ,
							   [
								   'name'                          =>  'required',
								   'phone_number'                  =>  'required',
								   'email'                         =>  'required|email',
								   'message'                       =>  'required',
								   'g-recaptcha-response'          =>  'required'
							   ]
						   ,
							   [
								   'g-recaptcha-response.required' =>  'Please verify you are not a robot!'
							   ]
					   );

	   $token = $request->input('g-recaptcha-response');

	   if($token)
	   {

		   $client = new Client();
		   $response = $client->post('https://www.google.com/recaptcha/api/siteverify',
									   [
										   'form_params'=>
														   ['secret'=>'6LeaXDgUAAAAAEYDY2ZLPp-3Z8O516bHq3TzQeQs',
															'response'=> $token
														   ]
									   ]
								   );

		   $result = json_decode($response->getBody()->getContents());
		   if ($result->success) {
               $partsNames    = $request->input('parts_names');
			   $name         = $request->input('name');
			   $phoneNumber  = $request->input('phone_number');
			   $email        = $request->input('email');
			   $message      = $request->input('message');


			  \Mail::to('j.sameh@infomed-me.com')->send( new PartsAndMaintenanceEmail($partsNames, $name, $phoneNumber, $email, $message));
			   flash()->success('The EMail has been sent!');
			   return redirect()->action('PartsAndMaintenanceController@getPartsAndMaintenance');

		   }else {
			   flash()->error('Please verify you are not a robot!');
			   return redirect()
                        ->back()
                        ->withErrors(['Please verify you are not a robot!'])
                        ->withInputs();
		   }
	   }else
	   {
		   flash()->error('Please verify you are not a robot!');
		   return redirect()->action('StaticPagesController@getContactUsPage');
	   }
	}
}
