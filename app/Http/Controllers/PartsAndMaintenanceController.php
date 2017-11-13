<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartsAndMaintenanceRequest;
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


	public function confirmTheOrder(PartsAndMaintenanceRequest $request)
	{
	   $token = $request->input('g-recaptcha-response');
	   if($token) {
		   $result = $this->checkRecaptcha($token);
		   if ($result->success) {
			   $this->sendMail('j.sameh@infomed-me.com', $request);
			   flash()->success('The mail has been sent and your request are in progress!');
			   return redirect()->action('PartsAndMaintenanceController@getPartsAndMaintenance');
		   }else {
			   flash()->error('Please verify you are not a robot!');
			   return redirect()
                        ->back()
                        ->withErrors(['Please verify you are not a robot!'])
                        ->withInputs();
		   }
	   }else {
		   flash()->error('Please verify you are not a robot!');
		   return redirect()->action('StaticPagesController@getContactUsPage');
	   }
	}

	private function checkRecaptcha($token)
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
		return $result;
	}

	private function sendMail($to, PartsAndMaintenanceRequest $request)
	{
		$partsNames  = $request->input('parts_names');
		$name        = $request->input('name');
		$phoneNumber = $request->input('phone_number');
		$email       = $request->input('email');
		$companyName = $request->input('company');
		$city		= $request->input('city');
		$area		= $request->input('area');
		$modelCode	= $request->input('model_code');
		$message		= $request->input('message');
	   return \Mail::to($to)->send( new PartsAndMaintenanceEmail(
												$partsNames,
												$name,
												$phoneNumber,
												$email,
												$companyName,
												$city,
												$area,
												$modelCode,
												$message));
	}
}
