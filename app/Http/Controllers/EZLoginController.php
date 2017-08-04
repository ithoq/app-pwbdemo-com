<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class EZLoginController extends EZAppController
{
    public function index( Request $request ) {


        $this->ezpage_settings = [];

        //$this->ezapp_set['view_display'] = $this->ezapp_set['display_page_file'].'-front-matter';

        return $this->ezAppDisplayPage($this->ezpage_settings);

    }
}
