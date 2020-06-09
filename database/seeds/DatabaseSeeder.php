<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MedlemmarSeeder::class);
        $this->call(FotbollSeeder::class);
        $this->call(GymnastikSeeder::class);
        $this->call(SkidorSeeder::class);
    }
}
