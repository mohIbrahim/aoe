<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getContactUs()
    {
    	return view('contact_us');
    }

    public function sendAnEmail(Request $request)
    {
    	 $this->validate(
                            $request 
                            ,
                                [
                                    'name'                          =>  'required', 
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
                                                            ['secret'=>'6LduWjAUAAAAAAeGXOgYZ-HFyzKkexTQ15hypERI',
                                                             'response'=> $token
                                                            ]                        
                                        ]
                                    );

            $result = json_decode($response->getBody()->getContents());
            if($result->success)
            {
                $name       = $request->input('name');
                $email      = $request->input('email');
                $message    = $request->input('message');
    	       \Mail::to('j.sameh@infomed-me.com')->send( new ContactUsMail($name, $email, $message));
                flash()->success('The EMail has been sent!');
                return redirect()->action('StaticPagesController@getHomePage');
                
            }else
            {
                flash()->error('Please verify you are not a robot!');
                return redirect()->action('StaticPagesController@getContactUsPage');
            }
        }else
        {
            flash()->error('Please verify you are not a robot!');
            return redirect()->action('StaticPagesController@getContactUsPage');
        }
    }
}
