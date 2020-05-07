<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    //Dashboard
    public function service() {
        return view('admin.out.service');
    }
}


