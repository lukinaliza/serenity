<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\UserRole;
use App\Models\Role;
use App\User;
use App\Models\ListSpecialization;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecializCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializ=Specialization::join('user_roles', 'user_roles.id', '=', 'specializations.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        join('list_specializations', 'list_specializations.id', '=', 'specializations.list_specialization_id')->
        select('specializations.id',
                'list_specializations.name as specializ_name',
                'users.surname as user_surname',
                 'users.name as user_name')->get();

        return view('admin.pages.index_specializ')->withSpecializ($specializ);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iduserrole=UserRole::join('users', 'users.id', '=', 'user_roles.user_id')->join('roles', 'roles.id', '=', 'user_roles.role_id')->
        where('roles.name', '=', 'Мастер')->
        select('users.surname as surname', 'user_roles.id as id')->get();
        $iduser=$iduserrole->pluck('surname','id');

        $idlistspecializ=ListSpecialization::pluck('name','id');

        return view('admin.pages.add_specializ')->withIduser($iduser)->withIdlistspecializ($idlistspecializ);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specializ = new Specialization();

        $specializ->list_specialization_id=$request->list_specialization_id;
        $specializ->user_role_id=$request->user_role_id;
        $specializ->save();

        $request->session()->flash('success', 'Специалист добавлен!');


        return redirect()->route('specializ.show', $specializ->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specializ=Specialization::find($id);

        return view('admin.pages.show_specializ')->withSpecializ($specializ);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specializ=Specialization::find($id);
        $iduserrole=UserRole::join('users', 'users.id', '=', 'user_roles.user_id')->join('roles', 'roles.id', '=', 'user_roles.role_id')->
        where('roles.name', '=', 'Мастер')->
        select('users.surname as surname', 'user_roles.id as id')->get();
        $iduser=$iduserrole->pluck('surname','id');

        $idlistspecializ=ListSpecialization::pluck('name','id');
        return view('admin.pages.edit_specializ')->withSpecializ($specializ)->withIduser($iduser)->withIdlistspecializ($idlistspecializ);

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
        $specializ=Specialization::find($id);

        $specializ->list_specialization_id=$request->list_specialization_id;
        $specializ->user_role_id=$request->user_role_id;
        $specializ->save();

        $request->session()->flash('success', 'специалист изменен успешно!');

        return redirect()->route('specializ.show', $specializ->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specializ=Specialization::find($id);

        $specializ->delete();

        return redirect()->route('specializ.index');

    }
}
