<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\ListSpecialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SpecializationCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialization=ListSpecialization::orderBy('created_at')->get();
        return view('admin.pages.index_specialization')->withSpecialization($specialization);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_specialization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialization = new ListSpecialization();

        $specialization->name=$request->name;
        $specialization->description=$request->description;
        $specialization->save();

        $request->session()->flash('success', 'Специализация добавлена!');

        //return view('admin.pages.show_specialization')->withSpecialization($specialization);

        return redirect()->route('specialization.show', $specialization->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialization=ListSpecialization::find($id);

        return view('admin.pages.show_specialization')->withSpecialization($specialization);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialization=ListSpecialization::find($id);

        return view('admin.pages.edit_specialization')->withSpecialization($specialization);

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
        $specialization=ListSpecialization::find($id);

        $specialization->name=$request->name;
        $specialization->description=$request->description;
        $specialization->save();

        $request->session()->flash('success', 'Специализация изменена успешно!');

        return redirect()->route('specialization.show', $specialization->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialization=ListSpecialization::find($id);

        $specialization->delete();

        return view('admin.pages.index_specialization');

    }
}
