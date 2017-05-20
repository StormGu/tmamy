<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    public function run() {
        Model::unguard();

        // $this->call(DummySlider::class);
        $this->call(DummyAdvertisementSeeder::class);

        Model::reguard();
    }
}
