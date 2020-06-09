<?php

namespace App\Http\Controllers\Panel;
use App\Models\Sheldue;
use App\Models\Pricelist;
use DB;
use Carbon\Carbon;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idmaster=Specialization::join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        join('list_specializations', 'list_specializations.id', '=', 'specializations.list_specialization_id')->
        select(DB::raw("concat(users.surname,' ',list_specializations.name)as master"), 'specializations.id as id');

        $idpriceline=Pricelist::join('pricelist_lines', 'pricelists.id', '=','pricelist_lines.pricelist_id')->
        join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        select(DB::raw("concat(services.name,' - ', pricelist_lines.cost, ' - ', pricelists.name)as service"), 'pricelist_lines.id as id');
        $idservice=$idpriceline->pluck('service','id');
        $idspecial=$idmaster->pluck('master','id');

        $idspecial=$idmaster->pluck('master','id');
        return view('admin.panel.calendar')->withIdspecial($idspecial)->withIdservice($idservice); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idmaster=Specialization::join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        join('list_specializations', 'list_specializations.id', '=', 'specializations.list_specialization_id')->
        select(DB::raw("concat(users.surname,' ',list_specializations.name)as master"), 'specializations.id as id');

        $idpriceline=Pricelist::join('pricelist_lines', 'pricelists.id', '=','pricelist_lines.pricelist_id')->
        join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        select(DB::raw("concat(services.name,' - ', pricelist_lines.cost, ' - ', pricelists.name)as service"), 'pricelist_lines.id as id');
        $idservice=$idpriceline->pluck('service','id');
        $idspecial=$idmaster->pluck('master','id');

        $idspecial=$idmaster->pluck('master','id');
        return view('admin.panel.calendar')->withIdspecial($idspecial)->withIdservice($idservice); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $sheldue = new Sheldue();

        $sheldue->date=Carbon::createFromTimestamp(strtotime($request->date . $request->time . ":00"));
        $sheldue->price_line_id=$request->price_line_id;
        $sheldue->spec_id=$request->spec_id;
        $sheldue->save();

        $request->session()->flash('success', 'График добавлен!');


        return redirect()->route('calendar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
