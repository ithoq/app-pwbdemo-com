<?php

namespace App\Http\Controllers;

use App\Models\DriverLog;
use App\Models\Vendor;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EZAppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public
        $ezapp_set;

    public
        $Vendors,
        $DriverLogs;

    public function __construct(Request $request)
    {
        $this->ezSetDefaultConstants();
        $this->ezSetPathConstants($_SERVER['REQUEST_URI']);

        $this->ezapp_set['view_display'] = EZ_PAGES_DIR.EZ_SET_VIEWDIR.EZ_SET_VIEW;
        $this->ezapp_set['auth_redirect'] = false;
        $this->ezapp_set['redirect_url'] = EZ_DASHBOARD_VIEW;
        $this->ezapp_set['base_url'] = url('/');
        $this->ezapp_set['js'] = 'dashboard';

        $this->Vendors = new Vendor();
        $this->DriverLogs = new DriverLog();

        $this->middleware('auth');


    }

    public function ezSetPathConstants($uri) {

        $uriget = explode('?', $uri);
        $uri_array = explode('/', $uriget[0]);

        foreach( $uri_array as $key => $value ) {
            $this->ezapp_set['uri'][$key] = $value;
        }
        if ( isset( $uri_array[1]) ) {
            if (isset($uri_array[2])) {
                define('EZ_SET_VIEW', $uri_array[1].'-'.$uri_array[2]);
                define('EZ_SET_VIEWDIR', $uri_array[1].'.');
                define('EZ_SET_MODEL', $uri_array[1]);
            } else {
                define('EZ_SET_VIEW', $uri_array[1]);
                define('EZ_SET_MODEL', $uri_array[1]);

                $path = resource_path();
                if (file_exists($path.'/views/pages/'.$uri_array[1]) ) {
                    define('EZ_SET_VIEWDIR', $uri_array[1].'.');
                } else {
                    define('EZ_SET_VIEWDIR', '');
                }
            }
        }

        if(!defined('EZ_SET_VIEW') ) { define('EZ_SET_VIEW', ''); }
        if(!defined('EZ_SET_VIEWDIR') ) { define('EZ_SET_VIEWDIR', ''); }
        if(!defined('EZ_SET_MODEL') ) { define('EZ_SET_MODEL', ''); }


    }

    public function ezSetDefaultConstants(){

        // directories
        define('EZ_PAGES_DIR', 'pages.');
        define('EZ_LAYOUTS_DIR', 'layouts.');
        define('EZ_INCLUDES_DIR', 'includes.');
        define('EZ_SECTIONS_DIR', 'sections.');

        //files
        define('EZ_MASTER_VIEW', 'master');
        define('EZ_HEAD_VIEW', 'head');
        define('EZ_HEADER_VIEW', 'header');
        define('EZ_FOOTER_VIEW', 'footer');
        define('EZ_NAV_VIEW', 'nav');
        define('EZ_DASHBOARD_VIEW', 'dashboard');
        define('EZ_LOGIN_VIEW', 'ezlogin');

        //symbols
    }

    public function ezGetArrayFields($array) {

        foreach($array as $key => $value ) {

            $field[] = $key;

        }

        return $field;
    }

    public function ezAppDisplayPage() {

        if ( $this->ezapp_set['auth_redirect'] === true ) {
            return redirect($this->ezapp_set['redirect_url']);
        }

        $view_vars =
            [
                'ezapp_set' => $this->ezapp_set
            ];

        // display the courses page
        return view($this->ezapp_set['view_display'], $view_vars);
    }

}
