<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;
use Illuminate\Support\Facades\Auth;

class UsersController extends EZAppController
{
    public function index(Request $request) {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'tables';
        $this->ezapp_set['vendors'] = false;

        $users =  User::all();

        if ( $users->isNotEmpty() ) {
            $this->ezapp_set['users'] = $users->toArray();
            $this->ezapp_set['users_fields'] = $this->ezGetArrayFields($users->first()->toArray());
        }

        return $this->ezAppDisplayPage();
    }

    public function createUser() {

        //$this->ezapp_set['view_display'] = '';
        $this->ezapp_set['js'] = 'forms';

        return $this->ezAppDisplayPage();
    }

    public function logoutUser() {

        Auth::logout();

        return redirect('login');
    }
}
