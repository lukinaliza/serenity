<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\UserRole;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRoleCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userrole=UserRole::join('users', 'users.id', '=', 'user_roles.user_id')->
        join('roles','roles.id', '=', 'user_roles.role_id')->
        select('user_roles.id','users.surname as user_surname','users.name as user_name','users.phone as user_phone', 'roles.name as role_name')->get();
        return view('admin.pages.index_userrole')->withUserrole($userrole);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iduser=User::pluck('email','id');
        $idrole=Role::pluck('name','id');
        return view('admin.pages.add_userrole')->withIduser($iduser)->withIdrole($idrole);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userrole = new UserRole();

        $userrole->user_id=$request->user_id;
        $userrole->role_id=$request->role_id;
        $userrole->save();

        $request->session()->flash('success', 'Роль пользователя добавлена!');


        return redirect()->route('userrole.show', $userrole->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userrole=UserRole::find($id);

        return view('admin.pages.show_userrole')->withUserrole($userrole);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userrole=UserRole::find($id);
        $iduser=User::pluck('email','id');
        $idrole=Role::pluck('name','id');
        return view('admin.pages.edit_userrole')->withUserrole($userrole)->withIduser($iduser)->withIdrole($idrole);

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
        $userrole=UserRole::find($id);

        $userrole->user_id=$request->user_id;
        $userrole->role_id=$request->role_id;
        $userrole->save();

        $request->session()->flash('success', 'Роль пользователя изменена успешно!');

        return redirect()->route('userrole.show', $userrole->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userrole=UserRole::find($id);

        $userrole->delete();

        return redirect()->route('userrole.index');

    }
}
