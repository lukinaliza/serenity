<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //Dashboard
    public function about() {
        return view('admin.out.about');
    }
}


