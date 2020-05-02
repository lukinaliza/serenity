<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Sheldue;
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
        $sheldue=Sheldue::orderBy('created_at')->get();
        return view('admin.pages.index_sheldue')->withSheldue($sheldue);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_sheldue');
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
        $sheldue->time=$request->time;
        $sheldue->service_id=$request->service_id;
        $sheldue->master_id=$request->master_id;
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
        $sheldue=Sheldue::find($id);

        return view('admin.pages.edit_sheldue')->withSheldue($sheldue);

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
        $sheldue->time=$request->time;
        $sheldue->service_id=$request->service_id;
        $sheldue->master_id=$request->master_id;
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
