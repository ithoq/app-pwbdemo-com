<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class FormsController extends EZAppController
{
    public function index(Request $request){

        return $this->ezAppDisplayPage($this->ezpage_settings);

    }
}
