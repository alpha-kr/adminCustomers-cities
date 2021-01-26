<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
        factory(Customer::class,$this->num)->create();
    }
}
