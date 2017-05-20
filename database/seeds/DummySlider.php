<?php

use Illuminate\Database\Seeder;

class DummySlider extends Seeder
{

    public function run() {
        $faker = Faker\Factory::create();

        foreach (range(1, 2) as $i) {
            $userId = User::inRandomOrder()->first()->id;

            DB::table('advertisement')->insertGetId([

            ]);
        }
    }
}
