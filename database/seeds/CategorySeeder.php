<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $arr = [
           ['type'=>'Whiskey'],
           ['type'=>'Vodka'],
           ['type'=>'Rum'],
           ['type'=>'Wine'],
           ['type'=>'Beer'],
           ['type'=>'Beverage'],
           ['type'=>'Other'],
       ];
       \App\Category::insert($arr);
    }
}
