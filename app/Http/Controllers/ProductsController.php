<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProductLineup()
    {
    	return view('products.lineup');
    }

    public function get23Ppm()
    {
    	return view('products.23ppm');
    }

    public function get20Ppm()
    {
    	return view('products.20ppm');
    }

    public function getHvProductionMfp()
    {
        return view('products.HvProductionMfp');
    }
}
