<?php

namespace App\Http\Controllers\NewCreate;

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

        $serviceorder=ServiceOrderes::orderBy('created_at')->get();
        return view('admin.pages.index_serviceorder')->withServiceorder($serviceorder);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_serviceorder');
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
        $serviceorder=ServiceOrderes::find($id);

        return view('admin.pages.edit_serviceorder')->withServiceorder($serviceorder);

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
