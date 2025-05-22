<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSuperAdmin extends Controller
{
    public function index () {
        return view('super-admin.index');
    }
}
