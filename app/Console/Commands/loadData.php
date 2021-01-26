<?php

namespace App\Console\Commands;

use App\City;
use App\Customer;
use CustomerSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class loadData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loadData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando utilizado para correr migraciones y seeders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $countCities=0;
        $countCustomers=0;
        $this->warn("Debe proporcionar valores mayores a 0 o detener el comando ctrl+c");
        while ($countCities<=0 || $countCities<=0) {
            if ($countCustomers<=0) {
                $countCustomers=$this->ask("Cuantos clientes desea crear");
            }
            if ($countCities<=0) {
                $countCities=$this->ask("Cuantas ciudades desea crear");
            }
        }
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed',['--class'=>'UsersTableSeeder']);
        factory(City::class,intval($countCities))->create();
        factory(Customer::class,intval( $countCustomers))->create();
        $this->info("creado exitosamente");
        
        
    }
}
