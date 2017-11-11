<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getMonochrome2025()
    {
        return view('products.monochrome_2025_ppm');
    }

    public function getMonochrome2630()
    {
        return view('products.monochrome_2630_ppm');
    }

    public function getMonochrome3140()
    {
        return view('products.monochrome_3140_ppm');
    }

    public function getMonochrome41Plus()
    {
        return view('products.monochrome_41_plus');
    }




    public function getMulticolor2025()
    {
        return view('products.multicolor_2025_ppm');
    }

    public function getMulticolor2630()
    {
        return view('products.multicolor_2630_ppm');
    }

    public function getMulticolor3140()
    {
        return view('products.multicolor_3140_ppm');
    }

    public function getMulticolor41Plus()
    {
        return view('products.multicolor_41_plus');
    }







    public function getProductLineup()
    {
        return view('products.lineup');
    }
    public function getHvProductionMfp()
    {
        return view('products.HvProductionMfp');
    }
}
