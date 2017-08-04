<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class EZAppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public
        $ezpage_settings,
        $ezapp_set;

    public function __construct(Request $request)
    {
        $this->ezSetDefaultConstants();
        $this->ezSetPathConstants($_SERVER['REQUEST_URI']);

        $this->ezapp_set['view_display'] = EZ_PAGES_DIR._EZPERIOD_.EZ_SET_VIEW;
        $this->ezapp_set['auth_redirect'] = false;
        $this->ezapp_set['redirect_url'] = EZ_DASHBOARD_VIEW;

        //$this->middleware('auth');

    }

    public function ezSetPathConstants($uri) {

        $uriget = explode('?', $uri);
        $uri_array = explode('/', $uriget[0]);

        foreach( $uri_array as $key => $value ) {
            $this->ezapp_set['uri'][$key] = $value;
        }
        if ( isset( $uri_array[1]) ) {
            if (isset($uri_array[2])) {

                /*switch ($uri_array[1]) {
                    case 'learner':

                        (isset($uri_array[1])) ? $platform = $uri_array[1] : $dir = 'learner';
                        (isset($uri_array[2])) ? $dir = $uri_array[2] : $dir = 'courses';

                        if (isset($uri_array[3])) {
                            if ( is_numeric($uri_array[3]) ) {
                                $uri_array[3] = '';
                                $dash = '';
                            }

                            $file = $uri_array[2].$dash.$uri_array[3];

                        } else { $file = $uri_array[2]; }

                        define('RCME_PLATFORM', 'learner');
                        define('RCME_VIEW_PAGES_SUB_DIR', $dir);
                        define('RCME_VIEW_PAGES_SUB_FILE', $file);
                        break;
                }*/
            } else { // default values for uri this can also redirect to page not found

                define('EZ_SET_VIEW', $uri_array[1]);
            }
        } else {
            define('EZ_SET_VIEW',  (defined('EZ_DASHBOARD_VIEW') )? EZ_DASHBOARD_VIEW: 'dashbaord');
        }

    }

    public function ezSetDefaultConstants(){

        // directories
        define('EZ_PAGES_DIR', 'pages');
        define('EZ_LAYOUTS_DIR', 'layouts');
        define('EZ_INCLUDES_DIR', 'includes');
        define('EZ_SECTIONS_DIR', 'sections');

        //files
        define('EZ_MASTER_VIEW', 'master');
        define('EZ_HEAD_VIEW', 'head');
        define('EZ_HEADER_VIEW', 'header');
        define('EZ_FOOTER_VIEW', 'footer');
        define('EZ_NAV_VIEW', 'nav');
        define('EZ_DASHBOARD_VIEW', 'dashboard');
        define('EZ_LOGIN_VIEW', 'ezlogin');

        //symbols
        define('_EZPERIOD_', '.');
        define('_EZFORSLASH_', '/');
    }

    public function ezAppDisplayPage($ezpage_settings = [] ) {

        if ( $this->ezapp_set['auth_redirect'] === true ) {
            return redirect($this->ezapp_set['redirect_url']);
        }

        $view_vars =
            [
                'page_settings' => $ezpage_settings,
                'ezapp_set' => $this->ezapp_set
            ];
        // display the courses page
        return view($this->ezapp_set['view_display'], $view_vars);
    }

}
