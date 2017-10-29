<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function getSolutions()
    {
    	return view('solutions');
    }
}
