<?php

namespace App\Http\Controllers\NewCreate;

use App\Models\Service;
use App\Models\Pricelist;
use App\Models\PricelistLine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricelistLineCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idpricelist=new Pricelist;
        $idservice=new Service;
        $pricelistline=PricelistLine::join('pricelists' ,'pricelists.id' , '=','pricelist_lines.pricelist_id')->
        join('services' ,'services.id' , '=','pricelist_lines.service_id')->
        select('pricelist_lines.id', 'pricelist_lines.cost', 'pricelists.name as pricename', 'services.name as servname')->get();
         return view('admin.pages.index_pricelistline')->withPricelistline($pricelistline);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idpricelist=Pricelist::pluck('name','id');
        $idservice=Service::pluck('name','id');
        return view('admin.pages.add_pricelistline')->withIdpricelist($idpricelist)->withIdservice($idservice);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricelistline = new PricelistLine();

        $pricelistline->cost=$request->cost;
        $pricelistline->service_id=$request->service_id;
        $pricelistline->pricelist_id=$request->pricelist_id;
        $pricelistline->save();

        $request->session()->flash('success', 'Строка прайскуранта добавлена!');


        return redirect()->route('pricelistline.show', $pricelistline->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pricelistline=PricelistLine::find($id);

        return view('admin.pages.show_pricelistline')->withPricelistline($pricelistline);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idpricelist=Pricelist::pluck('name','id');
        $idservice=Service::pluck('name','id');
        $pricelistline=PricelistLine::find($id);

        return view('admin.pages.edit_pricelistline')->withPricelistline($pricelistline)->withIdpricelist($idpricelist)->withIdservice($idservice);;

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
        $pricelistline=PricelistLine::find($id);

        $pricelistline->cost=$request->cost;
        $pricelistline->service_id=$request->service_id;
        $pricelistline->pricelist_id=$request->pricelist_id;
        $pricelistline->save();

        $request->session()->flash('success', 'Строка прайскуранта изменена успешно!');

        return redirect()->route('pricelistline.show', $pricelistline->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricelistline=PricelistLine::find($id);

        $pricelistline->delete();

        return redirect()->route('pricelistline.index');

    }
}
