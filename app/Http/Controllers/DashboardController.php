<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class DashboardController extends EZAppController
{


    public function index(Request $request){

        $this->ezapp_set['js'] = 'dashboard';

        return $this->ezAppDisplayPage();

    }
}
