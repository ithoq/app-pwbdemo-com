<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;
use Illuminate\Support\Facades\Auth;

class VendorsController extends EZAppController
{

    public function index(Request $request) {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'tables';
        $this->ezapp_set['vendors'] = false;

        $vendors =  Vendor::all();

        if ( $vendors->isNotEmpty() ) {
            $this->ezapp_set['vendors'] = $vendors->toArray();
            $this->ezapp_set['vendors_fields'] = $this->ezGetArrayFields($vendors->first()->toArray());
        }

        return $this->ezAppDisplayPage();
    }

    public function createVendor() {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'forms';

        return $this->ezAppDisplayPage();
    }

    public function saveVendor(Request $request) {

        $values = $request->all();
        //return $values;

        $create_vendor = $this->Vendors;

        $create_vendor->vendor_id = strtoupper($values['vendor_id']);
        $create_vendor->name = strtoupper($values['name']);
        $create_vendor->save();

        return redirect('vendors/create');

    }
}
