<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Master;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master=Master::orderBy('created_at')->get();
        return view('admin.pages.index_master')->withMaster($master);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_master');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $master = new Master();

        $master->surname=$request->surname;
        $master->name=$request->name;
        $master->phone=$request->phone;
        $master->save();

        $request->session()->flash('success', 'Мастер добавлен!');


        return redirect()->route('master.show', $master->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $master=Master::find($id);

        return view('admin.pages.show_master')->withMaster($master);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $master=Master::find($id);

        return view('admin.pages.edit_master')->withMaster($master);

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
        $master=Master::find($id);

        $master->surname=$request->surname;
        $master->name=$request->name;
        $master->phone=$request->phone;
        $master->save();

        $request->session()->flash('success', 'Мастер изменен успешно!');

        return redirect()->route('master.show', $master->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $master=Master::find($id);

        $master->delete();

        return redirect()->route('master.index');

    }
}
