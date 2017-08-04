<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class LoginController extends EZAppController
{

    public function ezlogin( Request $request ) {
        $this->ezpage_settings = [];

        //$this->ezapp_set['display_page_file'] = $this->ezapp_set['display_page_file'].'-front-matter';

        return $this->EZAppDisplayPage($this->ezpage_settings);

    }
}
