<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $num;
    public function __construct($num=2){
        $this->num=$num;
    }

    public function run()
    {
        factory(City::class,$this->num)->create();
    }
}
