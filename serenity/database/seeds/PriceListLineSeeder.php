<?php

use App\Models\Service;
use App\Models\Pricelist;
use App\Models\PricelistLine;
use Illuminate\Database\Seeder;

class PriceListLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $classic=Service::where('name', 'Классическое наращивание ресниц')->first();
         $twoD=Service::where('name', 'Двойное наращивание ресниц')->first();
         $threeD=Service::where('name', 'Тройное наращивание ресниц')->first();
         $fourD=Service::where('name', '4-5d наращивание ресниц')->first();

         $browhna=Service::where('name', 'Архитектура бровей хной')->first();

         $browcol=Service::where('name', 'Архитектура бровей краской')->first();
         $browlami=Service::where('name', 'Долговременная укладка')->first();

         $itallami=Service::where('name', 'Итальянское восстановление на составах InLei')->first();
         $velvet=Service::where('name', 'Velvet реконструкция ресниц')->first();

         $price_liz=Pricelist::where('name', 'Лиза')->first();
         $price_nast=Pricelist::where('name', 'Настя')->first();
         $price_mar=Pricelist::where('name', 'Марина')->first();

        $cl_mar=new PricelistLine();
        $cl_mar->cost='1100';
        $cl_mar->pricelists()->associate($price_mar);
        $cl_mar->services()->associate($classic);
        $cl_mar->save();

        $two_mar=new PricelistLine();
        $two_mar->cost='1300';
        $two_mar->services()->associate($twoD);
        $two_mar->pricelists()->associate($price_mar);
        $two_mar->save();



        $three_mar=new PricelistLine();
        $three_mar->cost='1500';
        $three_mar->services()->associate($threeD);
        $three_mar->pricelists()->associate($price_mar);
        $three_mar->save();

        $four_mar=new PricelistLine();
        $four_mar->cost='1700';
        $four_mar->services()->associate($fourD);
        $four_mar->pricelists()->associate($price_mar);
        $four_mar->save();

        $browcol_mar=new PricelistLine();
        $browcol_mar->cost='300';
        $browcol_mar->services()->associate($browcol);
        $browcol_mar->pricelists()->associate($price_mar);
        $browcol_mar->save();

        $browhen_mar=new PricelistLine();
        $browhen_mar->cost='300';
        $browhen_mar->services()->associate($browhna);
        $browhen_mar->pricelists()->associate($price_mar);
        $browhen_mar->save();

        $itallami_mar=new PricelistLine();
        $itallami_mar->cost='1000';
        $itallami_mar->services()->associate($itallami);
        $itallami_mar->pricelists()->associate($price_mar);
        $itallami_mar->save();

        $cl_liz=new PricelistLine();
        $cl_liz->cost='900';
        $cl_liz->services()->associate($classic);
        $cl_liz->pricelists()->associate($price_liz);
        $cl_liz->save();

         //liza
        $two_liz=new PricelistLine();
        $two_liz->cost='1100';
        $two_liz->services()->associate($twoD);
        $two_liz->pricelists()->associate($price_liz);
        $two_liz->save();

        $three_liz=new PricelistLine();
        $three_liz->cost='1300';
        $three_liz->services()->associate($threeD);
        $three_liz->pricelists()->associate($price_liz);
        $three_liz->save();

        $four_liz=new PricelistLine();
        $four_liz->cost='1500';
        $four_liz->services()->associate($fourD);
        $four_liz->pricelists()->associate($price_liz);
        $four_liz->save();

        $browcol_liz=new PricelistLine();
        $browcol_liz->cost='400';
        $browcol_liz->services()->associate($browcol);
        $browcol_liz->pricelists()->associate($price_liz);
        $browcol_liz->save();

        $browhen_liz=new PricelistLine();
        $browhen_liz->cost='400';
        $browhen_liz->services()->associate($browhna);
        $browhen_liz->pricelists()->associate($price_liz);
        $browhen_liz->save();


        $itallami_liz=new PricelistLine();
        $itallami_liz->cost='800';
        $itallami_liz->services()->associate($itallami);
        $itallami_liz->pricelists()->associate($price_liz);
        $itallami_liz->save();

        //nastya
        $itallami_nas=new PricelistLine();
        $itallami_nas->cost='1700';
        $itallami_nas->services()->associate($itallami);
        $itallami_nas->pricelists()->associate($price_nast);
        $itallami_nas->save();

        $velvet_nas=new PricelistLine();
        $velvet_nas->cost='1800';
        $velvet_nas->services()->associate($velvet);
        $velvet_nas->pricelists()->associate($price_nast);
        $velvet_nas->save();

        $browcol_nas=new PricelistLine();
        $browcol_nas->cost='500';
        $browcol_nas->services()->associate($browcol);
        $browcol_nas->pricelists()->associate($price_nast);
        $browcol_nas->save();

        $browhen_nas=new PricelistLine();
        $browhen_nas->cost='500';
        $browhen_nas->services()->associate($browhna);
        $browhen_nas->pricelists()->associate($price_nast);
        $browhen_nas->save();

        $browlam_nas=new PricelistLine();
        $browlam_nas->cost='1800';
        $browlam_nas->services()->associate($browlami);
        $browlam_nas->pricelists()->associate($price_nast);
        $browlam_nas->save();

}
}
