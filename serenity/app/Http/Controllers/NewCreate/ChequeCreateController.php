<?php

namespace App\Http\Controllers\NewCreate;

use App\User;
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
        $cheque=Cheque::join('users' ,'users.id' , '=','cheques.user_id')->
        select('cheques.id', 'cheques.date', 'users.surname as user_surname', 'users.name as user_name','users.phone as user_phone')->get();
        return view('admin.pages.index_cheque')->withCheque($cheque);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iduser=User::pluck('email','id');

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
        $cheque->user_id=$request->user_id;
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
        $cheque=Cheque::find($id);
        $iduser=User::pluck('email','id');

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
        $cheque->user_id=$request->user_id;
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
