<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Pricelist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceListCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricelist=Pricelist::orderBy('created_at')->get();
        return view('admin.pages.index_pricelist')->withPricelist($pricelist);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_pricelist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricelist = new Pricelist();


        $pricelist->name=$request->name;
        $pricelist->from=$request->from;
        $pricelist->until=$request->until;
        $pricelist->save();

        $request->session()->flash('success', 'Прайслист добавлен!');


        return redirect()->route('pricelist.show', $pricelist->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pricelist=Pricelist::find($id);

        return view('admin.pages.show_pricelist')->withPricelist($pricelist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pricelist=Pricelist::find($id);

        return view('admin.pages.edit_pricelist')->withPricelist($pricelist);

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
        $pricelist=Pricelist::find($id);

        $pricelist->name=$request->name;
        $pricelist->from=$request->from;
        $pricelist->until=$request->until;
        $pricelist->save();

        $request->session()->flash('success', 'Прайслист изменен успешно!');

        return redirect()->route('pricelist.show', $pricelist->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricelist=Pricelist::find($id);

        $pricelist->delete();

        return redirect()->route('pricelist.index');

    }
}
