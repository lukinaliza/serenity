<?php

namespace App\Http\Controllers\NewCreate;
use App\Models\Cheque;
use App\User;
use DB;
use App\Models\Sheldue;
use App\Models\Pricelist;
use App\Models\ListSpecialization;
use App\Models\PricelistLine;
use App\Models\ServiceOrderes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceOrderesCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $serviceorder=ServiceOrderes::join('cheques' ,'cheques.id' , '=','service_orderes.cheque_id')->
        join('sheldues' ,'sheldues.id' , '=','service_orderes.sheldue_id')->
        join('pricelist_lines' ,'pricelist_lines.id' , '=','service_orderes.price_line_id')->
        join('user_roles', 'user_roles.id', '=', 'cheques.user_role_id')->
        join('users' ,'users.id' , '=','user_roles.user_id')->
        join('services' ,'services.id' , '=','sheldues.service_id')->
        select('service_orderes.id', 'pricelist_lines.cost', 'users.name as user_name', 'users.surname as user_surname','users.phone as user_phone',
         'sheldues.date as shelduedate', 'sheldues.time as shelduetime', 'services.name as service_name')->get();
        $master=Sheldue::join('specializations', 'specializations.id', '=', 'sheldues.spec_id')->
        join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        join('list_specializations', 'list_specializations.id', '=', 'specializations.list_specialization_id')->
        select('users.name as master_name', 'users.surname as master_surname','list_specializations.name as spec' )->get();
        return view('admin.pages.index_serviceorder')->withServiceorder($serviceorder)->withMaster($master);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Cheque::join('user_roles', 'user_roles.id', '=', 'cheques.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select("cheques.id as id", DB::raw("concat( users.surname,' ',users.name, ' ', users.phone) as user"))->get();
        $phoneuser=$user->pluck('user', 'id');

        $sheldue=Sheldue::join('services', 'services.id', '=', 'sheldues.service_id')->
        join('specializations', 'specializations.id', '=', 'sheldues.spec_id')->
        join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select("sheldues.id as id", DB::raw("concat (sheldues.date,' ',sheldues.time, ' ', services.name,' ',users.surname) as sheldue"))->pluck('sheldue', 'id');

        $cost=PricelistLine::join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        join('pricelists', 'pricelists.id', '=', 'pricelist_lines.pricelist_id')->

        select("pricelist_lines.id as id", DB::raw("concat (services.name,' ',pricelist_lines.cost, ' ', pricelists.name) as price"))->pluck('price', 'id');

        return view('admin.pages.add_serviceorder')->withPhoneuser($phoneuser)->withSheldue($sheldue)->withCost($cost);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviceorder = new ServiceOrderes();

        $serviceorder->cheque_id=$request->cheque_id;
        $serviceorder->sheldue_id=$request->sheldue_id;
        $serviceorder->price_line_id=$request->price_line_id;
        $serviceorder->save();

        $request->session()->flash('success', 'Запись добавлена!');


        return redirect()->route('serviceorder.show', $serviceorder->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serviceorder=ServiceOrderes::find($id);

        return view('admin.pages.show_serviceorder')->withServiceorder($serviceorder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Cheque::join('user_roles', 'user_roles.id', '=', 'cheques.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select("cheques.id as id", DB::raw("concat( users.surname,' ',users.name, ' ', users.phone) as user"))->get();
        $phoneuser=$user->pluck('user', 'id');

        $sheldue=Sheldue::join('services', 'services.id', '=', 'sheldues.service_id')->
        join('specializations', 'specializations.id', '=', 'sheldues.spec_id')->
        join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select("sheldues.id as id", DB::raw("concat (sheldues.date,' ',sheldues.time, ' ', services.name,' ',users.surname) as sheldue"))->pluck('sheldue', 'id');

        $cost=PricelistLine::join('services', 'services.id', '=', 'pricelist_lines.service_id')->
        join('pricelists', 'pricelists.id', '=', 'pricelist_lines.pricelist_id')->

        select("pricelist_lines.id as id", DB::raw("concat (services.name,' ',pricelist_lines.cost, ' ', pricelists.name) as price"))->pluck('price', 'id');

        $serviceorder=ServiceOrderes::find($id);

        return view('admin.pages.edit_serviceorder')->withServiceorder($serviceorder)->withPhoneuser($phoneuser)->withSheldue($sheldue)->withCost($cost);

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
        $serviceorder=ServiceOrderes::find($id);

        $serviceorder->cheque_id=$request->cheque_id;
        $serviceorder->sheldue_id=$request->sheldue_id;
        $serviceorder->price_line_id=$request->price_line_id;
        $serviceorder->save();

        $request->session()->flash('success', 'Запись изменена успешно!');

        return redirect()->route('serviceorder.show', $serviceorder->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceorder=ServiceOrderes::find($id);

        $serviceorder->delete();

        return redirect()->route('serviceorder.index');

    }
}
