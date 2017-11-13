<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AOE\Language;

class WelcomeController extends Controller
{
	use Language;
    public function getWelcome()
    {
		if($this->isArabic()) {
			return view('ar.welcome');
		}

		return view('welcome');
    }
}
