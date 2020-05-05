<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\UserRole;
use App\Models\Role;
use App\User;
use DB;
use App\Models\Cheque;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChequeCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser=new User;
        $cheque=Cheque::join('user_roles', 'user_roles.id', '=', 'cheques.user_role_id')->
        join('users', 'users.id', '=', 'user_roles.user_id')->
        select('cheques.id', 'cheques.date', 'users.surname as user_surname', 'users.name as user_name','users.phone as user_phone')->get();
        return view('admin.pages.index_cheque')->withCheque($cheque);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iduserrole=UserRole::join('users', 'users.id', '=', 'user_roles.user_id')->join('roles', 'roles.id', '=', 'user_roles.role_id')->
        where('roles.name', '=', 'Клиент')->
        select( "user_roles.id as id", DB::raw("concat(users.surname,' ',users.name,' | ',email) as mail"))->get();

        $iduser=$iduserrole->pluck('mail','id');
        return view('admin.pages.add_cheque')->withIduser($iduser);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheque = new Cheque();

        $cheque->date=$request->date;
        $cheque->user_role_id=$request->user_role_id;
        $cheque->save();

        $request->session()->flash('success', 'Чек добавлен!');


        return redirect()->route('cheque.show', $cheque->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cheque=Cheque::find($id);

        return view('admin.pages.show_cheque')->withCheque($cheque);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iduserrole=UserRole::join('users', 'users.id', '=', 'user_roles.user_id')->join('roles', 'roles.id', '=', 'user_roles.role_id')->
        where('roles.name', '=', 'Клиент')->
        select('users.email as mail', 'users.id as id')->get();
        $iduser=$iduserrole->pluck('mail','id');
        $cheque=Cheque::find($id);
        return view('admin.pages.edit_cheque')->withCheque($cheque)->withIduser($iduser);

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
        $cheque=Cheque::find($id);

        $cheque->date=$request->date;
        $cheque->user_role_id=$request->user_role_id;
        $cheque->save();

        $request->session()->flash('success', 'Чек  изменен успешно!');

        return redirect()->route('cheque.show', $cheque->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cheque=Cheque::find($id);

        $cheque->delete();

        return redirect()->route('cheque.index');

    }
}
