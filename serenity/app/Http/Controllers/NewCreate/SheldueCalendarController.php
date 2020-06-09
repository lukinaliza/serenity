<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Sheldue;
use DB;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SheldueCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheldue=Sheldue::join('specializations', 'specializations.id', '=', 'sheldues.spec_id')->
        join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        join('pricelist_lines', 'pricelist_lines.id', '=', 'sheldues.price_line_id')->
        join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        select(DB::raw("concat('№',sheldues.id,' - ',services.name,' - ',users.surname)as title"), 'sheldues.date as start', 'sheldues.date as end' )->get();
        return response() -> json($sheldue);
    }

  }
