<?php

use Illuminate\Database\Seeder;

class GymnastikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gymnastik::class, 4)->create();
    }
}
