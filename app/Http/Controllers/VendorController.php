<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function ShowVendorDashboard()
    {
        return view ('VendorDashboard');
    }
  
}
