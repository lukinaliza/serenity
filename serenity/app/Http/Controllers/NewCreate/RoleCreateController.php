<?php

namespace App\Http\Controllers\NewCreate;


use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $role=Role::orderBy('created_at')->get();
        return view('admin.pages.index_role')->withRole($role);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();

        $role->name=$request->name;
        $role->save();

        $request->session()->flash('success', 'Роль добавлена!');

        //return view('admin.pages.show_role')->withRole($role);

        return redirect()->route('role.show', $role->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role=Role::find($id);

        return view('admin.pages.show_role')->withRole($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::find($id);

        return view('admin.pages.edit_role')->withRole($role);

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
        $role=Role::find($id);

        $role->name=$request->name;
        $role->save();

        $request->session()->flash('success', 'Роль изменена успешно!');

        return redirect()->route('role.show', $role->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::find($id);

        $role->delete();

        return view('admin.pages.index_role');

    }
}
