<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BasicSeeder extends Seeder
{

    public function run() {
        Model::unguard();

        $this->call(BasicSettingsSeeder::class);
        $this->call(BasicLanguageSeeder::class);
        $this->call(BasicCountryZoneSeeder::class);
        $this->call(BasicCategorySeeder::class);

        Model::reguard();
    }
}
