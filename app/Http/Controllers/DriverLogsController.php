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

        $select = [
            'job_id',
            'trailer_id',
            'empty',
            'load',
            'delivery'
        ];

        $driver_logs =  $this->DriverLogs->select($select)->get();

        if ( $driver_logs->isNotEmpty() ) {
            $this->ezapp_set['driver_logs'] = $driver_logs->toArray();
            $this->ezapp_set['driver_logs_fields'] = $this->ezGetArrayFields($driver_logs->first()->toArray());
        }

        return $this->ezAppDisplayPage();
    }

    public function saveDriverLog(Request $request) {

        //return $request->all();

        $values = $request->all();

        $find_driver_log = $this->DriverLogs->where(['job_id' => $values['job_id']])->get();


        if ( $find_driver_log->isNotEmpty() ) {
            $create_driver_log = $this->DriverLogs->find($find_driver_log->first()->id);
            if ( isset($values['empty']) ) {
                if ($values['empty'] == 'on') {
                    $create_driver_log->empty = 1;
                }
            }
            if ( isset($values['load']) ) {
                if ($values['load'] == 'on') {
                    $create_driver_log->load = 1;
                }
            }
        } else {

            $create_driver_log = $this->DriverLogs;

            $create_driver_log->job_id = $values['job_id'];
            $create_driver_log->trailer_id = strtoupper($values['trailer_id']);
            $create_driver_log->delivery = $values['delivery'];
        }


        $create_driver_log->save();

        return redirect('driver_logs');

    }

    public function updateDriverLog(Request $request, $job_id ) {

        $this->ezapp_set['js'] = 'forms';
        $this->ezapp_set['job_id'] = $job_id;

        return $this->ezAppDisplayPage();
    }

    public function api(Request $request) {

        $data = $this->DriverLogs->select(['trailer_id', 'delivery'])->get();

        return $data;

    }
}
