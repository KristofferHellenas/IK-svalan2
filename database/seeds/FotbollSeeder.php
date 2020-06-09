<?php

use Illuminate\Database\Seeder;

class FotbollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Fotboll::class, 7)->create();
    }
}
