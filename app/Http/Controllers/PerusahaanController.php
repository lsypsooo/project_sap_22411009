<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index () {
        return view ('super-admin.perusahaan.index');
    }
}
