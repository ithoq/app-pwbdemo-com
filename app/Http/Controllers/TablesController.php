<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class TablesController extends EZAppController
{
    public function index(Request $request) {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'tables';

        return $this->ezAppDisplayPage();
    }
}
