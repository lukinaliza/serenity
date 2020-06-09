<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainAdminController extends Controller
{
    //Dashboard
    public function mainadmin() {
        return view('admin.panel.mainadmin');
    }
}


