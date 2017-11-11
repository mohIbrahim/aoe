<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsAndMaintenanceController extends Controller
{
    public function getPartsAndMaintenance()
    {
    	return view('parts_and_maintenance.parts_and_maintenance');
    }

    public function takeOrder(Request $request)
    {
        $partsNames = $request->input('parts_names');
        return view('parts_and_maintenance.order_confirmation', compact('partsNames'));
    }
}
