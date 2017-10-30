<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsAndMaintenanceController extends Controller
{
    public function getPartsAndMaintenance()
    {
    	return view('parts_and_maintenance');
    }
}
