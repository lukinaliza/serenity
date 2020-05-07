<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalController extends Controller
{
    //Dashboard
    public function sale() {
        return view('admin.out.sale');
    }
}


