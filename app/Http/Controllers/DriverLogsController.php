<?php

namespace App\Http\Controllers;

use App\Models\DriverLog;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;
use Illuminate\Support\Facades\Auth;

class DriverLogsController extends EZAppController
{
    public function index(Request $request) {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'tables';
        $this->ezapp_set['driver_logs'] = false;
        $this->ezapp_set['modal'] = true;

        $driver_logs =  $this->DriverLogs->all();

        if ( $driver_logs->isNotEmpty() ) {
            $this->ezapp_set['driver_logs'] = $driver_logs->toArray();
            $this->ezapp_set['driver_logs_fields'] = $this->ezGetArrayFields($driver_logs->first()->toArray());
        }

        return $this->ezAppDisplayPage();
    }

    public function saveDriverLog(Request $request) {

        $values = $request->all();
        //return $values;

        $create_driver_log = $this->DriverLogs;

        $create_driver_log->job_id = $values['job_id'];
        $create_driver_log->trailer_id = strtoupper($values['trailer_id']);
        $create_driver_log->delivery = $values['delivery'];
        $create_driver_log->save();

        return redirect('driver_log/create');

    }
}
