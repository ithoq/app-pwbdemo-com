<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\EZAppController;

class UsersController extends EZAppController
{
    public function index(Request $request) {
        return User::all();
    }
}
