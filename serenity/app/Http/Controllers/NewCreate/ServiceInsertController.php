<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceInsertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Service::orderBy('created_at')->get();
        return view('admin.pages.index_service')->withService($service);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();

        $service->name=$request->name;
        $service->description=$request->description;
        $service->list_special_id=$request->list_special_id;
        $service->save();

        $request->session()->flash('success', 'Сервис добавлен!');


        return redirect()->route('service.show', $service->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);

        return view('admin.pages.show_service')->withService($service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);

        return view('admin.pages.edit_service')->withService($service);

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
        $service=Service::find($id);

        $service->name=$request->name;
        $service->description=$request->description;
        $service->list_special_id=$request->list_special_id;
        $service->save();

        $request->session()->flash('success', 'Сервис изменен успешно!');

        return redirect()->route('service.show', $service->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);

        $service->delete();

        return redirect()->route('service.index');

    }
}
