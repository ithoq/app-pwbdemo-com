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

    public function createVendor() {

        $this->ezapp_set['view_display'] = 'pages.vendors.create-vendor';

        return $this->ezAppDisplayPage($this->ezpage_settings);

    }

    public function saveVendor(Request $request) {

        $values = $request->all();
        return $values;

    }

}
