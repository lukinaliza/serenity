<?php
use App\Models\ListSpecialization;
use Illuminate\Database\Seeder;

class ListSpecializSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $spec_brow=new ListSpecialization();
        $spec_brow->name='Архитектура бровей';
        $spec_brow->description='Оформление бровей, коррекция, окрашивание хной, окрашивание краской, долговременная укладка';
        $spec_brow->save();

        $spec_lash=new ListSpecialization();
        $spec_lash->name='Наращивание ресниц';
        $spec_lash->description='Все виды наращивания ресниц. От классики до 5D';
        $spec_lash->save();

        $spec_lami=new ListSpecialization();
        $spec_lami->name='Ламинирование ресниц';
        $spec_lami->description='Восстановительные процедуры для ресниц.';
        $spec_lami->save();

    }
}
