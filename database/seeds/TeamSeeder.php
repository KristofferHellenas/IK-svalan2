<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Team::class, 15)->create()->each(function ($team){
            $slumptal = mt_rand(2,7);
            $team->users()->attach(App\User::all()->random($slumptal));
        });
    }
}
