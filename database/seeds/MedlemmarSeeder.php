<?php

use Illuminate\Database\Seeder;

class MedlemmarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Medlemmar::class, 100)->create();
    }
}
