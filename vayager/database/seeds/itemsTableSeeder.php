<?php


use Illuminate\Database\Seeder;
use App\Item;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Item::truncate();
        factory(App\Item::class, 100)->create();
    }
}
