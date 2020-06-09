<?php

use App\Models\ListSpecialization;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spec_brow=ListSpecialization::where('name', 'Архитектура бровей')->first();
        $spec_lash=ListSpecialization::where('name', 'Наращивание ресниц')->first();
        $spec_lami=ListSpecialization::where('name', 'Ламинирование ресниц')->first();

        $classic=new Service();
        $classic->name='Классическое наращивание ресниц';
        $classic->description='На одну натуральную ресницу крепится одна искусственная';
        $classic->list_specializations()->associate($spec_lash);
        $classic->save();

        $twoD=new Service();
        $twoD->name='Двойное наращивание ресниц';
        $twoD->description='На одну натуральную ресницу крепится 2 искусственной';
        $twoD->list_specializations()->associate($spec_lash);
        $twoD->save();

        $threeD=new Service();
        $threeD->name='Тройное наращивание ресниц';
        $threeD->description='На одну натуральную ресницу крепится 3 искусственных';
        $threeD->list_specializations()->associate($spec_lash);
        $threeD->save();

        $fourD=new Service();
        $fourD->name='4-5d наращивание ресниц';
        $fourD->description='На одну натуральную ресницу крепится 4-5 искусственных';
        $fourD->list_specializations()->associate($spec_lash);
        $fourD->save();

        $browhna=new Service();
        $browhna->name='Архитектура бровей хной';
        $browhna->description='Окрашивание бровей хной, подбор формы, коррекция';
        $browhna->list_specializations()->associate($spec_brow);
        $browhna->save();

        $browcol=new Service();
        $browcol->name='Архитектура бровей краской';
        $browcol->description='Окрашивание бровей краской, подбор формы, коррекция';
        $browcol->list_specializations()->associate($spec_brow);
        $browcol->save();

        $browlami=new Service();
        $browlami->name='Долговременная укладка';
        $browlami->description='Ламинирование, окрашивание бровей краской, подбор формы, коррекция';
        $browlami->list_specializations()->associate($spec_brow);
        $browlami->save();

        $itallami=new Service();
        $itallami->name='Итальянское восстановление на составах InLei';
        $itallami->description='Восстановление ресниц изнутри и снаружи, придание завитка ресницам, окрашивание краской';
        $itallami->list_specializations()->associate($spec_brow);
        $itallami->save();

        $velvet=new Service();
        $velvet->name='Velvet реконструкция ресниц';
        $velvet->description='Восстановление ресниц изнутри и снаружи, придание завитка ресницам, окрашивание краской';
        $velvet->list_specializations()->associate($spec_brow);
        $velvet->save();

    }
}
