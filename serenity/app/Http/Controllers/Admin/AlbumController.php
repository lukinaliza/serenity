<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    //Dashboard
    public function album() {
        return view('admin.out.album');
    }
}


