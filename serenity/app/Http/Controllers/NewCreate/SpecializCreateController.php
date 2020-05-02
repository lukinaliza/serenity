<?php

namespace App\Http\Controllers\NewCreate;

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
        $specializ=Specialization::orderBy('created_at')->get();
        return view('admin.pages.index_specializ')->withSpecializ($specializ);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_specializ');
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
        $specializ->master_id=$request->master_id;
        $specializ->save();

        $request->session()->flash('success', 'специалист добавлен!');


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

        return view('admin.pages.edit_specializ')->withSpecializ($specializ);

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
        $specializ->master_id=$request->master_id;
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
