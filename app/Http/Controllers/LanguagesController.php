<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LanguagesController extends Controller
{
    public function switchToArabic()
    {
    	session(['locale'=>'ar']);
    	return redirect()->back();
    }


    public function switchToEnglish()
    {
    	session(['locale'=>'en']);
    	return redirect()->back();
    }
}
