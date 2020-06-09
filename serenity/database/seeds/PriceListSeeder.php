<?php
use App\Models\Pricelist;
use Illuminate\Database\Seeder;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price_liz=new Pricelist();
        $price_liz->name='Лиза';
        $price_liz->from='2020-06-05 00:00:00';
        $price_liz->until='2021-06-05 00:00:00';
        $price_liz->save();

        $price_nast=new Pricelist();
        $price_nast->name='Настя';
        $price_nast->from='2020-06-05 00:00:00';
        $price_nast->until='2021-06-05 00:00:00';
        $price_nast->save();

        $price_marin=new Pricelist();
        $price_marin->name='Марина';
        $price_marin->from='2020-06-05 00:00:00';
        $price_marin->until='2021-06-05 00:00:00';
        $price_marin->save();



    }
}
