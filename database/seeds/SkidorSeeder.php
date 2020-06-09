<?php

use Illuminate\Database\Seeder;

class SkidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Skidor::class, 4)->create();
    }
}