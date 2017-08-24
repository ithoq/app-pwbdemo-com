<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;
use Illuminate\Support\Facades\Auth;

class JobsController extends EZAppController
{
    public function index(Request $request) {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'tables';
        $this->ezapp_set['jobs'] = false;
        $this->ezapp_set['modal'] = false;

        $jobs =  Job::all();

        if ( $jobs->isNotEmpty() ) {
            $this->ezapp_set['jobs'] = $jobs->toArray();
            $this->ezapp_set['jobs_fields'] = $this->ezGetArrayFields($jobs->first()->toArray());
        }

        return $this->ezAppDisplayPage();
    }

    public function updateJob() {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'forms';

        return $this->ezAppDisplayPage();
    }

    public function api() {

        $api['job'] = [
            'job_id' => 12345678,
            'type' => 'text',
            'service' => 'text',
            'slot' => 'text',
            'sales_rep' => 'text',
            'customer' => [
                [
                    'customer_id' => 'ABC12345',
                    'reference' => 'text',
                    'charges' => 'text'
                ]
            ],
            'container' => [
                [
                    'container_id' => 123455456,
                    'size' => '24x45x68',
                    'seal_id' => 2345674
                ]
            ],
            'master_bl' => 'text',
            'mib_id' => 123488726,
            'vessel' => [
                [
                    'vessel_id' => 123456,
                    'voyage' => 'text',
                    'pier' => 'text',
                    'origin' => 'text',
                    'sailed' => 'date',
                    'disch' => 'text',
                    'eta' => 'date',
                    'pieces' => 200,
                    'weight' => 'text',
                    'cube' => 'text',
                    'uom' => 'text',
                    'description' => 'text',
                    'hazardous' => 1,
                    'headload' => 0,
                    'night_pickup' => 1,
                    'split_chassis' => 1,
                    'hold' => 0,
                    'sat_gate' => 2,
                    'web_notes' => 'text'
                ]
            ],
            'documents_received' => [
                [
                    'datetime' => 'datetime',
                    'user_code' => 123456,
                    'input_data' => 'text'
                ]
            ],
            'obl_received' => 'datetime',
            'discharge_date' => 'datetime',
            'pier_lfd' => 'date',
            'ptt_requested' => [
                [
                    'datetime' => 'datetime',
                    'accepted' => 'text',
                    'time' => 'time',
                ]
            ],
            'pier_ready' => [
                [
                    'datetime' => 'datetime',
                    'terminal_location' => 'text',
                    'appt_date' => 'datetime',
                ]
            ],
            'dispatched' => [
                [
                    'datetime' => 'datetime',
                    'trucker' => [
                        [
                            'id' => 1234567,
                            'alis' => 'text',
                            'name' => 'text'
                        ]
                    ]
                ]
            ],
            'outgated' => 'datetime',
            'date_in' => 'datetime',
            'chassis' => 'text',
            'strip_date' => 'datetime',
            'available_at_cfs' => 'datetime',
            'headload_ft' => 'text',
            'free_time_expires' => 'text',
            'go_starts' => 'text',
            'container_empty' => [
                [
                    'datetime' => 'datetime',
                    'steamship_line' => 'text',
                    'per_diem_free_days' => 'text',
                    'per_diem_lfd' => 'text'
                ]
            ],
            'container_returned' => [
                [
                    'datetime' => 'datetime',
                    'trucker' => [
                        [
                            'id' => 1234567,
                            'alis' => 'text',
                            'name' => 'text'
                        ]
                    ]
                ]
            ]



        ];

        return $api;

        //return $this->ezAppDisplayPage();

    }
}
