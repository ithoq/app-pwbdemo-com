<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class VendorsController extends EZAppController
{
    public function index(Request $request) {
        return Vendor::all();
    }

}
