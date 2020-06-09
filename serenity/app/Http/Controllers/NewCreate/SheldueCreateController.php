<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Sheldue;
use App\Models\Pricelist;
use DB;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SheldueCreateController extends Controller
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
        join('pricelist_lines', 'pricelist_lines.id', '=', 'sheldues.price_line_id')->
        join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select('sheldues.id', 'sheldues.date' ,'users.surname as master', 'services.name as service_name')->get();
        return view('admin.pages.index_sheldue')->withSheldue($sheldue);;
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
        return view('admin.pages.add_sheldue')->withIdspecial($idspecial)->withIdservice($idservice);
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

        $sheldue->date=$request->date;
        $sheldue->price_line_id=$request->price_line_id;
        $sheldue->spec_id=$request->spec_id;
        $sheldue->save();

        $request->session()->flash('success', 'График добавлен!');


        return redirect()->route('sheldue.show', $sheldue->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sheldue=Sheldue::find($id);

        return view('admin.pages.show_sheldue')->withSheldue($sheldue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $sheldue=Sheldue::find($id);

        return view('admin.pages.edit_sheldue')->withSheldue($sheldue)->withIdspecial($idspecial)->withIdservice($idservice);

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
        $sheldue=Sheldue::find($id);

        $sheldue->date=$request->date;
        $sheldue->price_line_id=$request->price_line_id;
        $sheldue->spec_id=$request->spec_id;
        $sheldue->save();

        $request->session()->flash('success', 'График изменен успешно!');

        return redirect()->route('sheldue.show', $sheldue->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sheldue=Sheldue::find($id);

        $sheldue->delete();

        return redirect()->route('sheldue.index');

    }
}
