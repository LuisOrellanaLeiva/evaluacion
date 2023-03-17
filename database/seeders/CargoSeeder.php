<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo1 = Cargo::create(['name'=>'Jefatura']);
        $cargo2 = Cargo::create(['name'=>'Analista']);
        $Cargo2 = Cargo::create(['name'=>'Programador']);
    }
}
